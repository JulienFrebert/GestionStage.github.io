<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\Personnel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class EntreprisesController
 * @package App\Controller
 * @Route("/entreprises", name="entreprises")
 */
class EntreprisesController extends AbstractController
{
    /**
     * @Route("/entreprises", name="entreprises")
     */
    public function index(): Response
    {
        // Liste des entreprises
        $entreprises = $this->getDoctrine()->getRepository(Entreprise::class)->findAll();
        dump($entreprises);
        return $this->render('entreprises/index.html.twig', [
            'entreprises' => $entreprises
        ]);
    }

    public function show($id): Response
    {
        $entreprises = $this->getDoctrine()->getRepository(Entreprise::class)->find($id);
        $contact = $entreprises-> getPersonnel();

        return $this->render('entreprises/index.html.twig', [
            'entreprises' => $entreprises,
            'personnels' => $contact,
        ]);
    }

}
