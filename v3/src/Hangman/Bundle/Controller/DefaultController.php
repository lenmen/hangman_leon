<?php

namespace Hangman\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HangmanBundle:Default:index.html.twig');
    }
}
