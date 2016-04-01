<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Planet
 *
 * @ORM\Table(name="planet")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\PlanetRepository")
 */
class Planet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="x_coord", type="integer")
     */
    private $xCoord;

    /**
     * @var int
     *
     * @ORM\Column(name="y_coord", type="integer")
     */
    private $yCoord;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="oreSupply", type="integer")
     */
    private $oreSupply;

    /**
     * @var int
     *
     * @ORM\Column(name="antimatterSupply", type="integer")
     */
    private $antimatterSupply;

    /**
     * @var int
     *
     * @ORM\Column(name="uraniumSupply", type="integer")
     */
    private $uraniumSupply;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resupplyTime", type="datetime")
     */
    private $resupplyTime;
    
    /**
     * @ORM\OneToMany(targetEntity="FortificationOnPlanet", mappedBy="planet")
     */
    private $fortificationOnPlanet;
    
    public function __construct() {
        $this->fortificationOnPlanet = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set xCoord
     *
     * @param integer $xCoord
     *
     * @return Planet
     */
    public function setXCoord($xCoord)
    {
        $this->xCoord = $xCoord;
    
        return $this;
    }

    /**
     * Get xCoord
     *
     * @return integer
     */
    public function getXCoord()
    {
        return $this->xCoord;
    }

    /**
     * Set yCoord
     *
     * @param integer $yCoord
     *
     * @return Planet
     */
    public function setYCoord($yCoord)
    {
        $this->yCoord = $yCoord;
    
        return $this;
    }

    /**
     * Get yCoord
     *
     * @return integer
     */
    public function getYCoord()
    {
        return $this->yCoord;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Planet
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set oreSupply
     *
     * @param integer $oreSupply
     *
     * @return Planet
     */
    public function setOreSupply($oreSupply)
    {
        $this->oreSupply = $oreSupply;
    
        return $this;
    }

    /**
     * Get oreSupply
     *
     * @return integer
     */
    public function getOreSupply()
    {
        return $this->oreSupply;
    }

    /**
     * Set antimatterSupply
     *
     * @param integer $antimatterSupply
     *
     * @return Planet
     */
    public function setAntimatterSupply($antimatterSupply)
    {
        $this->antimatterSupply = $antimatterSupply;
    
        return $this;
    }

    /**
     * Get antimatterSupply
     *
     * @return integer
     */
    public function getAntimatterSupply()
    {
        return $this->antimatterSupply;
    }

    /**
     * Set uraniumSupply
     *
     * @param integer $uraniumSupply
     *
     * @return Planet
     */
    public function setUraniumSupply($uraniumSupply)
    {
        $this->uraniumSupply = $uraniumSupply;
    
        return $this;
    }

    /**
     * Get uraniumSupply
     *
     * @return integer
     */
    public function getUraniumSupply()
    {
        return $this->uraniumSupply;
    }

    /**
     * Set resupplyTime
     *
     * @param \DateTime $resupplyTime
     *
     * @return Planet
     */
    public function setResupplyTime($resupplyTime)
    {
        $this->resupplyTime = $resupplyTime;
    
        return $this;
    }

    /**
     * Get resupplyTime
     *
     * @return \DateTime
     */
    public function getResupplyTime()
    {
        return $this->resupplyTime;
    }

    /**
     * Add fortificationOnPlanet
     *
     * @param \SiteBundle\Entity\FortificationOnPlanet $fortificationOnPlanet
     *
     * @return Planet
     */
    public function addFortificationOnPlanet(\SiteBundle\Entity\FortificationOnPlanet $fortificationOnPlanet)
    {
        $this->fortificationOnPlanet[] = $fortificationOnPlanet;
    
        return $this;
    }

    /**
     * Remove fortificationOnPlanet
     *
     * @param \SiteBundle\Entity\FortificationOnPlanet $fortificationOnPlanet
     */
    public function removeFortificationOnPlanet(\SiteBundle\Entity\FortificationOnPlanet $fortificationOnPlanet)
    {
        $this->fortificationOnPlanet->removeElement($fortificationOnPlanet);
    }

    /**
     * Get fortificationOnPlanet
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFortificationOnPlanet()
    {
        return $this->fortificationOnPlanet;
    }
}
