<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplandmarks
 *
 * @ORM\Table(name="mapLandmarks")
 * @ORM\Entity
 */
class Maplandmarks
{
    /**
     * @var string
     *
     * @ORM\Column(name="landmarkName", type="string", length=100, nullable=true)
     */
    private $landmarkname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationID", type="integer", nullable=true)
     */
    private $locationid;

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
     * @var integer
     *
     * @ORM\Column(name="iconID", type="integer", nullable=true)
     */
    private $iconid;

    /**
     * @var integer
     *
     * @ORM\Column(name="landmarkID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $landmarkid;


}

