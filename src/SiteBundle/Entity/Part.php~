<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Part
 *
 * @ORM\Table(name="part")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\PartRepository")
 */
class Part
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
     * @ORM\Column(name="antimatterCost", type="integer")
     */
    private $antimatterCost;

    /**
     * @var int
     *
     * @ORM\Column(name="uraniumCost", type="integer")
     */
    private $uraniumCost;

    /**
     * @var int
     *
     * @ORM\Column(name="setUpTime", type="integer")
     */
    private $setUpTime;

    /**
     * @var int
     *
     * @ORM\Column(name="levelRequired", type="integer")
     */
    private $levelRequired;


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
     * @return Part
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
     * Set destination
     *
     * @param integer $destination
     *
     * @return Part
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
     * @return Part
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
     * Set avatar
     *
     * @param string $avatar
     *
     * @return Part
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
     * @return Part
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
     * Set antimatterCost
     *
     * @param integer $antimatterCost
     *
     * @return Part
     */
    public function setAntimatterCost($antimatterCost)
    {
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
     * @return Part
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
     * Set setUpTime
     *
     * @param integer $setUpTime
     *
     * @return Part
     */
    public function setSetUpTime($setUpTime)
    {
        $this->setUpTime = $setUpTime;
    
        return $this;
    }

    /**
     * Get setUpTime
     *
     * @return integer
     */
    public function getSetUpTime()
    {
        return $this->setUpTime;
    }

    /**
     * Set levelRequired
     *
     * @param integer $levelRequired
     *
     * @return Part
     */
    public function setLevelRequired($levelRequired)
    {
        $this->levelRequired = $levelRequired;
    
        return $this;
    }

    /**
     * Get levelRequired
     *
     * @return integer
     */
    public function getLevelRequired()
    {
        return $this->levelRequired;
    }
}
