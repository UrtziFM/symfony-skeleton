<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky_you")
     */
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render('templates/base.html.twig',
        ['number' => $number,
        ]);
    }
}
?>