<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invpositions
 *
 * @ORM\Table(name="invPositions")
 * @ORM\Entity
 */
class Invpositions
{
    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="yaw", type="float", precision=10, scale=0, nullable=true)
     */
    private $yaw;

    /**
     * @var float
     *
     * @ORM\Column(name="pitch", type="float", precision=10, scale=0, nullable=true)
     */
    private $pitch;

    /**
     * @var float
     *
     * @ORM\Column(name="roll", type="float", precision=10, scale=0, nullable=true)
     */
    private $roll;

    /**
     * @var \AppBundle\Entity\Invnames
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID")
     * })
     */
    private $itemid;


}

