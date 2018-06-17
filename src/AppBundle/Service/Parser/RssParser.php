<?php
/**
 * Created by PhpStorm.
 * User: mkardakov
 * Date: 6/16/18
 * Time: 5:19 PM
 */

namespace AppBundle\Service\Parser;


use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class RssParser
 * @package AppBundle\Service\Feed
 */
class RssParser implements ParserInterface
{

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    protected $recordsNumber;

    /**
     * RssParser constructor.
     * @param SerializerInterface $serializer
     * @param int $recordNumber
     */
    public function __construct(SerializerInterface $serializer, $recordNumber = 5)
    {
        $this->serializer = $serializer;
        $this->recordsNumber = $recordNumber;
    }

    /**
     * @param $data
     * @return array
     */
    public function parse($data)
    {
        $obj = new \SimpleXMLElement($data);
        $items = $obj->xpath("//channel/item[position() <= {$this->recordsNumber}]");
        return array_map(function (\SimpleXMLElement $item) {
            return [
                'title' => (string)$item->title,
                'link' => (string)$item->link
            ];
        }, $items);
    }
}