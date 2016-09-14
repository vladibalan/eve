<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinetypedetailpercategory
 *
 * @ORM\Table(name="ramAssemblyLineTypeDetailPerCategory", indexes={@ORM\Index(name="assemblyLineTypeID", columns={"assemblyLineTypeID"}), @ORM\Index(name="categoryID", columns={"categoryID"})})
 * @ORM\Entity
 */
class Ramassemblylinetypedetailpercategory
{
    /**
     * @var float
     *
     * @ORM\Column(name="timeMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $timemultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="materialMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $materialmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="costMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $costmultiplier;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Invcategories
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     * })
     */
    private $categoryid;

    /**
     * @var \AppBundle\Entity\Ramassemblylinetypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ramassemblylinetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assemblyLineTypeID", referencedColumnName="assemblyLineTypeID")
     * })
     */
    private $assemblylinetypeid;


}

