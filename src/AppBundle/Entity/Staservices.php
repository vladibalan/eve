<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staservices
 *
 * @ORM\Table(name="staServices")
 * @ORM\Entity
 */
class Staservices
{
    /**
     * @var string
     *
     * @ORM\Column(name="serviceName", type="string", length=100, nullable=true)
     */
    private $servicename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="serviceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $serviceid;


}

