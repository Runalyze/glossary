<?php

namespace Runalyze\Bundle\GlossaryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="glossary_index")
     */
    public function indexAction()
    {
        return $this->render('GlossaryBundle::overview.html.twig');
    }

    /**
     * @Route("/atl", name="glossary_atl")
     */
    public function atlAction()
    {
        return $this->render('GlossaryBundle:topics:atl.html.twig');
    }

    /**
     * @Route("/ctl", name="glossary_ctl")
     */
    public function ctlAction()
    {
        return $this->render('GlossaryBundle:topics:ctl.html.twig');
    }

    /**
     * @Route("/easy-trimp", name="glossary_easy_trimp")
     */
    public function easyTrimpAction()
    {
        return $this->render('GlossaryBundle:topics:easy_trimp.html.twig');
    }

    /**
     * @Route("/heat-index", name="glossary_heat_index")
     */
    public function heatIndexAction()
    {
        return $this->render('GlossaryBundle:topics:heat_index.html.twig');
    }

    /**
     * @Route("/hrv", name="glossary_hrv")
     */
    public function hrvAction()
    {
        return $this->render('GlossaryBundle:topics:hrv.html.twig');
    }

    /**
     * @Route("/marathon-shape", name="glossary_marathon_shape")
     */
    public function marathonShapeAction()
    {
        return $this->render('GlossaryBundle:topics:marathon_shape.html.twig');
    }

    /**
     * @Route("/maximal-heart-rate", name="glossary_maximal_heart_rate")
     */
    public function maximalHeartRateAction()
    {
        return $this->render('GlossaryBundle:topics:maximal_heart_rate.html.twig');
    }

    /**
     * @Route("/monotony", name="glossary_monotony")
     */
    public function monotonyAction()
    {
        return $this->render('GlossaryBundle:topics:monotony.html.twig');
    }

    /**
     * @Route("/performance-condition", name="glossary_performance_condition")
     */
    public function performanceConditionAction()
    {
        return $this->render('GlossaryBundle:topics:performance_condition.html.twig');
    }

    /**
     * @Route("/resting-heart-rate", name="glossary_resting_heart_rate")
     */
    public function restingHeartRateAction()
    {
        return $this->render('GlossaryBundle:topics:resting_heart_rate.html.twig');
    }

    /**
     * @Route("/rpe", name="glossary_rpe")
     */
    public function rpeAction()
    {
        return $this->render('GlossaryBundle:topics:rpe.html.twig');
    }

    /**
     * @Route("/swolf", name="glossary_swolf")
     */
    public function swolfAction()
    {
        return $this->render('GlossaryBundle:topics:swolf.html.twig');
    }

    /**
     * @Route("/training_effect", name="glossary_training_effect")
     */
    public function trainingEffectAction()
    {
        return $this->render('GlossaryBundle:topics:training_effect.html.twig');
    }

    /**
     * @Route("/training_strain", name="glossary_training_strain")
     */
    public function trainingStrainAction()
    {
        return $this->render('GlossaryBundle:topics:training_strain.html.twig');
    }

    /**
     * @Route("/trimp", name="glossary_trimp")
     */
    public function trimpAction()
    {
        return $this->render('GlossaryBundle:topics:trimp.html.twig');
    }

    /**
     * @Route("/vo2max", name="glossary_vo2max")
     */
    public function vo2maxAction()
    {
        return $this->render('GlossaryBundle:topics:vo2max.html.twig');
    }

    /**
     * @Route("/windchill", name="glossary_windchill")
     */
    public function windchillAction()
    {
        return $this->render('GlossaryBundle:topics:windchill.html.twig');
    }
}
