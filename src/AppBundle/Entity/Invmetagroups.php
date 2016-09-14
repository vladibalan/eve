<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmetagroups
 *
 * @ORM\Table(name="invMetaGroups", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invmetagroups
{
    /**
     * @var string
     *
     * @ORM\Column(name="metaGroupName", type="string", length=100, nullable=true)
     */
    private $metagroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="metaGroupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metagroupid;

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

