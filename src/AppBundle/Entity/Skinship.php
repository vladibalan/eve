<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinship
 *
 * @ORM\Table(name="skinShip", indexes={@ORM\Index(name="ix_skinShip_skinID", columns={"skinID"}), @ORM\Index(name="ix_skinShip_typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Skinship
{
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
     * @var \AppBundle\Entity\Skins
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Skins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skinID", referencedColumnName="skinID")
     * })
     */
    private $skinid;


}

