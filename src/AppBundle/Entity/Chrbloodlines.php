<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrbloodlines
 *
 * @ORM\Table(name="chrBloodlines", indexes={@ORM\Index(name="raceID", columns={"raceID"}), @ORM\Index(name="shipTypeID", columns={"shipTypeID"}), @ORM\Index(name="corporationID", columns={"corporationID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrbloodlines
{
    /**
     * @var string
     *
     * @ORM\Column(name="bloodlineName", type="string", length=100, nullable=true)
     */
    private $bloodlinename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="maleDescription", type="string", length=1000, nullable=true)
     */
    private $maledescription;

    /**
     * @var string
     *
     * @ORM\Column(name="femaleDescription", type="string", length=1000, nullable=true)
     */
    private $femaledescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="perception", type="integer", nullable=true)
     */
    private $perception;

    /**
     * @var integer
     *
     * @ORM\Column(name="willpower", type="integer", nullable=true)
     */
    private $willpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="charisma", type="integer", nullable=true)
     */
    private $charisma;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory", type="integer", nullable=true)
     */
    private $memory;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=500, nullable=true)
     */
    private $shortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="shortMaleDescription", type="string", length=500, nullable=true)
     */
    private $shortmaledescription;

    /**
     * @var string
     *
     * @ORM\Column(name="shortFemaleDescription", type="string", length=500, nullable=true)
     */
    private $shortfemaledescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="bloodlineID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bloodlineid;

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
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipTypeID", referencedColumnName="typeID")
     * })
     */
    private $shiptypeid;

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
     * @var \AppBundle\Entity\Chrraces
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chrraces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raceID", referencedColumnName="raceID")
     * })
     */
    private $raceid;


}

