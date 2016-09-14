<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmattributecategories
 *
 * @ORM\Table(name="dgmAttributeCategories")
 * @ORM\Entity
 */
class Dgmattributecategories
{
    /**
     * @var string
     *
     * @ORM\Column(name="categoryName", type="string", length=50, nullable=true)
     */
    private $categoryname;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryDescription", type="string", length=200, nullable=true)
     */
    private $categorydescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;


}

