<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quest
 *
 * @ORM\Table(name="quest")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\QuestRepository")
 */
class Quest
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
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=500)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="expGiven", type="integer")
     */
    private $expGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="oreGiven", type="integer")
     */
    private $oreGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="antimatterGiven", type="integer")
     */
    private $antimatterGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="uraniumGiven", type="integer")
     */
    private $uraniumGiven;

    /**
     * @var int
     *
     * @ORM\Column(name="xCoord", type="integer")
     */
    private $xCoord;
    
    /**
     * @var int
     *
     * @ORM\Column(name="yCoord", type="integer")
     */
    private $yCoord;
    
    /**
     * @var int
     *
     * @ORM\Column(name="xlvlRequired", type="integer")
     */
    private $lvlRequired;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_part_given", referencedColumnName="id")
     */
    private $partGiven;


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
     * @return Quest
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
     * @return Quest
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
     * Set content
     *
     * @param string $content
     *
     * @return Quest
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set expGiven
     *
     * @param integer $expGiven
     *
     * @return Quest
     */
    public function setExpGiven($expGiven)
    {
        $this->expGiven = $expGiven;
    
        return $this;
    }

    /**
     * Get expGiven
     *
     * @return integer
     */
    public function getExpGiven()
    {
        return $this->expGiven;
    }

    /**
     * Set oreGiven
     *
     * @param integer $oreGiven
     *
     * @return Quest
     */
    public function setOreGiven($oreGiven)
    {
        $this->oreGiven = $oreGiven;
    
        return $this;
    }

    /**
     * Get oreGiven
     *
     * @return integer
     */
    public function getOreGiven()
    {
        return $this->oreGiven;
    }

    /**
     * Set antimatterGiven
     *
     * @param integer $antimatterGiven
     *
     * @return Quest
     */
    public function setAntimatterGiven($antimatterGiven)
    {
        $this->antimatterGiven = $antimatterGiven;
    
        return $this;
    }

    /**
     * Get antimatterGiven
     *
     * @return integer
     */
    public function getAntimatterGiven()
    {
        return $this->antimatterGiven;
    }

    /**
     * Set uraniumGiven
     *
     * @param integer $uraniumGiven
     *
     * @return Quest
     */
    public function setUraniumGiven($uraniumGiven)
    {
        $this->uraniumGiven = $uraniumGiven;
    
        return $this;
    }

    /**
     * Get uraniumGiven
     *
     * @return integer
     */
    public function getUraniumGiven()
    {
        return $this->uraniumGiven;
    }

    /**
     * Set xCoord
     *
     * @param integer $xCoord
     *
     * @return Quest
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
     * @return Quest
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
     * Set lvlRequired
     *
     * @param integer $lvlRequired
     *
     * @return Quest
     */
    public function setLvlRequired($lvlRequired)
    {
        $this->lvlRequired = $lvlRequired;
    
        return $this;
    }

    /**
     * Get lvlRequired
     *
     * @return integer
     */
    public function getLvlRequired()
    {
        return $this->lvlRequired;
    }

    /**
     * Set partGiven
     *
     * @param \SiteBundle\Entity\Part $partGiven
     *
     * @return Quest
     */
    public function setPartGiven(\SiteBundle\Entity\Part $partGiven = null)
    {
        $this->partGiven = $partGiven;
    
        return $this;
    }

    /**
     * Get partGiven
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getPartGiven()
    {
        return $this->partGiven;
    }
}
