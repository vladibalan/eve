<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramactivities
 *
 * @ORM\Table(name="ramActivities")
 * @ORM\Entity
 */
class Ramactivities
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
     * @ORM\Column(name="iconNo", type="string", length=5, nullable=true)
     */
    private $iconno;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="activityID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activityid;


}

