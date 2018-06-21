<?php

namespace AppBundle\Entity;

/**
 * Coords
 */
class Coords
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $deviceId;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var float
     */
    private $lat;

    /**
     * @var float
     */
    private $lon;

    /**
     * @var float
     */
    private $speed;

    /**
     * @var float
     */
    private $bearing;

    /**
     * @var float
     */
    private $altitude;

    /**
     * @var float
     */
    private $accuracy;

    /**
     * @var float
     */
    private $batt;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set deviceId.
     *
     * @param int $deviceId
     *
     * @return Coords
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId.
     *
     * @return int
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set timestamp.
     *
     * @param \DateTime $timestamp
     *
     * @return Coords
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp.
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set lat.
     *
     * @param float $lat
     *
     * @return Coords
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat.
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon.
     *
     * @param float $lon
     *
     * @return Coords
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon.
     *
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set speed.
     *
     * @param float $speed
     *
     * @return Coords
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get speed.
     *
     * @return float
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set bearing.
     *
     * @param float $bearing
     *
     * @return Coords
     */
    public function setBearing($bearing)
    {
        $this->bearing = $bearing;

        return $this;
    }

    /**
     * Get bearing.
     *
     * @return float
     */
    public function getBearing()
    {
        return $this->bearing;
    }

    /**
     * Set altitude.
     *
     * @param float $altitude
     *
     * @return Coords
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude.
     *
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set accuracy.
     *
     * @param float $accuracy
     *
     * @return Coords
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;

        return $this;
    }

    /**
     * Get accuracy.
     *
     * @return float
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set batt.
     *
     * @param float $batt
     *
     * @return Coords
     */
    public function setBatt($batt)
    {
        $this->batt = $batt;

        return $this;
    }

    /**
     * Get batt.
     *
     * @return float
     */
    public function getBatt()
    {
        return $this->batt;
    }
}
