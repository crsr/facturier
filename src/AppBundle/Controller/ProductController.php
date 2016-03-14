<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/lista_produse", name="lista_produse")
     */
    public function indexAction(Request $request)
    {
        for($i=0;$i<30;$i++){
            for($j=0;$j<10;$j++){
                $rez[$i][] ="product value $i,$j";
            }
        }

        return $this->render('product/index.html.twig', array(
            'entities' => $rez,
        ));
    }

}
