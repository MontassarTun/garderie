<?php

namespace Common\AccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * SuperAdmin
 *
 * @ORM\Table(name="super_admin")
 * @ORM\Entity(repositoryClass="Common\AccessBundle\Repository\SuperAdminRepository")
 */
class SuperAdmin extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
