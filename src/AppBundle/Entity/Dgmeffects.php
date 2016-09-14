<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmeffects
 *
 * @ORM\Table(name="dgmEffects", indexes={@ORM\Index(name="iconID", columns={"iconID"}), @ORM\Index(name="durationAttributeID", columns={"durationAttributeID"}), @ORM\Index(name="trackingSpeedAttributeID", columns={"trackingSpeedAttributeID"}), @ORM\Index(name="dischargeAttributeID", columns={"dischargeAttributeID"}), @ORM\Index(name="rangeAttributeID", columns={"rangeAttributeID"}), @ORM\Index(name="falloffAttributeID", columns={"falloffAttributeID"}), @ORM\Index(name="npcUsageChanceAttributeID", columns={"npcUsageChanceAttributeID"}), @ORM\Index(name="npcActivationChanceAttributeID", columns={"npcActivationChanceAttributeID"}), @ORM\Index(name="fittingUsageChanceAttributeID", columns={"fittingUsageChanceAttributeID"})})
 * @ORM\Entity
 */
class Dgmeffects
{
    /**
     * @var string
     *
     * @ORM\Column(name="effectName", type="string", length=400, nullable=true)
     */
    private $effectname;

    /**
     * @var integer
     *
     * @ORM\Column(name="effectCategory", type="integer", nullable=true)
     */
    private $effectcategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="preExpression", type="integer", nullable=true)
     */
    private $preexpression;

    /**
     * @var integer
     *
     * @ORM\Column(name="postExpression", type="integer", nullable=true)
     */
    private $postexpression;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=60, nullable=true)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOffensive", type="boolean", nullable=true)
     */
    private $isoffensive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAssistance", type="boolean", nullable=true)
     */
    private $isassistance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disallowAutoRepeat", type="boolean", nullable=true)
     */
    private $disallowautorepeat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=100, nullable=true)
     */
    private $displayname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isWarpSafe", type="boolean", nullable=true)
     */
    private $iswarpsafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rangeChance", type="boolean", nullable=true)
     */
    private $rangechance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="electronicChance", type="boolean", nullable=true)
     */
    private $electronicchance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="propulsionChance", type="boolean", nullable=true)
     */
    private $propulsionchance;

    /**
     * @var integer
     *
     * @ORM\Column(name="distribution", type="integer", nullable=true)
     */
    private $distribution;

    /**
     * @var string
     *
     * @ORM\Column(name="sfxName", type="string", length=20, nullable=true)
     */
    private $sfxname;

    /**
     * @var string
     *
     * @ORM\Column(name="modifierInfo", type="text", length=65535, nullable=true)
     */
    private $modifierinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="effectID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $effectid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcUsageChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $npcusagechanceattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcActivationChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $npcactivationchanceattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fittingUsageChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $fittingusagechanceattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="falloffAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $falloffattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rangeAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $rangeattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="durationAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $durationattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trackingSpeedAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $trackingspeedattributeid;

    /**
     * @var \AppBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dischargeAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $dischargeattributeid;

    /**
     * @var \AppBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;


}

