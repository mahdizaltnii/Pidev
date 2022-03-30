<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Swift_Mailer;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="event_index", methods={"GET"})
     */
    public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }



 




    /**
     * @Route("/listevenement", name="evenement_pdf", methods={"GET"})
     */
   
  
    public function listpdf(EventRepository $EventRepository): Response
    {
$pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');
    
    // Instantiate Dompdf with our options
    $dompdf = new Dompdf($pdfOptions);
    $event = $EventRepository->findAll();
       
    // Retrieve the HTML generated in our twig file
    $html = $this->renderView('event/pdf.html.twig', [
        'event' => $event,
    ]);
    
    // Load HTML to Dompdf
    $dompdf->loadHtml($html);
    
    // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser (force download)
    $dompdf->stream("mypdf.pdf", [
        "Attachment" => false
    ]);

}


/**
     * @Route("/DESCr", name="DESCr")
     */
    public function TrierParNomr(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $events = $repository->findByNamer();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }
    /**
     * @Route("/ASCr", name="ASCr")
     */
    public function TrierParNomdesr(Request $request): Response
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $events = $repository->findByNameascr();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }























    /**
     * @Route("/new", name="event_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, Swift_Mailer $mailer): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('picture')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            try{
                $file->move(
                    $this->getParameter('uploads_directory'),
                    $fileName
                );
            }catch(FileException $e){

            }
            $entityManager->persist($event);
            $event->setPicture($fileName);
            $this->mail($mailer);
            $entityManager->flush();
             return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/showFront", name="event_show_front")
     */
    public function readFront(Request $request, PaginatorInterface $paginator)
    {
   $donnees = $this->getDoctrine()->getRepository(Event::class)->findBy([]);
   $event = $paginator->paginate(
       $donnees,
       $request->query->getInt('page' ,1),
       1
   );





         return $this->render('event/showfront.html.twig', array(
            'events' => $event,

        ));
    
}







    /**
     * @Route("/{id}", name="event_show", methods={"GET"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }















    /**
     * @Route("/{id}/edit", name="event_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="event_delete", methods={"POST"})
     */
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
    }


/**
     * @Route("/search1/{searchString}", name="search")
     */
    public function searchEnt($searchString,SerializerInterface $serializer)
    {
        
        //$serializer = new Serializer([new ObjectNormalizer()]);
      
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $users = $repository->findByExampleField($searchString);
        $data = $serializer->normalize($users,'json',['groups'=>'post:read']);
        return new JsonResponse($data);
    }






    public function mail( \Swift_Mailer $mailer)
{
    $message = (new \Swift_Message('Vous Avez Ajouter un évenement!!'))
        ->setFrom('leith.ghandri@gmail.com')
        ->setTo('zouhour.gawa@esprit.tn')
        ->setBody(
            $this->renderView(
                // templates/emails/registration.html.twig
                'emails/registration.html.twig',
              
            ),
            'text/html'
            
        );
        $mailer->send($message);
        // you can remove the following code if you don't define a text version for your emails
        //->addPart(
            //$this->renderView(
                // templates/emails/registration.txt.twig
               // 'emails/registration.txt.twig',
                
            //),
           // 'text/plain'
            
    //;

    $mailer->send($message);
        }
}