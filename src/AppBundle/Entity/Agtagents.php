<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtagents
 *
 * @ORM\Table(name="agtAgents", indexes={@ORM\Index(name="ix_agtAgents_corporationID", columns={"corporationID"}), @ORM\Index(name="ix_agtAgents_locationID", columns={"locationID"}), @ORM\Index(name="divisionID", columns={"divisionID"}), @ORM\Index(name="agentTypeID", columns={"agentTypeID"})})
 * @ORM\Entity
 */
class Agtagents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="locationID", type="integer", nullable=true)
     */
    private $locationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="quality", type="integer", nullable=true)
     */
    private $quality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isLocator", type="boolean", nullable=true)
     */
    private $islocator;

    /**
     * @var integer
     *
     * @ORM\Column(name="agentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agentid;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;

    /**
     * @var \AppBundle\Entity\Agtagenttypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Agtagenttypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agentTypeID", referencedColumnName="agentTypeID")
     * })
     */
    private $agenttypeid;

    /**
     * @var \AppBundle\Entity\Crpnpcdivisions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpcdivisions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="divisionID", referencedColumnName="divisionID")
     * })
     */
    private $divisionid;


}

