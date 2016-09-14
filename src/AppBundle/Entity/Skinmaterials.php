<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinmaterials
 *
 * @ORM\Table(name="skinMaterials")
 * @ORM\Entity
 */
class Skinmaterials
{
    /**
     * @var integer
     *
     * @ORM\Column(name="displayNameID", type="integer", nullable=true)
     */
    private $displaynameid;

    /**
     * @var integer
     *
     * @ORM\Column(name="materialSetID", type="integer", nullable=true)
     */
    private $materialsetid;

    /**
     * @var integer
     *
     * @ORM\Column(name="skinMaterialID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skinmaterialid;


}

