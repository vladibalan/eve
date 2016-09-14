<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapsolarsystemjumps
 *
 * @ORM\Table(name="mapSolarSystemJumps", indexes={@ORM\Index(name="fromSolarSystemID", columns={"fromSolarSystemID"}), @ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="fromConstellationID", columns={"fromConstellationID"}), @ORM\Index(name="toConstellationID", columns={"toConstellationID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"}), @ORM\Index(name="toSolarSystemID", columns={"toSolarSystemID"})})
 * @ORM\Entity
 */
class Mapsolarsystemjumps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toConstellationID", referencedColumnName="constellationID")
     * })
     */
    private $toconstellationid;

    /**
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;

    /**
     * @var \AppBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toSolarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $tosolarsystemid;

    /**
     * @var \AppBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromSolarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $fromsolarsystemid;

    /**
     * @var \AppBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromConstellationID", referencedColumnName="constellationID")
     * })
     */
    private $fromconstellationid;

    /**
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromRegionID", referencedColumnName="regionID")
     * })
     */
    private $fromregionid;


}

