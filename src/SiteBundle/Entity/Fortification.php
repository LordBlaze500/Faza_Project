<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fortification
 *
 * @ORM\Table(name="fortification")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\FortificationRepository")
 */
class Fortification
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=200)
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="oreCost", type="integer")
     */
    private $oreCost;

    /**
     * @var int
     *
     * @ORM\Column(name="antimaterCost", type="integer")
     */
    private $antimaterCost;

    /**
     * @var int
     *
     * @ORM\Column(name="uraniumCost", type="integer")
     */
    private $uraniumCost;

    /**
     * @var int
     *
     * @ORM\Column(name="destination", type="integer")
     */
    private $destination;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="buildingTime", type="integer")
     */
    private $buildingTime;


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
     * Set name
     *
     * @param string $name
     *
     * @return Fortifications
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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Fortifications
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set oreCost
     *
     * @param integer $oreCost
     *
     * @return Fortifications
     */
    public function setOreCost($oreCost)
    {
        $this->oreCost = $oreCost;
    
        return $this;
    }

    /**
     * Get oreCost
     *
     * @return integer
     */
    public function getOreCost()
    {
        return $this->oreCost;
    }

    /**
     * Set antimaterCost
     *
     * @param integer $antimaterCost
     *
     * @return Fortifications
     */
    public function setAntimaterCost($antimaterCost)
    {
        $this->antimaterCost = $antimaterCost;
    
        return $this;
    }

    /**
     * Get antimaterCost
     *
     * @return integer
     */
    public function getAntimaterCost()
    {
        return $this->antimaterCost;
    }

    /**
     * Set uraniumCost
     *
     * @param integer $uraniumCost
     *
     * @return Fortifications
     */
    public function setUraniumCost($uraniumCost)
    {
        $this->uraniumCost = $uraniumCost;
    
        return $this;
    }

    /**
     * Get uraniumCost
     *
     * @return integer
     */
    public function getUraniumCost()
    {
        return $this->uraniumCost;
    }

    /**
     * Set destination
     *
     * @param integer $destination
     *
     * @return Fortifications
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return integer
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return Fortifications
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set buildingTime
     *
     * @param integer $buildingTime
     *
     * @return Fortifications
     */
    public function setBuildingTime($buildingTime)
    {
        $this->buildingTime = $buildingTime;
    
        return $this;
    }

    /**
     * Get buildingTime
     *
     * @return integer
     */
    public function getBuildingTime()
    {
        return $this->buildingTime;
    }
}
