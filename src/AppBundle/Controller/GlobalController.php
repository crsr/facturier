<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalController extends Controller
{
    /**
     * @Route("/global/raspuns/html/{nume}/{prenume}", name="global_raspuns")
     * 
     */
    public function raspunsHtmlAction($nume,$prenume)
    {
        $data = array();
        $numar1 = 10;
        $numar2 = 4;

        for($i = 1; $i <= $numar1; $i++){
            for($j = 1; $j <= $numar2; $j++){
                $data[$i][] = 'c'.$i.$j;
            }
        }

        $this->addFlash(
            'notice',
            'Sunt afisat numai in raspunul acesta!'
        );

        return $this->render(
            'global/raspunsHtml.html.twig',
            array('res' => $data)
        );

    }

    public function paramsAction($p1, $p2){

        return $this->render(
            'global/params.html.twig',
            array('p1' => $p1, 'p2' => $p2)
        );
    }
}
