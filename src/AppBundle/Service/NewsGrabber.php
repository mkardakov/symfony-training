<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:24 PM
 */

namespace AppBundle\Service;

use AppBundle\Service\Feed\Feed;
use AppBundle\Service\Feed\FeedInterface;
use AppBundle\Service\Feed\RssParser;
use Doctrine\Common\Cache\FilesystemCache;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Simple\ApcuCache;
use Symfony\Component\Cache\Simple\NullCache;

/**
 * Class NewsGrabber
 * @package AppBundle\Service
 */
class NewsGrabber
{

    /**
     * @var array
     */
    protected $feeds = [];

    /**
     * @var CacheInterface
     */
    protected $cache;


    /**
     * @param Feed[] ...$feeds
     */
    public function __construct(Feed ...$feeds)
    {
        $this->feeds = $feeds;
        $this->cache = new \Symfony\Component\Cache\Simple\FilesystemCache();
    }


    /**
     * @param mixed $cache
     * @return $this;
     */
    public function setCache(CacheInterface $cache)
    {
        $this->cache = $cache;
        return $this;
    }



    /**
     * @return mixed
     */
    public function read()
    {
        if ($this->cache->has('news')) {
            return $this->cache->get('news');
        }
        if (empty($this->feeds)) {
            throw new \DomainException('No feeds attached to the NewsGrabber');
        }
        $promises = [];
        foreach ($this->feeds as $key => $feed) {
            $promises[$key] = $feed->getPromise();
        }
        $results = \GuzzleHttp\Promise\settle($promises)->wait();
        $data = [];
        foreach ($results as $key => $news) {
            $data = array_merge($data, $this->feeds[$key]->getData($news['value']));
        }
        $this->cache->set('news', $data, 3600);
        return $data;
    }

}