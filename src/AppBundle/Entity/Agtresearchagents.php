<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtresearchagents
 *
 * @ORM\Table(name="agtResearchAgents", indexes={@ORM\Index(name="ix_agtResearchAgents_typeID", columns={"typeID"}), @ORM\Index(name="agentID", columns={"agentID"})})
 * @ORM\Entity
 */
class Agtresearchagents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Agtagents
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agtagents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agentID", referencedColumnName="agentID")
     * })
     */
    private $agentid;


}

