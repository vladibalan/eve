<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtagenttypes
 *
 * @ORM\Table(name="agtAgentTypes")
 * @ORM\Entity
 */
class Agtagenttypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="agentType", type="string", length=50, nullable=true)
     */
    private $agenttype;

    /**
     * @var integer
     *
     * @ORM\Column(name="agentTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agenttypeid;


}

