<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplocationscenes
 *
 * @ORM\Table(name="mapLocationScenes", indexes={@ORM\Index(name="graphicID", columns={"graphicID"})})
 * @ORM\Entity
 */
class Maplocationscenes
{
    /**
     * @var \AppBundle\Entity\Mapregions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="regionID")
     * })
     */
    private $locationid;

    /**
     * @var \AppBundle\Entity\Evegraphics
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Evegraphics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graphicID", referencedColumnName="graphicID")
     * })
     */
    private $graphicid;


}

