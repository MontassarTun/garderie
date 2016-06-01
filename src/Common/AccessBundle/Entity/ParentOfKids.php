<?php

namespace Common\AccessBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParentOfKids
 *
 * @ORM\Table(name="parent_of_kids")
 * @ORM\Entity(repositoryClass="Common\AccessBundle\Repository\ParentOfKidsRepository")
 */
class ParentOfKids
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
     * @ORM\ManyTOOne(targetEntity="BackEnd\ServicesManagementBundle\Entity\Pack")
     */
    private $Pack;
    
    /**
     * @ORM\OneToMany(targetEntity="BackEnd\KidsManagementBundle\Entity\Kid", mappedBy="ParentOfKids")
     */
    private $Kids;

    /**
     * @ORM\OneToMany(targetEntity="BackEnd\KidsManagementBundle\Entity\Payment", mappedBy="ParentOfKids")
     */
    private $Payment;

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
     * @return ParentOfKids
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
     * @return ParentOfKids
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
     * @return ParentOfKids
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
     * @return ParentOfKids
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
     * @return ParentOfKids
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Kids = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add kid
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Kid $kid
     *
     * @return ParentOfKids
     */
    public function addKid(\BackEnd\KidsManagementBundle\Entity\Kid $kid)
    {
        $this->Kids[] = $kid;
    
        return $this;
    }

    /**
     * Remove kid
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Kid $kid
     */
    public function removeKid(\BackEnd\KidsManagementBundle\Entity\Kid $kid)
    {
        $this->Kids->removeElement($kid);
    }

    /**
     * Get kids
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKids()
    {
        return $this->Kids;
    }

    /**
     * Add payment
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Payment $payment
     *
     * @return ParentOfKids
     */
    public function addPayment(\BackEnd\KidsManagementBundle\Entity\Payment $payment)
    {
        $this->Payment[] = $payment;
    
        return $this;
    }

    /**
     * Remove payment
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Payment $payment
     */
    public function removePayment(\BackEnd\KidsManagementBundle\Entity\Payment $payment)
    {
        $this->Payment->removeElement($payment);
    }

    /**
     * Get payment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * Set pack
     *
     * @param \BackEnd\ServicesManagementBundle\Entity\Pack $pack
     *
     * @return ParentOfKids
     */
    public function setPack(\BackEnd\ServicesManagementBundle\Entity\Pack $pack = null)
    {
        $this->Pack = $pack;
    
        return $this;
    }

    /**
     * Get pack
     *
     * @return \BackEnd\ServicesManagementBundle\Entity\Pack
     */
    public function getPack()
    {
        return $this->Pack;
    }
}
