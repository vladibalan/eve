<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinlicense
 *
 * @ORM\Table(name="skinLicense", indexes={@ORM\Index(name="skinID", columns={"skinID"})})
 * @ORM\Entity
 */
class Skinlicense
{
    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="licenseTypeID", referencedColumnName="typeID")
     * })
     */
    private $licensetypeid;

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

