<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpccorporations
 *
 * @ORM\Table(name="crpNPCCorporations", indexes={@ORM\Index(name="solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="investorID1", columns={"investorID1"}), @ORM\Index(name="investorID2", columns={"investorID2"}), @ORM\Index(name="investorID3", columns={"investorID3"}), @ORM\Index(name="investorID4", columns={"investorID4"}), @ORM\Index(name="friendID", columns={"friendID"}), @ORM\Index(name="enemyID", columns={"enemyID"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Crpnpccorporations
{
    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=1, nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="extent", type="string", length=1, nullable=true)
     */
    private $extent;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares1", type="integer", nullable=true)
     */
    private $investorshares1;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares2", type="integer", nullable=true)
     */
    private $investorshares2;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares3", type="integer", nullable=true)
     */
    private $investorshares3;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares4", type="integer", nullable=true)
     */
    private $investorshares4;

    /**
     * @var integer
     *
     * @ORM\Column(name="publicShares", type="integer", nullable=true)
     */
    private $publicshares;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialPrice", type="integer", nullable=true)
     */
    private $initialprice;

    /**
     * @var float
     *
     * @ORM\Column(name="minSecurity", type="float", precision=10, scale=0, nullable=true)
     */
    private $minsecurity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scattered", type="boolean", nullable=true)
     */
    private $scattered;

    /**
     * @var integer
     *
     * @ORM\Column(name="fringe", type="integer", nullable=true)
     */
    private $fringe;

    /**
     * @var integer
     *
     * @ORM\Column(name="corridor", type="integer", nullable=true)
     */
    private $corridor;

    /**
     * @var integer
     *
     * @ORM\Column(name="hub", type="integer", nullable=true)
     */
    private $hub;

    /**
     * @var integer
     *
     * @ORM\Column(name="border", type="integer", nullable=true)
     */
    private $border;

    /**
     * @var float
     *
     * @ORM\Column(name="sizeFactor", type="float", precision=10, scale=0, nullable=true)
     */
    private $sizefactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="stationCount", type="integer", nullable=true)
     */
    private $stationcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="stationSystemCount", type="integer", nullable=true)
     */
    private $stationsystemcount;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="corporationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $corporationid;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID2", referencedColumnName="corporationID")
     * })
     */
    private $investorid2;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID3", referencedColumnName="corporationID")
     * })
     */
    private $investorid3;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID4", referencedColumnName="corporationID")
     * })
     */
    private $investorid4;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID1", referencedColumnName="corporationID")
     * })
     */
    private $investorid1;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enemyID", referencedColumnName="corporationID")
     * })
     */
    private $enemyid;

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
     * @var \AppBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="friendID", referencedColumnName="corporationID")
     * })
     */
    private $friendid;

    /**
     * @var \AppBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;


}

