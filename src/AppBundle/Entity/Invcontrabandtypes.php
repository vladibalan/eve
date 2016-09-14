<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontrabandtypes
 *
 * @ORM\Table(name="invContrabandTypes", indexes={@ORM\Index(name="ix_invContrabandTypes_typeID", columns={"typeID"}), @ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Invcontrabandtypes
{
    /**
     * @var float
     *
     * @ORM\Column(name="standingLoss", type="float", precision=10, scale=0, nullable=true)
     */
    private $standingloss;

    /**
     * @var float
     *
     * @ORM\Column(name="confiscateMinSec", type="float", precision=10, scale=0, nullable=true)
     */
    private $confiscateminsec;

    /**
     * @var float
     *
     * @ORM\Column(name="fineByValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $finebyvalue;

    /**
     * @var float
     *
     * @ORM\Column(name="attackMinSec", type="float", precision=10, scale=0, nullable=true)
     */
    private $attackminsec;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;


}

