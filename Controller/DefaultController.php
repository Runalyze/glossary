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
     * @Route("/", name="glossary-index")
     */
    public function indexAction()
    {
        return $this->render('GlossaryBundle::overview.html.twig');
    }

    /**
     * @Route("/atl", name="glossary-atl")
     */
    public function atlAction()
    {
        return $this->render('GlossaryBundle:topics:atl.html.twig');
    }

    /**
     * @Route("/ctl", name="glossary-ctl")
     */
    public function ctlAction()
    {
        return $this->render('GlossaryBundle:topics:ctl.html.twig');
    }

    /**
     * @Route("/tsb", name="glossary-tsb")
     */
    public function tsbAction()
    {
        return $this->render('GlossaryBundle:topics:tsb.html.twig');
    }

    /**
     * @Route("/easy-trimp", name="glossary-easy-trimp")
     */
    public function easyTrimpAction()
    {
        return $this->render('GlossaryBundle:topics:easy_trimp.html.twig');
    }

    /**
     * @Route("/heat-index", name="glossary-heat-index")
     */
    public function heatIndexAction()
    {
        return $this->render('GlossaryBundle:topics:heat_index.html.twig');
    }

    /**
     * @Route("/hrv", name="glossary-hrv")
     */
    public function hrvAction()
    {
        return $this->render('GlossaryBundle:topics:hrv.html.twig');
    }

    /**
     * @Route("/marathon-shape", name="glossary-marathon-shape")
     */
    public function marathonShapeAction()
    {
        return $this->render('GlossaryBundle:topics:marathon_shape.html.twig');
    }

    /**
     * @Route("/maximum-heart-rate", name="glossary-maximum-heart-rate")
     */
    public function maximumHeartRateAction()
    {
        return $this->render('GlossaryBundle:topics:maximum_heart_rate.html.twig');
    }

    /**
     * @Route("/monotony", name="glossary-monotony")
     */
    public function monotonyAction()
    {
        return $this->render('GlossaryBundle:topics:monotony.html.twig');
    }

    /**
     * @Route("/performance-condition", name="glossary-performance-condition")
     */
    public function performanceConditionAction()
    {
        return $this->render('GlossaryBundle:topics:performance_condition.html.twig');
    }

    /**
     * @Route("/resting-heart-rate", name="glossary-resting-heart-rate")
     */
    public function restingHeartRateAction()
    {
        return $this->render('GlossaryBundle:topics:resting_heart_rate.html.twig');
    }

    /**
     * @Route("/rpe", name="glossary-rpe")
     */
    public function rpeAction()
    {
        return $this->render('GlossaryBundle:topics:rpe.html.twig');
    }

    /**
     * @Route("/swolf", name="glossary-swolf")
     */
    public function swolfAction()
    {
        return $this->render('GlossaryBundle:topics:swolf.html.twig');
    }

    /**
     * @Route("/training-effect", name="glossary-training-effect")
     */
    public function trainingEffectAction()
    {
        return $this->render('GlossaryBundle:topics:training_effect.html.twig');
    }

    /**
     * @Route("/training-strain", name="glossary-training-strain")
     */
    public function trainingStrainAction()
    {
        return $this->render('GlossaryBundle:topics:training_strain.html.twig');
    }

    /**
     * @Route("/trimp", name="glossary-trimp")
     */
    public function trimpAction()
    {
        return $this->render('GlossaryBundle:topics:trimp.html.twig');
    }

    /**
     * @Route("/vo2max", name="glossary-vo2max")
     */
    public function vo2maxAction()
    {
        return $this->render('GlossaryBundle:topics:vo2max.html.twig');
    }

    /**
     * @Route("/windchill", name="glossary-windchill")
     */
    public function windchillAction()
    {
        return $this->render('GlossaryBundle:topics:windchill.html.twig');
    }

    /**
     * @Route("/groundcontact", name="glossary-groundcontact")
     */
    public function groundcontactAction()
    {
        return $this->render('GlossaryBundle:topics:groundcontact.html.twig');
    }

    /**
     * @Route("/groundcontact-time-balance", name="glossary-groundcontact-time-balance")
     */
    public function groundcontactTimeBalanceAction()
    {
        return $this->render('GlossaryBundle:topics:groundcontact_balance.html.twig');
    }

    /**
     * @Route("/vertical-ratio", name="glossary-vertical-ratio")
     */
    public function verticalRatioAction()
    {
        return $this->render('GlossaryBundle:topics:vertical_ratio.html.twig');
    }

    /**
     * @Route("/vertical-oscillation", name="glossary-vertical-oscillation")
     */
    public function verticalOscillationAction()
    {
        return $this->render('GlossaryBundle:topics:vertical_oscillation.html.twig');
    }

    /**
     * @Route("/stride-length", name="glossary-stride-length")
     */
    public function strideLengthAction()
    {
        return $this->render('GlossaryBundle:topics:stride_length.html.twig');
    }

    /**
     * @Route("/cadence", name="glossary-cadence")
     */
    public function cadenceAction()
    {
        return $this->render('GlossaryBundle:topics:cadence.html.twig');
    }
}
