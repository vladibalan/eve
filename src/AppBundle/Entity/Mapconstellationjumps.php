<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapconstellationjumps
 *
 * @ORM\Table(name="mapConstellationJumps", indexes={@ORM\Index(name="fromConstellationID", columns={"fromConstellationID"}), @ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"}), @ORM\Index(name="toConstellationID", columns={"toConstellationID"})})
 * @ORM\Entity
 */
class Mapconstellationjumps
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
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;

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

