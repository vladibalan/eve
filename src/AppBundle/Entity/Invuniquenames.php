<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invuniquenames
 *
 * @ORM\Table(name="invUniqueNames", uniqueConstraints={@ORM\UniqueConstraint(name="ix_invUniqueNames_itemName", columns={"itemName"})}, indexes={@ORM\Index(name="invUniqueNames_IX_GroupName", columns={"groupID", "itemName"}), @ORM\Index(name="IDX_8916E83CD6EFA878", columns={"groupID"})})
 * @ORM\Entity
 */
class Invuniquenames
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=200, nullable=false)
     */
    private $itemname;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemid;

    /**
     * @var \AppBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     * })
     */
    private $groupid;


}

