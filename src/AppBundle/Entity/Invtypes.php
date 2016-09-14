<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtypes
 *
 * @ORM\Table(name="invTypes", indexes={@ORM\Index(name="ix_invTypes_groupID", columns={"groupID"}), @ORM\Index(name="marketGroupID", columns={"marketGroupID"}), @ORM\Index(name="soundID", columns={"soundID"}), @ORM\Index(name="graphicID", columns={"graphicID"}), @ORM\Index(name="iconID", columns={"iconID"}), @ORM\Index(name="raceID", columns={"raceID"})})
 * @ORM\Entity
 */
class Invtypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="typeName", type="string", length=100, nullable=true)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="mass", type="float", precision=10, scale=0, nullable=true)
     */
    private $mass;

    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var float
     *
     * @ORM\Column(name="capacity", type="float", precision=10, scale=0, nullable=true)
     */
    private $capacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="portionSize", type="integer", nullable=true)
     */
    private $portionsize;

    /**
     * @var string
     *
     * @ORM\Column(name="basePrice", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $baseprice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="soundID", type="integer", nullable=true)
     */
    private $soundid;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Chrraces
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chrraces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raceID", referencedColumnName="raceID")
     * })
     */
    private $raceid;

    /**
     * @var \AppBundle\Entity\Invmarketgroups
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invmarketgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marketGroupID", referencedColumnName="marketGroupID")
     * })
     */
    private $marketgroupid;

    /**
     * @var \AppBundle\Entity\Evegraphics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evegraphics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graphicID", referencedColumnName="graphicID")
     * })
     */
    private $graphicid;

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
     * @var \AppBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     * })
     */
    private $groupid;


}

