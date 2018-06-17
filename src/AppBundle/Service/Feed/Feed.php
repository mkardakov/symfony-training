<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 4:26 PM
 */

namespace AppBundle\Service\Feed;


use AppBundle\Service\Parser\ParserInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Psr7\Response;

abstract class Feed
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var ParserInterface
     */
    protected $parser;

    /**
     * Feed constructor.
     * @param Client $client
     * @param ParserInterface $parser
     */
    public function __construct(ClientInterface $client, ParserInterface $parser)
    {
        $this->client = $client;
        $this->parser = $parser;
    }

    abstract public function getData(Response $response);

    /**
     * @return Promise
     */
    abstract public function getPromise();
}