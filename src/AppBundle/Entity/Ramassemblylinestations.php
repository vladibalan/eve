<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinestations
 *
 * @ORM\Table(name="ramAssemblyLineStations", indexes={@ORM\Index(name="ix_ramAssemblyLineStations_ownerID", columns={"ownerID"}), @ORM\Index(name="ix_ramAssemblyLineStations_solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="ix_ramAssemblyLineStations_regionID", columns={"regionID"}), @ORM\Index(name="stationID", columns={"stationID"}), @ORM\Index(name="assemblyLineTypeID", columns={"assemblyLineTypeID"}), @ORM\Index(name="stationTypeID", columns={"stationTypeID"})})
 * @ORM\Entity
 */
class Ramassemblylinestations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerID", referencedColumnName="corporationID")
     * })
     */
    private $ownerid;

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
     * @var \AppBundle\Entity\Stastationtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Stastationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stationTypeID", referencedColumnName="stationTypeID")
     * })
     */
    private $stationtypeid;

    /**
     * @var \AppBundle\Entity\Ramassemblylinetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ramassemblylinetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assemblyLineTypeID", referencedColumnName="assemblyLineTypeID")
     * })
     */
    private $assemblylinetypeid;

    /**
     * @var \AppBundle\Entity\Stastations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Stastations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stationID", referencedColumnName="stationID")
     * })
     */
    private $stationid;


}

