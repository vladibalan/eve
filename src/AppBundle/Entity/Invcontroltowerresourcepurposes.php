<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontroltowerresourcepurposes
 *
 * @ORM\Table(name="invControlTowerResourcePurposes")
 * @ORM\Entity
 */
class Invcontroltowerresourcepurposes
{
    /**
     * @var string
     *
     * @ORM\Column(name="purposeText", type="string", length=100, nullable=true)
     */
    private $purposetext;

    /**
     * @var integer
     *
     * @ORM\Column(name="purpose", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purpose;


}

