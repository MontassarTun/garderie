<?php

namespace Common\AccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parent
 *
 * @ORM\Table(name="parent")
 * @ORM\Entity(repositoryClass="Common\AccessBundle\Repository\ParentRepository")
 */
class Parent
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_family_name", type="string", length=50)
     */
    private $lastFamilyName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=120, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=150)
     */
    private $address;

    /**
     * @var int
     *
     * @ORM\Column(name="kids_number", type="integer")
     */
    private $kidsNumber;


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
     * Set name
     *
     * @param string $name
     *
     * @return Parent
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastFamilyName
     *
     * @param string $lastFamilyName
     *
     * @return Parent
     */
    public function setLastFamilyName($lastFamilyName)
    {
        $this->lastFamilyName = $lastFamilyName;
    
        return $this;
    }

    /**
     * Get lastFamilyName
     *
     * @return string
     */
    public function getLastFamilyName()
    {
        return $this->lastFamilyName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Parent
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Parent
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set kidsNumber
     *
     * @param integer $kidsNumber
     *
     * @return Parent
     */
    public function setKidsNumber($kidsNumber)
    {
        $this->kidsNumber = $kidsNumber;
    
        return $this;
    }

    /**
     * Get kidsNumber
     *
     * @return integer
     */
    public function getKidsNumber()
    {
        return $this->kidsNumber;
    }
}

