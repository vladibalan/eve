<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivitymaterials
 *
 * @ORM\Table(name="industryActivityMaterials", indexes={@ORM\Index(name="industryActivityMaterials_idx1", columns={"typeID", "activityID"}), @ORM\Index(name="ix_industryActivityMaterials_typeID", columns={"typeID"}), @ORM\Index(name="activityID", columns={"activityID"}), @ORM\Index(name="materialTypeID", columns={"materialTypeID"})})
 * @ORM\Entity
 */
class Industryactivitymaterials
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

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
     *   @ORM\JoinColumn(name="materialTypeID", referencedColumnName="typeID")
     * })
     */
    private $materialtypeid;

    /**
     * @var \AppBundle\Entity\Ramactivities
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ramactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;

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

