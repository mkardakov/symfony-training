<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:46 PM
 */

namespace AppBundle\Service\Feed;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;

class Dumskaya extends Feed
{

    /**
     * @param Response $response
     * @return mixed
     */
    public function getData(Response $response)
    {
        return $this->parser->parse((string)$response->getBody());
    }

    /**
     * @return PromiseInterface
     */
    public function getPromise()
    {
        return $this->client->getAsync('http://dumskaya.net/rssnews/');
    }
}