<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityprobabilities
 *
 * @ORM\Table(name="industryActivityProbabilities", indexes={@ORM\Index(name="ix_industryActivityProbabilities_typeID", columns={"typeID"}), @ORM\Index(name="ix_industryActivityProbabilities_productTypeID", columns={"productTypeID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityprobabilities
{
    /**
     * @var string
     *
     * @ORM\Column(name="probability", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $probability;

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
     *   @ORM\JoinColumn(name="productTypeID", referencedColumnName="typeID")
     * })
     */
    private $producttypeid;

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

