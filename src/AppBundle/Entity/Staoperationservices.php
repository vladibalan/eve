<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staoperationservices
 *
 * @ORM\Table(name="staOperationServices", indexes={@ORM\Index(name="operationID", columns={"operationID"}), @ORM\Index(name="serviceID", columns={"serviceID"})})
 * @ORM\Entity
 */
class Staoperationservices
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
     * @var \AppBundle\Entity\Staservices
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staservices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serviceID", referencedColumnName="serviceID")
     * })
     */
    private $serviceid;

    /**
     * @var \AppBundle\Entity\Staoperations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staoperations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operationID", referencedColumnName="operationID")
     * })
     */
    private $operationid;


}

