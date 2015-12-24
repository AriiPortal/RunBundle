<?php

namespace Arii\RunBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Yaml\Parser;

class HistoryController extends Controller
{

    public function indexAction()
    {
        return $this->render('AriiRunBundle:History:index.html.twig');
    }

        
}
