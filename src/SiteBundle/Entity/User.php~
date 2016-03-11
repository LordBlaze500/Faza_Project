<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
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
     * @ORM\Column(name="username", type="string", length=30, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=35)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=200, nullable=true)
     */
    private $avatar;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="exp", type="integer")
     */
    private $exp;

    /**
     * @var int
     *
     * @ORM\Column(name="class", type="integer")
     */
    private $class;

    /**
     * @var int
     *
     * @ORM\Column(name="currentHp", type="integer")
     */
    private $currentHp;

    /**
     * @var int
     *
     * @ORM\Column(name="maxHp", type="integer")
     */
    private $maxHp;

    /**
     * @var int
     *
     * @ORM\Column(name="attactHero", type="integer")
     */
    private $attactHero;

    /**
     * @var int
     *
     * @ORM\Column(name="defenceHero", type="integer")
     */
    private $defenceHero;

    /**
     * @var int
     *
     * @ORM\Column(name="aggressionHero", type="integer")
     */
    private $aggressionHero;

    /**
     * @var int
     *
     * @ORM\Column(name="agilityHero", type="integer")
     */
    private $agilityHero;

    /**
     * @var int
     *
     * @ORM\Column(name="precisionHero", type="integer")
     */
    private $precisionHero;

    /**
     * @var int
     *
     * @ORM\Column(name="speedShip", type="integer")
     */
    private $speedShip;

    /**
     * @var int
     *
     * @ORM\Column(name="attackShip", type="integer")
     */
    private $attackShip;

    /**
     * @var int
     *
     * @ORM\Column(name="defenceShip", type="integer")
     */
    private $defenceShip;

    /**
     * @var int
     *
     * @ORM\Column(name="aggressionShip", type="integer")
     */
    private $aggressionShip;

    /**
     * @var int
     *
     * @ORM\Column(name="precisionShip", type="integer")
     */
    private $precisionShip;

    /**
     * @var int
     *
     * @ORM\Column(name="agilityShip", type="integer")
     */
    private $agilityShip;

    /**
     * @var int
     *
     * @ORM\Column(name="oreOwned", type="integer")
     */
    private $oreOwned;

    /**
     * @var int
     *
     * @ORM\Column(name="antimatterOwned", type="integer")
     */
    private $antimatterOwned;

    /**
     * @var int
     *
     * @ORM\Column(name="uraniumOwned", type="integer")
     */
    private $uraniumOwned;

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
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastLoginData", type="datetime")
     */
    private $lastLoginData;

    /**
     * @var string
     *
     * @ORM\Column(name="activationHash", type="string", length=128)
     */
    private $activationHash;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_attack_part", referencedColumnName="id")
     **/
    private $attackPart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_defence_part", referencedColumnName="id")
     **/
    private $defencePart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_precise_part", referencedColumnName="id")
     **/
    private $precisePart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_agility_part", referencedColumnName="id")
     **/
    private $agilityPart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_aggression_part", referencedColumnName="id")
     **/
    private $aggressionPart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_hp_part", referencedColumnName="id")
     **/
    private $hpPart;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_speed_part", referencedColumnName="id")
     **/
    private $speedPart;
    
    /**
     * @ORM\OneToMany(targetEntity="PartOfuser", mappedBy="user")
     **/
    private $parts;
    
    /**
     * @ORM\OneToMany(targetEntity="MessagesBans", mappedBy="blockedPlayer")
     **/
    private $blockedPlayers;
    
    /**
     * @ORM\OneToMany(targetEntity="Statistics", mappedBy="playerOne")
     **/
    private $statisticsOne;
    
    /**
     * @ORM\OneToMany(targetEntity="Statistics", mappedBy="playerTwo")
     **/
    private $statisticsTwo;
    
    /**
     * @ORM\OneToMany(targetEntity="Raport", mappedBy="user")
     **/
    private $raports;
    
    /**
     * @ORM\OneToMany(targetEntity="Move", mappedBy="user")
     **/
    private $moves;
    
    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="user")
     **/
    private $messages;
    
    /**
     * @ORM\OneToMany(targetEntity="QuestsOfPlayer", mappedBy="user")
     **/
    private $questsList;
    
    public function __construct() {
        $this->parts = new ArrayCollection();
        $this->blockedPlayers = new ArrayCollection();
        $this->statisticsOne = new ArrayCollection();
        $this->statisticsTwo = new ArrayCollection();
        $this->raports = new ArrayCollection();
        $this->moves = new ArrayCollection();
        $this->messages = new ArrayCollection();
        $this->questsList = new ArrayCollection();
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
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
     * Set level
     *
     * @param integer $level
     *
     * @return User
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set exp
     *
     * @param integer $exp
     *
     * @return User
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
    
        return $this;
    }

    /**
     * Get exp
     *
     * @return integer
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set class
     *
     * @param integer $class
     *
     * @return User
     */
    public function setClass($class)
    {
        $this->class = $class;
    
        return $this;
    }

    /**
     * Get class
     *
     * @return integer
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set currentHp
     *
     * @param integer $currentHp
     *
     * @return User
     */
    public function setCurrentHp($currentHp)
    {
        $this->currentHp = $currentHp;
    
        return $this;
    }

    /**
     * Get currentHp
     *
     * @return integer
     */
    public function getCurrentHp()
    {
        return $this->currentHp;
    }

    /**
     * Set maxHp
     *
     * @param integer $maxHp
     *
     * @return User
     */
    public function setMaxHp($maxHp)
    {
        $this->maxHp = $maxHp;
    
        return $this;
    }

    /**
     * Get maxHp
     *
     * @return integer
     */
    public function getMaxHp()
    {
        return $this->maxHp;
    }

    /**
     * Set attactHero
     *
     * @param integer $attactHero
     *
     * @return User
     */
    public function setAttactHero($attactHero)
    {
        $this->attactHero = $attactHero;
    
        return $this;
    }

    /**
     * Get attactHero
     *
     * @return integer
     */
    public function getAttactHero()
    {
        return $this->attactHero;
    }

    /**
     * Set defenceHero
     *
     * @param integer $defenceHero
     *
     * @return User
     */
    public function setDefenceHero($defenceHero)
    {
        $this->defenceHero = $defenceHero;
    
        return $this;
    }

    /**
     * Get defenceHero
     *
     * @return integer
     */
    public function getDefenceHero()
    {
        return $this->defenceHero;
    }

    /**
     * Set aggressionHero
     *
     * @param integer $aggressionHero
     *
     * @return User
     */
    public function setAggressionHero($aggressionHero)
    {
        $this->aggressionHero = $aggressionHero;
    
        return $this;
    }

    /**
     * Get aggressionHero
     *
     * @return integer
     */
    public function getAggressionHero()
    {
        return $this->aggressionHero;
    }

    /**
     * Set agilityHero
     *
     * @param integer $agilityHero
     *
     * @return User
     */
    public function setAgilityHero($agilityHero)
    {
        $this->agilityHero = $agilityHero;
    
        return $this;
    }

    /**
     * Get agilityHero
     *
     * @return integer
     */
    public function getAgilityHero()
    {
        return $this->agilityHero;
    }

    /**
     * Set precisionHero
     *
     * @param integer $precisionHero
     *
     * @return User
     */
    public function setPrecisionHero($precisionHero)
    {
        $this->precisionHero = $precisionHero;
    
        return $this;
    }

    /**
     * Get precisionHero
     *
     * @return integer
     */
    public function getPrecisionHero()
    {
        return $this->precisionHero;
    }

    /**
     * Set speedShip
     *
     * @param integer $speedShip
     *
     * @return User
     */
    public function setSpeedShip($speedShip)
    {
        $this->speedShip = $speedShip;
    
        return $this;
    }

    /**
     * Get speedShip
     *
     * @return integer
     */
    public function getSpeedShip()
    {
        return $this->speedShip;
    }

    /**
     * Set attackShip
     *
     * @param integer $attackShip
     *
     * @return User
     */
    public function setAttackShip($attackShip)
    {
        $this->attackShip = $attackShip;
    
        return $this;
    }

    /**
     * Get attackShip
     *
     * @return integer
     */
    public function getAttackShip()
    {
        return $this->attackShip;
    }

    /**
     * Set defenceShip
     *
     * @param integer $defenceShip
     *
     * @return User
     */
    public function setDefenceShip($defenceShip)
    {
        $this->defenceShip = $defenceShip;
    
        return $this;
    }

    /**
     * Get defenceShip
     *
     * @return integer
     */
    public function getDefenceShip()
    {
        return $this->defenceShip;
    }

    /**
     * Set aggressionShip
     *
     * @param integer $aggressionShip
     *
     * @return User
     */
    public function setAggressionShip($aggressionShip)
    {
        $this->aggressionShip = $aggressionShip;
    
        return $this;
    }

    /**
     * Get aggressionShip
     *
     * @return integer
     */
    public function getAggressionShip()
    {
        return $this->aggressionShip;
    }

    /**
     * Set precisionShip
     *
     * @param integer $precisionShip
     *
     * @return User
     */
    public function setPrecisionShip($precisionShip)
    {
        $this->precisionShip = $precisionShip;
    
        return $this;
    }

    /**
     * Get precisionShip
     *
     * @return integer
     */
    public function getPrecisionShip()
    {
        return $this->precisionShip;
    }

    /**
     * Set agilityShip
     *
     * @param integer $agilityShip
     *
     * @return User
     */
    public function setAgilityShip($agilityShip)
    {
        $this->agilityShip = $agilityShip;
    
        return $this;
    }

    /**
     * Get agilityShip
     *
     * @return integer
     */
    public function getAgilityShip()
    {
        return $this->agilityShip;
    }

    /**
     * Set oreOwned
     *
     * @param integer $oreOwned
     *
     * @return User
     */
    public function setOreOwned($oreOwned)
    {
        $this->oreOwned = $oreOwned;
    
        return $this;
    }

    /**
     * Get oreOwned
     *
     * @return integer
     */
    public function getOreOwned()
    {
        return $this->oreOwned;
    }

    /**
     * Set antimatterOwned
     *
     * @param integer $antimatterOwned
     *
     * @return User
     */
    public function setAntimatterOwned($antimatterOwned)
    {
        $this->antimatterOwned = $antimatterOwned;
    
        return $this;
    }

    /**
     * Get antimatterOwned
     *
     * @return integer
     */
    public function getAntimatterOwned()
    {
        return $this->antimatterOwned;
    }

    /**
     * Set uraniumOwned
     *
     * @param integer $uraniumOwned
     *
     * @return User
     */
    public function setUraniumOwned($uraniumOwned)
    {
        $this->uraniumOwned = $uraniumOwned;
    
        return $this;
    }

    /**
     * Get uraniumOwned
     *
     * @return integer
     */
    public function getUraniumOwned()
    {
        return $this->uraniumOwned;
    }

    /**
     * Set xCoord
     *
     * @param integer $xCoord
     *
     * @return User
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
     * @return User
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
     * Set active
     *
     * @param boolean $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set lastLoginData
     *
     * @param \DateTime $lastLoginData
     *
     * @return User
     */
    public function setLastLoginData($lastLoginData)
    {
        $this->lastLoginData = $lastLoginData;
    
        return $this;
    }

    /**
     * Get lastLoginData
     *
     * @return \DateTime
     */
    public function getLastLoginData()
    {
        return $this->lastLoginData;
    }

    /**
     * Set activationHash
     *
     * @param string $activationHash
     *
     * @return User
     */
    public function setActivationHash($activationHash)
    {
        $this->activationHash = $activationHash;
    
        return $this;
    }

    /**
     * Get activationHash
     *
     * @return string
     */
    public function getActivationHash()
    {
        return $this->activationHash;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
            $this->email,
            $this->avatar,
            $this->level,
            $this->exp,
            $this->class,
            $this->currentHp,
            $this->maxHp,
            $this->attactHero,
            $this->defenceHero,
            $this->aggressionHero,
            $this->agilityHero,
            $this->precisionHero,
            $this->speedShip,
            $this->attackShip,
            $this->defenceShip,
            $this->aggressionShip,
            $this->precisionShip,
            $this->agilityShip,
            $this->oreOwned,
            $this->antimatterOwned,
            $this->uraniumOwned,
            $this->xCoord,
            $this->yCoord,
            $this->active,
            $this->lastLoginData,
            $this->activationHash
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->salt,
            $this->email,
            $this->avatar,
            $this->level,
            $this->exp,
            $this->class,
            $this->currentHp,
            $this->maxHp,
            $this->attactHero,
            $this->defenceHero,
            $this->aggressionHero,
            $this->agilityHero,
            $this->precisionHero,
            $this->speedShip,
            $this->attackShip,
            $this->defenceShip,
            $this->aggressionShip,
            $this->precisionShip,
            $this->agilityShip,
            $this->oreOwned,
            $this->antimatterOwned,
            $this->uraniumOwned,
            $this->xCoord,
            $this->yCoord,
            $this->active,
            $this->lastLoginData,
            $this->activationHash
        ) = unserialize($serialized);
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array("ROLE_USER");
    }


    /**
     * Set attackPart
     *
     * @param \SiteBundle\Entity\Part $attackPart
     *
     * @return User
     */
    public function setAttackPart(\SiteBundle\Entity\Part $attackPart = null)
    {
        $this->attackPart = $attackPart;
    
        return $this;
    }

    /**
     * Get attackPart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getAttackPart()
    {
        return $this->attackPart;
    }

    /**
     * Set defencePart
     *
     * @param \SiteBundle\Entity\Part $defencePart
     *
     * @return User
     */
    public function setDefencePart(\SiteBundle\Entity\Part $defencePart = null)
    {
        $this->defencePart = $defencePart;
    
        return $this;
    }

    /**
     * Get defencePart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getDefencePart()
    {
        return $this->defencePart;
    }

    /**
     * Set precisePart
     *
     * @param \SiteBundle\Entity\Part $precisePart
     *
     * @return User
     */
    public function setPrecisePart(\SiteBundle\Entity\Part $precisePart = null)
    {
        $this->precisePart = $precisePart;
    
        return $this;
    }

    /**
     * Get precisePart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getPrecisePart()
    {
        return $this->precisePart;
    }

    /**
     * Set agilityPart
     *
     * @param \SiteBundle\Entity\Part $agilityPart
     *
     * @return User
     */
    public function setAgilityPart(\SiteBundle\Entity\Part $agilityPart = null)
    {
        $this->agilityPart = $agilityPart;
    
        return $this;
    }

    /**
     * Get agilityPart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getAgilityPart()
    {
        return $this->agilityPart;
    }

    /**
     * Set aggressionPart
     *
     * @param \SiteBundle\Entity\Part $aggressionPart
     *
     * @return User
     */
    public function setAggressionPart(\SiteBundle\Entity\Part $aggressionPart = null)
    {
        $this->aggressionPart = $aggressionPart;
    
        return $this;
    }

    /**
     * Get aggressionPart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getAggressionPart()
    {
        return $this->aggressionPart;
    }

    /**
     * Set hpPart
     *
     * @param \SiteBundle\Entity\Part $hpPart
     *
     * @return User
     */
    public function setHpPart(\SiteBundle\Entity\Part $hpPart = null)
    {
        $this->hpPart = $hpPart;
    
        return $this;
    }

    /**
     * Get hpPart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getHpPart()
    {
        return $this->hpPart;
    }

    /**
     * Set speedPart
     *
     * @param \SiteBundle\Entity\Part $speedPart
     *
     * @return User
     */
    public function setSpeedPart(\SiteBundle\Entity\Part $speedPart = null)
    {
        $this->speedPart = $speedPart;
    
        return $this;
    }

    /**
     * Get speedPart
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getSpeedPart()
    {
        return $this->speedPart;
    }

    /**
     * Add part
     *
     * @param \SiteBundle\Entity\PartOfuser $part
     *
     * @return User
     */
    public function addPart(\SiteBundle\Entity\PartOfuser $part)
    {
        $this->parts[] = $part;
    
        return $this;
    }

    /**
     * Remove part
     *
     * @param \SiteBundle\Entity\PartOfuser $part
     */
    public function removePart(\SiteBundle\Entity\PartOfuser $part)
    {
        $this->parts->removeElement($part);
    }

    /**
     * Get parts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Add blockedPlayer
     *
     * @param \SiteBundle\Entity\MessagesBans $blockedPlayer
     *
     * @return User
     */
    public function addBlockedPlayer(\SiteBundle\Entity\MessagesBans $blockedPlayer)
    {
        $this->blockedPlayers[] = $blockedPlayer;
    
        return $this;
    }

    /**
     * Remove blockedPlayer
     *
     * @param \SiteBundle\Entity\MessagesBans $blockedPlayer
     */
    public function removeBlockedPlayer(\SiteBundle\Entity\MessagesBans $blockedPlayer)
    {
        $this->blockedPlayers->removeElement($blockedPlayer);
    }

    /**
     * Get blockedPlayers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlockedPlayers()
    {
        return $this->blockedPlayers;
    }

    /**
     * Add statisticsOne
     *
     * @param \SiteBundle\Entity\Statistics $statisticsOne
     *
     * @return User
     */
    public function addStatisticsOne(\SiteBundle\Entity\Statistics $statisticsOne)
    {
        $this->statisticsOne[] = $statisticsOne;
    
        return $this;
    }

    /**
     * Remove statisticsOne
     *
     * @param \SiteBundle\Entity\Statistics $statisticsOne
     */
    public function removeStatisticsOne(\SiteBundle\Entity\Statistics $statisticsOne)
    {
        $this->statisticsOne->removeElement($statisticsOne);
    }

    /**
     * Get statisticsOne
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatisticsOne()
    {
        return $this->statisticsOne;
    }

    /**
     * Add statisticsTwo
     *
     * @param \SiteBundle\Entity\Statistics $statisticsTwo
     *
     * @return User
     */
    public function addStatisticsTwo(\SiteBundle\Entity\Statistics $statisticsTwo)
    {
        $this->statisticsTwo[] = $statisticsTwo;
    
        return $this;
    }

    /**
     * Remove statisticsTwo
     *
     * @param \SiteBundle\Entity\Statistics $statisticsTwo
     */
    public function removeStatisticsTwo(\SiteBundle\Entity\Statistics $statisticsTwo)
    {
        $this->statisticsTwo->removeElement($statisticsTwo);
    }

    /**
     * Get statisticsTwo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatisticsTwo()
    {
        return $this->statisticsTwo;
    }

    /**
     * Add raport
     *
     * @param \SiteBundle\Entity\Raport $raport
     *
     * @return User
     */
    public function addRaport(\SiteBundle\Entity\Raport $raport)
    {
        $this->raports[] = $raport;
    
        return $this;
    }

    /**
     * Remove raport
     *
     * @param \SiteBundle\Entity\Raport $raport
     */
    public function removeRaport(\SiteBundle\Entity\Raport $raport)
    {
        $this->raports->removeElement($raport);
    }

    /**
     * Get raports
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRaports()
    {
        return $this->raports;
    }

    /**
     * Add move
     *
     * @param \SiteBundle\Entity\Move $move
     *
     * @return User
     */
    public function addMove(\SiteBundle\Entity\Move $move)
    {
        $this->moves[] = $move;
    
        return $this;
    }

    /**
     * Remove move
     *
     * @param \SiteBundle\Entity\Move $move
     */
    public function removeMove(\SiteBundle\Entity\Move $move)
    {
        $this->moves->removeElement($move);
    }

    /**
     * Get moves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMoves()
    {
        return $this->moves;
    }

    /**
     * Add message
     *
     * @param \SiteBundle\Entity\Message $message
     *
     * @return User
     */
    public function addMessage(\SiteBundle\Entity\Message $message)
    {
        $this->messages[] = $message;
    
        return $this;
    }

    /**
     * Remove message
     *
     * @param \SiteBundle\Entity\Message $message
     */
    public function removeMessage(\SiteBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add questsList
     *
     * @param \SiteBundle\Entity\QuestsOfPlayer $questsList
     *
     * @return User
     */
    public function addQuestsList(\SiteBundle\Entity\QuestsOfPlayer $questsList)
    {
        $this->questsList[] = $questsList;
    
        return $this;
    }

    /**
     * Remove questsList
     *
     * @param \SiteBundle\Entity\QuestsOfPlayer $questsList
     */
    public function removeQuestsList(\SiteBundle\Entity\QuestsOfPlayer $questsList)
    {
        $this->questsList->removeElement($questsList);
    }

    /**
     * Get questsList
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestsList()
    {
        return $this->questsList;
    }
}
