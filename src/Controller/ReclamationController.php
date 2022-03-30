<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;










/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    private $twilio;
    private $fromNumber;
    // public function __construct(Client $twilio)
    // {
       
    //     $this->twilio = $twilio;
    //     $this->fromNumber = "+12075699817";

    // }





/**
     * @Route("/decroissant", name="decroissant")
     */
    public function TrierParNomr(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamations = $repository->findByNamer();

        return $this->render('reclamation/indexBack.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
    /**
     * @Route("/croissant", name="croissant")
     */
    public function TrierParNomdesr(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamations = $repository->findByNameascr();

        return $this->render('reclamation/indexBack.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }































    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
















    /**
     * @Route("/back", name="reclamation_index2", methods={"GET"})
     */
    public function index2(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/indexBack.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {

        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // $this->twilio->messages->create("+216". "51311763", [
            //     'recform' => $this->fromNumber,
            //     'body' => "hello"
            // ]);
            $time = date('Y-m-d H:i:s', (time()));
            $reclamation->setDate(\DateTime::createFromFormat('Y-m-d H:i:s', $time));
            $entityManager->persist($reclamation);
            $entityManager->flush();
            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'recform' => $form->createView(),
        ]);

    }



    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    
    /**
     * @Route("/back/{id}", name="reclamation_show_back", methods={"GET"})
     */
    public function show2(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/showBack.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'recform' => $form->createView(),
        ]);
    }

    
/**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }
        return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/back/{id}", name="reclamation_delete_back", methods={"POST"})
     */
    public function delete2(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }
        return $this->redirectToRoute('reclamation_index2', [], Response::HTTP_SEE_OTHER);
    }



    /**
     * @Route("/newreponse/{id}", name="reponse_new2", methods={"GET", "POST"})
     */
    public function newreponse(Request $request, EntityManagerInterface $entityManager,$id): Response
    {

        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        $reclamation=$this->getDoctrine()->getManager()->getRepository(Reclamation::class)->find($id);

        if ($form->isSubmitted() && $form->isValid()) {

            $time = date('Y-m-d H:i:s', (time()));
            $reponse->setDate(\DateTime::createFromFormat('Y-m-d H:i:s', $time));
            $reponse->setReclamation($reclamation);
            $entityManager->persist($reponse);
            $entityManager->flush();
            return $this->redirectToRoute('reclamation_index2', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/reponse.html.twig', [
            'reclamation' => $reponse,
            'recform' => $form->createView(),
        ]);
    }






/**
     * @Route("/order1/{searchString}", name="order")
     */
    public function index3(ReclamationRepository $reclamationRepository, $searchString): Response
    {
        return $this->render('reclamation/indexBack.html.twig', [
            'reclamations' => $reclamationRepository->findByExampleField($searchString),
           
        ]);
    }
































    public function aff_back(Request $request , ReclamationRepository $reclamationtRepository): Response
     {

        if ( $request->isMethod('POST')){
            if ( $request->request->get('optionsRadios')){
                $trier_cle = $request->request->get('optionsRadios');
                switch($trier_cle){
                    case 'sujet':
                        $reclamations_triee = $reclamationRepository->TrierParSujet();
                        break;

                    case 'date':
                        $reclamations_triee = $reclamationRepository->TrierParDate();
                        break;
                }
                return $this->render('reclamation/index.html.twig', [
                    'reclamations' => $reclamation_triee,
                ]);

            }
        }
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
    ]);


     }



}






