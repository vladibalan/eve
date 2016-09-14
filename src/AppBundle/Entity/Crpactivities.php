<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpactivities
 *
 * @ORM\Table(name="crpActivities")
 * @ORM\Entity
 */
class Crpactivities
{
    /**
     * @var string
     *
     * @ORM\Column(name="activityName", type="string", length=100, nullable=true)
     */
    private $activityname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="activityID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activityid;


}

