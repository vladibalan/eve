<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapregionjumps
 *
 * @ORM\Table(name="mapRegionJumps", indexes={@ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"})})
 * @ORM\Entity
 */
class Mapregionjumps
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
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;

    /**
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromRegionID", referencedColumnName="regionID")
     * })
     */
    private $fromregionid;


}

