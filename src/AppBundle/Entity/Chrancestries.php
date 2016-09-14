<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrancestries
 *
 * @ORM\Table(name="chrAncestries", indexes={@ORM\Index(name="bloodlineID", columns={"bloodlineID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrancestries
{
    /**
     * @var string
     *
     * @ORM\Column(name="ancestryName", type="string", length=100, nullable=true)
     */
    private $ancestryname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="perception", type="integer", nullable=true)
     */
    private $perception;

    /**
     * @var integer
     *
     * @ORM\Column(name="willpower", type="integer", nullable=true)
     */
    private $willpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="charisma", type="integer", nullable=true)
     */
    private $charisma;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory", type="integer", nullable=true)
     */
    private $memory;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=500, nullable=true)
     */
    private $shortdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="ancestryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ancestryid;

    /**
     * @var \AppBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;

    /**
     * @var \AppBundle\Entity\Chrbloodlines
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chrbloodlines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bloodlineID", referencedColumnName="bloodlineID")
     * })
     */
    private $bloodlineid;


}

