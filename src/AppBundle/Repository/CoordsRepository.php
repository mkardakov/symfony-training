<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Coords;

/**
 * CoordsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CoordsRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param \DateTime $date
     * @return Coords[]
     */
    public function getCoordsByDate(\DateTime $date)
    {
        return $this->findAll([
            'timestamp' => $date
        ]);
    }

    /**
     * @param \DateTime $date
     * @return Coords[]
     */
    public function getCoordsArrayByDate(\DateTime $date)
    {
        return array_map(function(Coords $coord) {
            return [$coord->getLat(), $coord->getLon()];
        }, $this->getCoordsByDate($date));
    }
}