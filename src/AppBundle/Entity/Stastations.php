<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stastations
 *
 * @ORM\Table(name="staStations", indexes={@ORM\Index(name="ix_staStations_solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="ix_staStations_operationID", columns={"operationID"}), @ORM\Index(name="ix_staStations_constellationID", columns={"constellationID"}), @ORM\Index(name="ix_staStations_stationTypeID", columns={"stationTypeID"}), @ORM\Index(name="ix_staStations_corporationID", columns={"corporationID"}), @ORM\Index(name="ix_staStations_regionID", columns={"regionID"})})
 * @ORM\Entity
 */
class Stastations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="security", type="integer", nullable=true)
     */
    private $security;

    /**
     * @var float
     *
     * @ORM\Column(name="dockingCostPerVolume", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockingcostpervolume;

    /**
     * @var float
     *
     * @ORM\Column(name="maxShipVolumeDockable", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxshipvolumedockable;

    /**
     * @var integer
     *
     * @ORM\Column(name="officeRentalCost", type="integer", nullable=true)
     */
    private $officerentalcost;

    /**
     * @var string
     *
     * @ORM\Column(name="stationName", type="string", length=100, nullable=true)
     */
    private $stationname;

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
     * @ORM\Column(name="reprocessingEfficiency", type="float", precision=10, scale=0, nullable=true)
     */
    private $reprocessingefficiency;

    /**
     * @var float
     *
     * @ORM\Column(name="reprocessingStationsTake", type="float", precision=10, scale=0, nullable=true)
     */
    private $reprocessingstationstake;

    /**
     * @var integer
     *
     * @ORM\Column(name="reprocessingHangarFlag", type="integer", nullable=true)
     */
    private $reprocessinghangarflag;

    /**
     * @var integer
     *
     * @ORM\Column(name="stationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stationid;

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

    /**
     * @var \AppBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;

    /**
     * @var \AppBundle\Entity\Stastationtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Stastationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stationTypeID", referencedColumnName="stationTypeID")
     * })
     */
    private $stationtypeid;

    /**
     * @var \AppBundle\Entity\Staoperations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staoperations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operationID", referencedColumnName="operationID")
     * })
     */
    private $operationid;


}

