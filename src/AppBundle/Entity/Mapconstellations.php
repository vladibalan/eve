<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapconstellations
 *
 * @ORM\Table(name="mapConstellations", indexes={@ORM\Index(name="regionID", columns={"regionID"}), @ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Mapconstellations
{
    /**
     * @var string
     *
     * @ORM\Column(name="constellationName", type="string", length=100, nullable=true)
     */
    private $constellationname;

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
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var integer
     *
     * @ORM\Column(name="constellationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $constellationid;

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
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionID", referencedColumnName="regionID")
     * })
     */
    private $regionid;


}

