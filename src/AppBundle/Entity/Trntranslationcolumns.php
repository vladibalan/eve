<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trntranslationcolumns
 *
 * @ORM\Table(name="trnTranslationColumns")
 * @ORM\Entity
 */
class Trntranslationcolumns
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tcGroupID", type="integer", nullable=true)
     */
    private $tcgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="tableName", type="string", length=256, nullable=false)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="columnName", type="string", length=128, nullable=false)
     */
    private $columnname;

    /**
     * @var string
     *
     * @ORM\Column(name="masterID", type="string", length=128, nullable=true)
     */
    private $masterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcid;


}

