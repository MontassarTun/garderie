<?php

namespace BackEnd\KidsManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity(repositoryClass="BackEnd\KidsManagementBundle\Repository\PaymentRepository")
 */
class Payment
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
     * @ORM\ManyToOne(targetEntity="BackEnd\KidsManagementBundle\Entity\Kid", inversedBy="Payment")
     */
    private $kid;

    /**
     * @ORM\ManyToOne(targetEntity="Common\AccessBundle\Entity\ParentOfKids", inversedBy="Payment")
     */
    private $ParentOfKids;

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=10)
     */
    private $month;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;


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
     * Set month
     *
     * @param string $month
     *
     * @return Payment
     */
    public function setMonth($month)
    {
        $this->month = $month;
    
        return $this;
    }

    /**
     * Get month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set parentOfKids
     *
     * @param \Common\AccessBundle\Entity\ParentOfKids $parentOfKids
     *
     * @return Payment
     */
    public function setParentOfKids(\Common\AccessBundle\Entity\ParentOfKids $parentOfKids = null)
    {
        $this->ParentOfKids = $parentOfKids;
    
        return $this;
    }

    /**
     * Get parentOfKids
     *
     * @return \Common\AccessBundle\Entity\ParentOfKids
     */
    public function getParentOfKids()
    {
        return $this->ParentOfKids;
    }

    /**
     * Set kid
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Kid $kid
     *
     * @return Payment
     */
    public function setKid(\BackEnd\KidsManagementBundle\Entity\Kid $kid = null)
    {
        $this->kid = $kid;
    
        return $this;
    }

    /**
     * Get kid
     *
     * @return \BackEnd\KidsManagementBundle\Entity\Kid
     */
    public function getKid()
    {
        return $this->kid;
    }
}
