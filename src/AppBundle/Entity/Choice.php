<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choice
 */
class Choice
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
    * Many Choices have Many Communities
    */
    private $communities;


    public function __construct() {
        $this->communities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Choice
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Choice
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add communities
     *
     * @param \AppBundle\Entity\Community $communities
     * @return Choice
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
