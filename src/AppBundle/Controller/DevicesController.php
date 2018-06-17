<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/17/18
 * Time: 12:19 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class DevicesController
 * @package AppBundle\Controller
 */
class DevicesController extends Controller
{

    /**
     * @Route("/devices", name="devices")
     */
    public function indexAction()
    {
        return new Response('Devices');
    }
}