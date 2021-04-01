<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Entreprise;
use App\Entity\Etudiant;
use App\Entity\Personnel;
use App\Repository\EntrepriseType;
use App\Repository\EtudiantType;
use App\Repository\PersonnelType;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="Accueil")
     */
    public function indexAction(): Response
    {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Entreprise::class);
        $listeEntreprise = $repository->findall();

        $repository2 = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository(Etudiant::class);
        $listeEtudiant = $repository->findall();


        return $this->render('default/index.html.twig', array('ListeEntreprise' => $listeEntreprise,'ListeEtudiant' => $listeEtudiant, ['controller_name' => 'DefaultController']));
    }

    /**
     * @Route("/listeentreprise", name="ListeEntreprise")
     */
    public function ListeEntrepriseAction(): Response
    {

    }

}
