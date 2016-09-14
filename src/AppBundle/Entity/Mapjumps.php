<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapjumps
 *
 * @ORM\Table(name="mapJumps", indexes={@ORM\Index(name="destinationID", columns={"destinationID"})})
 * @ORM\Entity
 */
class Mapjumps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="destinationID", type="integer", nullable=true)
     */
    private $destinationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="stargateID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stargateid;


}

