<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eveicons
 *
 * @ORM\Table(name="eveIcons")
 * @ORM\Entity
 */
class Eveicons
{
    /**
     * @var string
     *
     * @ORM\Column(name="iconFile", type="string", length=500, nullable=true)
     */
    private $iconfile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="iconID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iconid;


}

