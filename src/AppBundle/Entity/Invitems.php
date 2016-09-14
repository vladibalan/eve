<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitems
 *
 * @ORM\Table(name="invItems", indexes={@ORM\Index(name="ix_invItems_locationID", columns={"locationID"}), @ORM\Index(name="items_IX_OwnerLocation", columns={"ownerID", "locationID"}), @ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="flagID", columns={"flagID"}), @ORM\Index(name="IDX_4A898CC9DB30DDED", columns={"ownerID"})})
 * @ORM\Entity
 */
class Invitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \AppBundle\Entity\Invnames
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID")
     * })
     */
    private $itemid;

    /**
     * @var \AppBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerID", referencedColumnName="itemID")
     * })
     */
    private $ownerid;

    /**
     * @var \AppBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="itemID")
     * })
     */
    private $locationid;

    /**
     * @var \AppBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \AppBundle\Entity\Invflags
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invflags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flagID", referencedColumnName="flagID")
     * })
     */
    private $flagid;


}

