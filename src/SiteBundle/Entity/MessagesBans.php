<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessagesBans
 *
 * @ORM\Table(name="messages_bans")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\MessagesBansRepository")
 */
class MessagesBans
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="blocking_player", referencedColumnName="id")
     **/
    private $blockingPlayer;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="blockedPlayers")
     * @ORM\JoinColumn(name="blocked_player", referencedColumnName="id")
     **/
    private $blockedPlayer;


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
     * Set blockingPlayer
     *
     * @param \SiteBundle\Entity\User $blockingPlayer
     *
     * @return MessagesBans
     */
    public function setBlockingPlayer(\SiteBundle\Entity\User $blockingPlayer = null)
    {
        $this->blockingPlayer = $blockingPlayer;
    
        return $this;
    }

    /**
     * Get blockingPlayer
     *
     * @return \SiteBundle\Entity\User
     */
    public function getBlockingPlayer()
    {
        return $this->blockingPlayer;
    }

    /**
     * Set blockedPlayer
     *
     * @param \SiteBundle\Entity\User $blockedPlayer
     *
     * @return MessagesBans
     */
    public function setBlockedPlayer(\SiteBundle\Entity\User $blockedPlayer = null)
    {
        $this->blockedPlayer = $blockedPlayer;
    
        return $this;
    }

    /**
     * Get blockedPlayer
     *
     * @return \SiteBundle\Entity\User
     */
    public function getBlockedPlayer()
    {
        return $this->blockedPlayer;
    }
}
