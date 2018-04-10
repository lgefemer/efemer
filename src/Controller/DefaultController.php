<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/register", name="register", methods="POST")
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $em)
    {
        $content = $request->getContent();

        dump($content);
    }

}