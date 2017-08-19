<?php

namespace Runalyze\Bundle\GlossaryBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    private function renderCorrectView($view, $request) {

        if ($request->isXmlHttpRequest()) {
            return $this->render($view, [
                'extends' => 'base_logged_in.twig',
                'urlClass' => ''
            ]);
        } else {
            return $this->render($view, [
                'extends' => 'base_not_logged_in.html.twig',
                'urlClass' => 'class="external"'
            ]);
        }
    }

    /**
     * @Route("/", name="glossary-index")
     */
    public function indexAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle::overview.html.twig', $request);
    }

    /**
     * @Route("/atl", name="glossary-atl")
     */
    public function atlAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:atl.html.twig', $request);
    }

    /**
     * @Route("/ctl", name="glossary-ctl")
     */
    public function ctlAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:ctl.html.twig', $request);
    }

    /**
     * @Route("/tsb", name="glossary-tsb")
     */
    public function tsbAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:tsb.html.twig', $request);
    }

    /**
     * @Route("/easy-trimp", name="glossary-easy-trimp")
     */
    public function easyTrimpAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:easy_trimp.html.twig', $request);
    }

    /**
     * @Route("/heat-index", name="glossary-heat-index")
     */
    public function heatIndexAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:heat_index.html.twig', $request);
    }

    /**
     * @Route("/hrv", name="glossary-hrv")
     */
    public function hrvAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:hrv.html.twig', $request);
    }

    /**
     * @Route("/marathon-shape", name="glossary-marathon-shape")
     */
    public function marathonShapeAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:marathon_shape.html.twig', $request);
    }

    /**
     * @Route("/maximum-heart-rate", name="glossary-maximum-heart-rate")
     */
    public function maximumHeartRateAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:maximum_heart_rate.html.twig', $request);
    }

    /**
     * @Route("/monotony", name="glossary-monotony")
     */
    public function monotonyAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:monotony.html.twig', $request);
    }

    /**
     * @Route("/performance-condition", name="glossary-performance-condition")
     */
    public function performanceConditionAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:performance_condition.html.twig', $request);
    }

    /**
     * @Route("/resting-heart-rate", name="glossary-resting-heart-rate")
     */
    public function restingHeartRateAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:resting_heart_rate.html.twig', $request);
    }

    /**
     * @Route("/rpe", name="glossary-rpe")
     */
    public function rpeAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:rpe.html.twig', $request);
    }

    /**
     * @Route("/swolf", name="glossary-swolf")
     */
    public function swolfAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:swolf.html.twig', $request);
    }

    /**
     * @Route("/training-effect", name="glossary-training-effect")
     */
    public function trainingEffectAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:training_effect.html.twig', $request);
    }

    /**
     * @Route("/training-strain", name="glossary-training-strain")
     */
    public function trainingStrainAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:training_strain.html.twig', $request);
    }

    /**
     * @Route("/trimp", name="glossary-trimp")
     */
    public function trimpAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:trimp.html.twig', $request);
    }

    /**
     * @Route("/vo2max", name="glossary-vo2max")
     */
    public function vo2maxAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:vo2max.html.twig', $request);
    }

    /**
     * @Route("/windchill", name="glossary-windchill")
     */
    public function windchillAction(Request $request)
    {
        return $this->renderCorrectView('GlossaryBundle:topics:windchill.html.twig', $request);
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
