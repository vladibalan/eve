<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invflags
 *
 * @ORM\Table(name="invFlags")
 * @ORM\Entity
 */
class Invflags
{
    /**
     * @var string
     *
     * @ORM\Column(name="flagName", type="string", length=200, nullable=true)
     */
    private $flagname;

    /**
     * @var string
     *
     * @ORM\Column(name="flagText", type="string", length=100, nullable=true)
     */
    private $flagtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="flagID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flagid;


}

