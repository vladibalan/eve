<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapsolarsystems
 *
 * @ORM\Table(name="mapSolarSystems", indexes={@ORM\Index(name="ix_mapSolarSystems_constellationID", columns={"constellationID"}), @ORM\Index(name="ix_mapSolarSystems_regionID", columns={"regionID"}), @ORM\Index(name="ix_mapSolarSystems_security", columns={"security"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="sunTypeID", columns={"sunTypeID"})})
 * @ORM\Entity
 */
class Mapsolarsystems
{
    /**
     * @var string
     *
     * @ORM\Column(name="solarSystemName", type="string", length=100, nullable=true)
     */
    private $solarsystemname;

    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=true)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=true)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=true)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="xMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmin;

    /**
     * @var float
     *
     * @ORM\Column(name="xMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmax;

    /**
     * @var float
     *
     * @ORM\Column(name="yMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymin;

    /**
     * @var float
     *
     * @ORM\Column(name="yMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymax;

    /**
     * @var float
     *
     * @ORM\Column(name="zMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmin;

    /**
     * @var float
     *
     * @ORM\Column(name="zMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmax;

    /**
     * @var float
     *
     * @ORM\Column(name="luminosity", type="float", precision=10, scale=0, nullable=true)
     */
    private $luminosity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="border", type="boolean", nullable=true)
     */
    private $border;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fringe", type="boolean", nullable=true)
     */
    private $fringe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="corridor", type="boolean", nullable=true)
     */
    private $corridor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hub", type="boolean", nullable=true)
     */
    private $hub;

    /**
     * @var boolean
     *
     * @ORM\Column(name="international", type="boolean", nullable=true)
     */
    private $international;

    /**
     * @var boolean
     *
     * @ORM\Column(name="regional", type="boolean", nullable=true)
     */
    private $regional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="constellation", type="boolean", nullable=true)
     */
    private $constellation;

    /**
     * @var float
     *
     * @ORM\Column(name="security", type="float", precision=10, scale=0, nullable=true)
     */
    private $security;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="securityClass", type="string", length=2, nullable=true)
     */
    private $securityclass;

    /**
     * @var integer
     *
     * @ORM\Column(name="solarSystemID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $solarsystemid;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sunTypeID", referencedColumnName="typeID")
     * })
     */
    private $suntypeid;

    /**
     * @var \AppBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;

    /**
     * @var \AppBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="constellationID", referencedColumnName="constellationID")
     * })
     */
    private $constellationid;

    /**
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionID", referencedColumnName="regionID")
     * })
     */
    private $regionid;


}

