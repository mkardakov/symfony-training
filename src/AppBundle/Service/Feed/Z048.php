<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:28 PM
 */

namespace AppBundle\Service\Feed;


use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Response;

class Z048 extends Feed
{


    /**
     * @return Promise
     */
    public function getPromise()
    {
        return $this->client->getAsync('https://www.048.ua/rss');
    }


    public function getData(Response $response)
    {
        return $this->parser->parse((string)$response->getBody());
    }
}