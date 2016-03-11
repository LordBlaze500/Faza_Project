<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestsOfPlayer
 *
 * @ORM\Table(name="quests_of_player")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\QuestsOfPlayerRepository")
 */
class QuestsOfPlayer
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
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="questsList")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     **/
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Quest")
     * @ORM\JoinColumn(name="id_quest", referencedColumnName="id")
     **/
    private $quest;


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
     * Set status
     *
     * @param boolean $status
     *
     * @return QuestsOfPlayer
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \SiteBundle\Entity\User $user
     *
     * @return QuestsOfPlayer
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

    /**
     * Set quest
     *
     * @param \SiteBundle\Entity\Quest $quest
     *
     * @return QuestsOfPlayer
     */
    public function setQuest(\SiteBundle\Entity\Quest $quest = null)
    {
        $this->quest = $quest;
    
        return $this;
    }

    /**
     * Get quest
     *
     * @return \SiteBundle\Entity\Quest
     */
    public function getQuest()
    {
        return $this->quest;
    }
}
