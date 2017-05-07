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
}
