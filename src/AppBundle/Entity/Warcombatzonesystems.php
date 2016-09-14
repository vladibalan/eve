<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warcombatzonesystems
 *
 * @ORM\Table(name="warCombatZoneSystems", indexes={@ORM\Index(name="combatZoneID", columns={"combatZoneID"})})
 * @ORM\Entity
 */
class Warcombatzonesystems
{
    /**
     * @var \AppBundle\Entity\Mapsolarsystems
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;

    /**
     * @var \AppBundle\Entity\Warcombatzones
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Warcombatzones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="combatZoneID", referencedColumnName="combatZoneID")
     * })
     */
    private $combatzoneid;


}

