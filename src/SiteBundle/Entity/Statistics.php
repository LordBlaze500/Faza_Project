<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistics
 *
 * @ORM\Table(name="statistics")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\StatisticsRepository")
 */
class Statistics
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
     * @var bool
     *
     * @ORM\Column(name="result", type="boolean")
     */
    private $result;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $dateTime;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="player_one", referencedColumnName="id")
     **/
    private $playerOne;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="player_two", referencedColumnName="id")
     **/
    private $playerTwo;


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
     * Set result
     *
     * @param boolean $result
     *
     * @return Statistics
     */
    public function setResult($result)
    {
        $this->result = $result;
    
        return $this;
    }

    /**
     * Get result
     *
     * @return boolean
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set dateTime
     *
     * @param \DateTime $dateTime
     *
     * @return Statistics
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set playerOne
     *
     * @param \SiteBundle\Entity\User $playerOne
     *
     * @return Statistics
     */
    public function setPlayerOne(\SiteBundle\Entity\User $playerOne = null)
    {
        $this->playerOne = $playerOne;
    
        return $this;
    }

    /**
     * Get playerOne
     *
     * @return \SiteBundle\Entity\User
     */
    public function getPlayerOne()
    {
        return $this->playerOne;
    }

    /**
     * Set playerTwo
     *
     * @param \SiteBundle\Entity\User $playerTwo
     *
     * @return Statistics
     */
    public function setPlayerTwo(\SiteBundle\Entity\User $playerTwo = null)
    {
        $this->playerTwo = $playerTwo;
    
        return $this;
    }

    /**
     * Get playerTwo
     *
     * @return \SiteBundle\Entity\User
     */
    public function getPlayerTwo()
    {
        return $this->playerTwo;
    }
}
