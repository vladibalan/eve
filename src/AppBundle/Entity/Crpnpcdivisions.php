<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpcdivisions
 *
 * @ORM\Table(name="crpNPCDivisions")
 * @ORM\Entity
 */
class Crpnpcdivisions
{
    /**
     * @var string
     *
     * @ORM\Column(name="divisionName", type="string", length=100, nullable=true)
     */
    private $divisionname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="leaderType", type="string", length=100, nullable=true)
     */
    private $leadertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="divisionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $divisionid;


}

