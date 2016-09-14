<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eveunits
 *
 * @ORM\Table(name="eveUnits")
 * @ORM\Entity
 */
class Eveunits
{
    /**
     * @var string
     *
     * @ORM\Column(name="unitName", type="string", length=100, nullable=true)
     */
    private $unitname;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=50, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="unitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitid;


}

