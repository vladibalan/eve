<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpccorporationdivisions
 *
 * @ORM\Table(name="crpNPCCorporationDivisions", indexes={@ORM\Index(name="corporationID", columns={"corporationID"}), @ORM\Index(name="divisionID", columns={"divisionID"})})
 * @ORM\Entity
 */
class Crpnpccorporationdivisions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Crpnpcdivisions
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpcdivisions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="divisionID", referencedColumnName="divisionID")
     * })
     */
    private $divisionid;

    /**
     * @var \AppBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;


}

