<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trntranslations
 *
 * @ORM\Table(name="trnTranslations", indexes={@ORM\Index(name="tcID", columns={"tcID"})})
 * @ORM\Entity
 */
class Trntranslations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tcID", type="integer", nullable=false)
     */
    private $tcid;

    /**
     * @var integer
     *
     * @ORM\Column(name="keyID", type="integer", nullable=false)
     */
    private $keyid;

    /**
     * @var string
     *
     * @ORM\Column(name="languageID", type="string", length=50, nullable=false)
     */
    private $languageid;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

