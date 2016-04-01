<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Move
 *
 * @ORM\Table(name="move")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\MoveRepository")
 */
class Move
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
     * @ORM\Column(name="x_source", type="integer")
     */
    private $xSource;

    /**
     * @var int
     *
     * @ORM\Column(name="ySource", type="integer")
     */
    private $ySource;

    /**
     * @var int
     *
     * @ORM\Column(name="xDest", type="integer")
     */
    private $xDest;

    /**
     * @var int
     *
     * @ORM\Column(name="yDest", type="integer")
     */
    private $yDest;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arrivalTime", type="datetime")
     */
    private $arrivalTime;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="moves")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     **/
    private $user;


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
     * Set xSource
     *
     * @param integer $xSource
     *
     * @return Move
     */
    public function setXSource($xSource)
    {
        $this->xSource = $xSource;
    
        return $this;
    }

    /**
     * Get xSource
     *
     * @return integer
     */
    public function getXSource()
    {
        return $this->xSource;
    }

    /**
     * Set ySource
     *
     * @param integer $ySource
     *
     * @return Move
     */
    public function setYSource($ySource)
    {
        $this->ySource = $ySource;
    
        return $this;
    }

    /**
     * Get ySource
     *
     * @return integer
     */
    public function getYSource()
    {
        return $this->ySource;
    }

    /**
     * Set xDest
     *
     * @param integer $xDest
     *
     * @return Move
     */
    public function setXDest($xDest)
    {
        $this->xDest = $xDest;
    
        return $this;
    }

    /**
     * Get xDest
     *
     * @return integer
     */
    public function getXDest()
    {
        return $this->xDest;
    }

    /**
     * Set yDest
     *
     * @param integer $yDest
     *
     * @return Move
     */
    public function setYDest($yDest)
    {
        $this->yDest = $yDest;
    
        return $this;
    }

    /**
     * Get yDest
     *
     * @return integer
     */
    public function getYDest()
    {
        return $this->yDest;
    }

    /**
     * Set arrivalTime
     *
     * @param \DateTime $arrivalTime
     *
     * @return Move
     */
    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
    
        return $this;
    }

    /**
     * Get arrivalTime
     *
     * @return \DateTime
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Move
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set user
     *
     * @param \SiteBundle\Entity\User $user
     *
     * @return Move
     */
    public function setUser(\SiteBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \SiteBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
