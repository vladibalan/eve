<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapcelestialstatistics
 *
 * @ORM\Table(name="mapCelestialStatistics")
 * @ORM\Entity
 */
class Mapcelestialstatistics
{
    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="spectralClass", type="string", length=10, nullable=true)
     */
    private $spectralclass;

    /**
     * @var float
     *
     * @ORM\Column(name="luminosity", type="float", precision=10, scale=0, nullable=true)
     */
    private $luminosity;

    /**
     * @var float
     *
     * @ORM\Column(name="age", type="float", precision=10, scale=0, nullable=true)
     */
    private $age;

    /**
     * @var float
     *
     * @ORM\Column(name="life", type="float", precision=10, scale=0, nullable=true)
     */
    private $life;

    /**
     * @var float
     *
     * @ORM\Column(name="orbitRadius", type="float", precision=10, scale=0, nullable=true)
     */
    private $orbitradius;

    /**
     * @var float
     *
     * @ORM\Column(name="eccentricity", type="float", precision=10, scale=0, nullable=true)
     */
    private $eccentricity;

    /**
     * @var float
     *
     * @ORM\Column(name="massDust", type="float", precision=10, scale=0, nullable=true)
     */
    private $massdust;

    /**
     * @var float
     *
     * @ORM\Column(name="massGas", type="float", precision=10, scale=0, nullable=true)
     */
    private $massgas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fragmented", type="boolean", nullable=true)
     */
    private $fragmented;

    /**
     * @var float
     *
     * @ORM\Column(name="density", type="float", precision=10, scale=0, nullable=true)
     */
    private $density;

    /**
     * @var float
     *
     * @ORM\Column(name="surfaceGravity", type="float", precision=10, scale=0, nullable=true)
     */
    private $surfacegravity;

    /**
     * @var float
     *
     * @ORM\Column(name="escapeVelocity", type="float", precision=10, scale=0, nullable=true)
     */
    private $escapevelocity;

    /**
     * @var float
     *
     * @ORM\Column(name="orbitPeriod", type="float", precision=10, scale=0, nullable=true)
     */
    private $orbitperiod;

    /**
     * @var float
     *
     * @ORM\Column(name="rotationRate", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationrate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var integer
     *
     * @ORM\Column(name="pressure", type="bigint", nullable=true)
     */
    private $pressure;

    /**
     * @var integer
     *
     * @ORM\Column(name="radius", type="bigint", nullable=true)
     */
    private $radius;

    /**
     * @var integer
     *
     * @ORM\Column(name="mass", type="integer", nullable=true)
     */
    private $mass;

    /**
     * @var integer
     *
     * @ORM\Column(name="celestialID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $celestialid;


}

