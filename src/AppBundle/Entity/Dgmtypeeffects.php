<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmtypeeffects
 *
 * @ORM\Table(name="dgmTypeEffects", indexes={@ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Dgmtypeeffects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="effectID", type="integer", nullable=false)
     */
    private $effectid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isDefault", type="boolean", nullable=true)
     */
    private $isdefault;

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


}

