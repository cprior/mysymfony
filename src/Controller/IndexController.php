<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return new Response(
            '<html><body>cpr.in-berlin.de</body></html>'
        );
    }
}
