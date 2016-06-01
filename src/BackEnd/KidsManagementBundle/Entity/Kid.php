<?php

namespace BackEnd\KidsManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kid
 *
 * @ORM\Table(name="kid")
 * @ORM\Entity(repositoryClass="BackEnd\KidsManagementBundle\Repository\KidRepository")
 */
class Kid
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
     * @ORM\Column(name="gender", type="string", length=10)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="age_year", type="integer")
     */
    private $ageYear;

    /**
     * @var int
     *
     * @ORM\Column(name="age_month", type="integer")
     */
    private $ageMonth;
    
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
     * @return Kid
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
     * @return Kid
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
     * Set ageYear
     *
     * @param integer $ageYear
     *
     * @return Kid
     */
    public function setAgeYear($ageYear)
    {
        $this->ageYear = $ageYear;
    
        return $this;
    }

    /**
     * Get ageYear
     *
     * @return integer
     */
    public function getAgeYear()
    {
        return $this->ageYear;
    }

    /**
     * Set ageMonth
     *
     * @param integer $ageMonth
     *
     * @return Kid
     */
    public function setAgeMonth($ageMonth)
    {
        $this->ageMonth = $ageMonth;
    
        return $this;
    }

    /**
     * Get ageMonth
     *
     * @return integer
     */
    public function getAgeMonth()
    {
        return $this->ageMonth;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Kid
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
}
