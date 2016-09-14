<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityskills
 *
 * @ORM\Table(name="industryActivitySkills", indexes={@ORM\Index(name="industryActivitySkills_idx1", columns={"typeID", "activityID"}), @ORM\Index(name="ix_industryActivitySkills_typeID", columns={"typeID"}), @ORM\Index(name="ix_industryActivitySkills_skillID", columns={"skillID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityskills
{
    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

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
     *   @ORM\JoinColumn(name="skillID", referencedColumnName="typeID")
     * })
     */
    private $skillid;

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

