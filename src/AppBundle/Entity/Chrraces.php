<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrraces
 *
 * @ORM\Table(name="chrRaces", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrraces
{
    /**
     * @var string
     *
     * @ORM\Column(name="raceName", type="string", length=100, nullable=true)
     */
    private $racename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=500, nullable=true)
     */
    private $shortdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="raceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $raceid;

    /**
     * @var \AppBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;


}

