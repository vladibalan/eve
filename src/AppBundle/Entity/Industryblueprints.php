<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryblueprints
 *
 * @ORM\Table(name="industryBlueprints")
 * @ORM\Entity
 */
class Industryblueprints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maxProductionLimit", type="integer", nullable=true)
     */
    private $maxproductionlimit;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;


}

