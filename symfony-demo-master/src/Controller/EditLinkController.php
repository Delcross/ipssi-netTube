<?php

namespace App\Controller;

use App\Entity\EditLink;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\EditLinkType;
use App\Repository\EditLinkRepository;

class EditLinkController extends AbstractController
{
    /**
     * @Route("/edit/link", name="edit_link")
     */
    public function index(Request $request)
    {
        $editLink = new EditLink();
        $form = $this->createForm(EditLinkType::class, $editLink);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($editLink);
            $createdAt = new \DateTime;
            $editLink->setCreatedAt($createdAt);
            $entityManager->flush();
            //this->redirectToRoute('register_sucess');
        }

        return $this->render('edit_link/index.html.twig', [
            'form' => $form->createView(),
            'editLink' => $editLink,
        ]);
    }
}
