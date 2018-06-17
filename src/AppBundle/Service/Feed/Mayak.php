<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:32 PM
 */

namespace AppBundle\Service\Feed;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;

class Mayak extends Feed
{


    /**
     * @return PromiseInterface
     */
    public function getPromise()
    {
        return $this->client->getAsync('http://mayak.org.ua/feed/');
    }


    public function getData(Response $response)
    {
        return $this->parser->parse((string)$response->getBody());
    }
}