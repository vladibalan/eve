<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinetypes
 *
 * @ORM\Table(name="ramAssemblyLineTypes", indexes={@ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Ramassemblylinetypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="assemblyLineTypeName", type="string", length=100, nullable=true)
     */
    private $assemblylinetypename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="baseTimeMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basetimemultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="baseMaterialMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basematerialmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="baseCostMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basecostmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var float
     *
     * @ORM\Column(name="minCostPerHour", type="float", precision=10, scale=0, nullable=true)
     */
    private $mincostperhour;

    /**
     * @var integer
     *
     * @ORM\Column(name="assemblyLineTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $assemblylinetypeid;

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

