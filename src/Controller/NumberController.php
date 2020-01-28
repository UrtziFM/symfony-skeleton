<?php
// src/Controller/NumberController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class NumberController extends AbstractController
{
    /**
     * @Route("/number", name="number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render('./number/index.html.twig',
        ['number' => $number,
        ]);
    }
}
?>