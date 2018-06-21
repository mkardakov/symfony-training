<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/20/18
 * Time: 9:30 PM
 */

namespace AppBundle\Service\Cache;


use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Exception\InvalidArgumentException;

class CacheFactory
{

    /**
     * @param $driver
     * @return CacheInterface
     */
    public static function create($driver)
    {
        $cacheClass = sprintf('Symfony\Component\Cache\Simple\%sCache', $driver);
        if (!class_exists($cacheClass)) {
            throw new InvalidArgumentException("Class $cacheClass does not exist");
        }
        return new $cacheClass;
    }
}