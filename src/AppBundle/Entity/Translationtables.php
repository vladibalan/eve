<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translationtables
 *
 * @ORM\Table(name="translationTables", indexes={@ORM\Index(name="sourceTable", columns={"sourceTable"})})
 * @ORM\Entity
 */
class Translationtables
{
    /**
     * @var string
     *
     * @ORM\Column(name="sourceTable", type="string", length=200, nullable=false)
     */
    private $sourcetable;

    /**
     * @var string
     *
     * @ORM\Column(name="destinationTable", type="string", length=200, nullable=true)
     */
    private $destinationtable;

    /**
     * @var string
     *
     * @ORM\Column(name="translatedKey", type="string", length=200, nullable=false)
     */
    private $translatedkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcGroupID", type="integer", nullable=true)
     */
    private $tcgroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcID", type="integer", nullable=true)
     */
    private $tcid;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

