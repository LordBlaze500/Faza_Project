<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raport
 *
 * @ORM\Table(name="raports")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\RaportRepository")
 */
class Raport
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
     * @ORM\Column(name="content", type="string", length=500)
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_read", type="boolean")
     */
    private $isRead;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="raports")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=false)
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
     * Set content
     *
     * @param string $content
     *
     * @return Raport
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
     * Set isRead
     *
     * @param boolean $isRead
     *
     * @return Raport
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;
    
        return $this;
    }

    /**
     * Get isRead
     *
     * @return boolean
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    /**
     * Set user
     *
     * @param \SiteBundle\Entity\User $user
     *
     * @return Raport
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
