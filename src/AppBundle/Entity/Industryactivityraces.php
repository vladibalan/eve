<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityraces
 *
 * @ORM\Table(name="industryActivityRaces", indexes={@ORM\Index(name="ix_industryActivityRaces_productTypeID", columns={"productTypeID"}), @ORM\Index(name="ix_industryActivityRaces_typeID", columns={"typeID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityraces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="raceID", type="integer", nullable=true)
     */
    private $raceid;

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
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Ramactivities
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ramactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;


}

