<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapuniverse
 *
 * @ORM\Table(name="mapUniverse")
 * @ORM\Entity
 */
class Mapuniverse
{
    /**
     * @var string
     *
     * @ORM\Column(name="universeName", type="string", length=100, nullable=true)
     */
    private $universename;

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
     * @ORM\Column(name="universeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $universeid;


}

