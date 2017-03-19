<?php

namespace Runalyze\Bundle\GlossaryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 * @package Runalyze\Bundle\GlossaryBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="glossary_index")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('GlossaryBundle::overview.html.twig');
    }
}
