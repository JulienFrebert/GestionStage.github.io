<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PersonnelController
 * @package App\Controller
 * @Route("/personnels", name="personnels")
 */
class PersonnelsController extends AbstractController
{
    /**
     * @Route("/personnels", name="personnels")
     */
    public function index(): Response
    {
        // Liste des contacts des l'entreprise
        $contact = $this->getDoctrine()->getRepository(Entreprise::class)->findContactById();
        dump($contact);
        return $this->render('entreprises/index.html.twig', [
            'contact' => $contact
        ]);
    }
}
