<?php

namespace App\Controller;

use App\Entity\Team;
use App\Entity\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\AddTeamType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use  Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/index", name="admin/index")
     */
    public function index(): Response
    {
        return $this->render('base-back.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

   /**
     * @Route("/admin/Users", name="admin/Users", methods={"GET"})
     */
    public function list_users(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('Back-office/list_users.html.twig', array("users" => $users));
    }

    /**
     * @Route("/admin/deleteUser/{id}", name="deleteUser")
     */
    public function deleteUser($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute("admin/Users");
    }
    /**
     * @Route("/admin/deleteTeam/{id}", name="deleteTeam")
     */
    public function deleteTeam($id)
    {
        $user = $this->getUser();
        $user->setTeam(null);
        $team = $this->getDoctrine()->getRepository(Team::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($team);
        $em->flush();
        return $this->redirectToRoute("admin/Teams");
    }

    /**
     * @Route("/admin/Teams", name="admin/Teams")
     */
    public function list_teams(): Response
    {
        $teams = $this->getDoctrine()->getRepository(Team::class)->findAll();
        return $this->render('Back-office/list_team.html.twig', array('teams' => $teams));
    }

    /**
     * @Route("/admin/AddTeam", name="admin/AddTeam")
     */
    public function list_addteam(Request $request): Response
    {
        $team = new Team();
        $form = $this->createForm(AddTeamType::class, $team);
        $form->add('Add Team', SubmitType::class, [
            'attr' => ['class' => 'btn btn-block bg-gradient-warning'],
        ]);
        $form->add('Reset', ResetType::class, [
            'attr' => ['class' => 'btn btn-block bg-gradient-warning'],
        ]);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            return $this->redirectToRoute('admin/Teams');
        }
        return $this->render(
            'Back-office/add_team.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/admin/UsersPDF", name="UsersPDF")
     */
    public function UsersPDF()
    {
        $options = new Options();
        $options->set('defaultFont', 'Roboto');


        $dompdf = new Dompdf($options);
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        // return $this->render('Back-office/UsersPDF.html.twig', array("users" => $users));
        $data = array(
            'headline' => 'my headline'
        );
        $html = $this->renderView('Back-office/UserPDF.html.twig', array("users" => $users));


        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("testpdf.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/admin/UsersPDF", name="UsersPDF")
     */
    // public function PDF()
    // {
    //     $users = $this->getDoctrine()->getRepository(User::class)->findAll();
    //     return $this->render('Back-office/UserPDF.html.twig', array("users" => $users));
    // }

}
