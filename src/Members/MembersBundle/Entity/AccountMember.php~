<?php

namespace Members\MembersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * AccountMember
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Members\MembersBundle\Repository\AccountMemberRepository")
 */
class AccountMember extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Members\MembersBundle\Entity\AccountGroup", inversedBy="member", fetch="EAGER")
     */
    protected $groups;


}
