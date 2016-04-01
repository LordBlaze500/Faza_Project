<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fortification
 *
 * @ORM\Table(name="fortifications")
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
     * @ORM\Column(name="ore_cost", type="integer")
     */
    private $oreCost;

    /**
     * @var int
     *
     * @ORM\Column(name="antimatter_cost", type="integer")
     */
    private $antimatterCost;

    /**
     * @var int
     *
     * @ORM\Column(name="uranium_cost", type="integer")
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
     * @ORM\Column(name="building_time", type="integer")
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
        if ($oreCost < 0) throw $this->createException('oreCost cannot be negative');
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
     * Set antimatterCost
     *
     * @param integer $antimatterCost
     *
     * @return Fortifications
     */
    public function setAntimatterCost($antimatterCost)
    {
        if ($antimatterCost < 0) throw $this->createException('antimatterCost cannot be negative');
        $this->antimatterCost = $antimatterCost;
    
        return $this;
    }

    /**
     * Get antimatterCost
     *
     * @return integer
     */
    public function getAntimatterCost()
    {
        return $this->antimatterCost;
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
        if ($uraniumCost < 0) throw $this->createException('uraniumCost cannot be negative');
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
        if ($destination < 0) throw $this->createException('destination cannot be negative');
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
        if ($value < 0) throw $this->createException('value cannot be negative');
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
        if ($buildingTime < 0) throw $this->createException('buildingTime cannot be negative');
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
