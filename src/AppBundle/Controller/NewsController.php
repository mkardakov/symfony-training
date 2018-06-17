<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:03 PM
 */

namespace AppBundle\Controller;

use AppBundle\Service\NewsGrabber;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class NewsController
 * @package AppBundle\Controller
 */
class NewsController extends Controller implements Cachable
{
    /**
     * @Route("/news", name="news")
     */
    public function indexAction(NewsGrabber $grabber)
    {
        $news = $grabber->read();
        return $this->render('news/news.twig', [
            'news' => $news
        ]);

    }
}