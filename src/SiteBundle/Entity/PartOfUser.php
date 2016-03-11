<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartOfUser
 *
 * @ORM\Table(name="part_of_user")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\PartOfUserRepository")
 */
class PartOfUser
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="parts")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     **/
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Part")
     * @ORM\JoinColumn(name="id_part", referencedColumnName="id")
     **/
    private $part;


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
     * Set user
     *
     * @param \SiteBundle\Entity\User $user
     *
     * @return PartOfUser
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
     * Set part
     *
     * @param \SiteBundle\Entity\Part $part
     *
     * @return PartOfUser
     */
    public function setPart(\SiteBundle\Entity\Part $part = null)
    {
        $this->part = $part;
    
        return $this;
    }

    /**
     * Get part
     *
     * @return \SiteBundle\Entity\Part
     */
    public function getPart()
    {
        return $this->part;
    }
}
