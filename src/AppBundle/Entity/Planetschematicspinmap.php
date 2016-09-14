<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planetschematicspinmap
 *
 * @ORM\Table(name="planetSchematicsPinMap", indexes={@ORM\Index(name="schematicID", columns={"schematicID"}), @ORM\Index(name="pinTypeID", columns={"pinTypeID"})})
 * @ORM\Entity
 */
class Planetschematicspinmap
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
     *   @ORM\JoinColumn(name="pinTypeID", referencedColumnName="typeID")
     * })
     */
    private $pintypeid;

    /**
     * @var \AppBundle\Entity\Planetschematics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Planetschematics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schematicID", referencedColumnName="schematicID")
     * })
     */
    private $schematicid;


}

