<?php

namespace App\Controller;

use App\Entity\Hny;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HnyController extends AbstractController
{
    /**
     * @Route("/hny", name="hnyindex")
     */
    public function hnyindex()
    {
        $greetings = $this->getDoctrine()
            ->getRepository(Hny::class)
            ->findAll();

        if (!$greetings) {
            throw $this->createNotFoundException(
                'No greeting found'
            );
        }

        return $this->render('hny/index.html.twig', [
            'controller_name' => 'HnyController',
            'greetings' => $greetings,
        ]);

    }

    /**
     * @Route("/hny/isocoded/{isocode}", name="hny_byisocode")
     */
    public function findRandomEntity(string $isocode = 'de_DE')
    {
        $greetings = $this->getDoctrine()
            ->getRepository(Hny::class)
            ->findByIsocode($isocode);

        if (!$greetings) {
            throw $this->createNotFoundException(
                'No greeting found'
            );
        }

        return $this->render('hny/index.html.twig', [
            'controller_name' => 'HnyController',
            'greetings' => $greetings,
        ]);
    }
}
