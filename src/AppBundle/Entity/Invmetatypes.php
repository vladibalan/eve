<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmetatypes
 *
 * @ORM\Table(name="invMetaTypes", indexes={@ORM\Index(name="parentTypeID", columns={"parentTypeID"}), @ORM\Index(name="metaGroupID", columns={"metaGroupID"})})
 * @ORM\Entity
 */
class Invmetatypes
{
    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Invmetagroups
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invmetagroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metaGroupID", referencedColumnName="metaGroupID")
     * })
     */
    private $metagroupid;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentTypeID", referencedColumnName="typeID")
     * })
     */
    private $parenttypeid;


}

