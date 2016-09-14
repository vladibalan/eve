<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trntranslationlanguages
 *
 * @ORM\Table(name="trnTranslationLanguages", indexes={@ORM\Index(name="languageID", columns={"languageID"})})
 * @ORM\Entity
 */
class Trntranslationlanguages
{
    /**
     * @var string
     *
     * @ORM\Column(name="languageID", type="string", length=50, nullable=true)
     */
    private $languageid;

    /**
     * @var string
     *
     * @ORM\Column(name="languageName", type="string", length=200, nullable=true)
     */
    private $languagename;

    /**
     * @var integer
     *
     * @ORM\Column(name="numericLanguageID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numericlanguageid;


}

