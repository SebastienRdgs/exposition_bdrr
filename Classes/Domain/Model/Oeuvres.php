<?php
namespace RDG\ExpositionRdg\Domain\Model;

/***
 *
 * This file is part of the "exposition rdg" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Erwan <trus.contact@gmail.com>, LaTeam
 *           Maelle <maelle.richard.tci@gmail.com>, LaTeam
 *           Alice <alice.depinoy@gmail.com>, LaTeam
 *           Sebastien <sebastienb.rodrigues@gmail.com>, LaTeam
 *
 ***/

/**
 * Oeuvres
 */
class Oeuvres extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * L'intitulé
     * 
     * @var string
     */
    protected $intitule = '';

    /**
     * date
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * type
     * 
     * @var int
     */
    protected $type = 0;

    /**
     * dimensions
     * 
     * @var string
     */
    protected $dimensions = '';

    /**
     * Returns the intitule
     * 
     * @return string $intitule
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Sets the intitule
     * 
     * @param string $intitule
     * @return void
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the type
     * 
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the dimensions
     * 
     * @return string $dimensions
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets the dimensions
     * 
     * @param string $dimensions
     * @return void
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
    }
}
