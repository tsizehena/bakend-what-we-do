<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    /**
     * @var int $id
     */
    protected $id;

    /**
     * @var string
     */
    protected $pentagramme = "";

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function getPentagramme() {
        return $this->pentagramme;
    }

    public function setPentagramme($pentagramme) {
        $this->pentagramme = $pentagramme;
    }

    /**
     * Many Users have Many Communities
     */
    private $communities;

    public function __construct() {
        parent::__construct();
        $this->communities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add communities
     *
     * @param \AppBundle\Entity\Community $communities
     * @return User
     */
    public function addCommunity(\AppBundle\Entity\Community $communities)
    {
        $this->communities[] = $communities;

        return $this;
    }

    /**
     * Remove communities
     *
     * @param \AppBundle\Entity\Community $communities
     */
    public function removeCommunity(\AppBundle\Entity\Community $communities)
    {
        $this->communities->removeElement($communities);
    }

    /**
     * Get communities
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunities()
    {
        return $this->communities;
    }
}
