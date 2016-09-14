<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtraits
 *
 * @ORM\Table(name="invTraits", indexes={@ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="skillID", columns={"skillID"}), @ORM\Index(name="unitID", columns={"unitID"})})
 * @ORM\Entity
 */
class Invtraits
{
    /**
     * @var float
     *
     * @ORM\Column(name="bonus", type="float", precision=10, scale=0, nullable=true)
     */
    private $bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="bonusText", type="text", length=65535, nullable=true)
     */
    private $bonustext;

    /**
     * @var integer
     *
     * @ORM\Column(name="traitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traitid;

    /**
     * @var \AppBundle\Entity\Eveunits
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eveunits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unitID", referencedColumnName="unitID")
     * })
     */
    private $unitid;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skillID", referencedColumnName="typeID")
     * })
     */
    private $skillid;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;


}

