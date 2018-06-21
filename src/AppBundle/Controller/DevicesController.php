<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/17/18
 * Time: 12:19 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Coords;
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
     * @Route("/devices", name="devices", methods={"GET"})
     */
    public function indexAction()
    {
        $date = \DateTime::createFromFormat('Y-m-d', '2018-06-17');
        $coords = $this->getDoctrine()
            ->getRepository(Coords::class)
            ->getCoordsArrayByDate($date);
        return $this->render('devices/map.twig', [
            'coords' => $coords
        ]);
    }

    /**
     * @Route("/addCoordinates")
     */
    public function addAction()
    {
        // file_put_contents('/tmp/coords', var_export($_REQUEST, 1), FILE_APPEND);
        return new Response('hello');
    }
}