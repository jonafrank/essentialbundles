<?php

namespace Essentials\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ExampleController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExampleBundle:Example:index.html.twig');
    }
}
