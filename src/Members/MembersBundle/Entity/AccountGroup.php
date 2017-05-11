<?php

namespace Members\MembersBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * AccountMember
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Members\MembersBundle\Repository\AccountGroupRepository")
 */
class AccountGroup extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
	 
	 /**
	 *
	 * @ORM\ManyToMany(targetEntity="Members\MembersBundle\Entity\AccountMember", mappedBy="groups")
	 */
	 protected $member;

    /**
     * Add member
     *
     * @param \Members\MembersBundle\Entity\AccountMember $member
     * @return AccountGroup
     */
    public function addMember(\Members\MembersBundle\Entity\AccountMember $member)
    {
        $this->member[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \Members\MembersBundle\Entity\AccountMember $member
     */
    public function removeMember(\Members\MembersBundle\Entity\AccountMember $member)
    {
        $this->member->removeElement($member);
    }

    /**
     * Get member
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMember()
    {
        return $this->member;
    }
}
