<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FortificationsOnPlanet
 *
 * @ORM\Table(name="fortification_on_planet")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\FortificationOnPlanetRepository")
 */
class FortificationOnPlanet
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
     * @var \DateTime
     *
     * @ORM\Column(name="builtTime", type="datetime")
     */
    private $builtTime;
    
    /**
     * @ORM\ManyToOne(targetEntity="Planet", inversedBy="fortificationOnPlanet")
     * @ORM\JoinColumn(name="id_planet", referencedColumnName="id")
     */
    private $planet;
    
    /**
     * @ORM\ManyToOne(targetEntity="Fortification")
     * @ORM\JoinColumn(name="id_fortification", referencedColumnName="id")
     */
    private $fortification;
    
    
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
     * Set builtTime
     *
     * @param \DateTime $builtTime
     *
     * @return FortificationOnPlanet
     */
    public function setBuiltTime($builtTime)
    {
        $this->builtTime = $builtTime;
    
        return $this;
    }

    /**
     * Get builtTime
     *
     * @return \DateTime
     */
    public function getBuiltTime()
    {
        return $this->builtTime;
    }

    /**
     * Set planet
     *
     * @param \SiteBundle\Entity\Planet $planet
     *
     * @return FortificationOnPlanet
     */
    public function setPlanet(\SiteBundle\Entity\Planet $planet = null)
    {
        $this->planet = $planet;
    
        return $this;
    }

    /**
     * Get planet
     *
     * @return \SiteBundle\Entity\Planet
     */
    public function getPlanet()
    {
        return $this->planet;
    }

    /**
     * Set fortification
     *
     * @param \SiteBundle\Entity\Fortification $fortification
     *
     * @return FortificationOnPlanet
     */
    public function setFortification(\SiteBundle\Entity\Fortification $fortification = null)
    {
        $this->fortification = $fortification;
    
        return $this;
    }

    /**
     * Get fortification
     *
     * @return \SiteBundle\Entity\Fortification
     */
    public function getFortification()
    {
        return $this->fortification;
    }
}
