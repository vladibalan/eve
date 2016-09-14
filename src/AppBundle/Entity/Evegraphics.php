<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evegraphics
 *
 * @ORM\Table(name="eveGraphics")
 * @ORM\Entity
 */
class Evegraphics
{
    /**
     * @var string
     *
     * @ORM\Column(name="sofFactionName", type="string", length=100, nullable=true)
     */
    private $soffactionname;

    /**
     * @var string
     *
     * @ORM\Column(name="graphicFile", type="string", length=100, nullable=true)
     */
    private $graphicfile;

    /**
     * @var string
     *
     * @ORM\Column(name="sofHullName", type="string", length=100, nullable=true)
     */
    private $sofhullname;

    /**
     * @var string
     *
     * @ORM\Column(name="sofRaceName", type="string", length=100, nullable=true)
     */
    private $sofracename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="graphicID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $graphicid;


}

