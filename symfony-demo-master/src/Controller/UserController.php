<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(Request $request)
    {
        $user = new User();   
        $form = $this->createForm(UserType::class, $user);   
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // $this->redirectToRoute(‘register_sucess’);
        }

        return $this->render('user/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}