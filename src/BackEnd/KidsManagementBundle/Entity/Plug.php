<?php

namespace BackEnd\KidsManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plug
 *
 * @ORM\Table(name="plug")
 * @ORM\Entity(repositoryClass="BackEnd\KidsManagementBundle\Repository\PlugRepository")
 */
class Plug
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
     * @ORM\OneToOne(targetEntity="BackEnd\KidsManagementBundle\Entity\Kid", mappedBy="Plug")
     */
    private $Kid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="day", type="date", nullable=true)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="behavior", type="string", length=20, nullable=true)
     */
    private $behavior;

    /**
     * @var bool
     *
     * @ORM\Column(name="work", type="boolean", nullable=true)
     */
    private $work;


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
     * Set day
     *
     * @param \DateTime $day
     *
     * @return Plug
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set behavior
     *
     * @param string $behavior
     *
     * @return Plug
     */
    public function setBehavior($behavior)
    {
        $this->behavior = $behavior;
    
        return $this;
    }

    /**
     * Get behavior
     *
     * @return string
     */
    public function getBehavior()
    {
        return $this->behavior;
    }

    /**
     * Set work
     *
     * @param boolean $work
     *
     * @return Plug
     */
    public function setWork($work)
    {
        $this->work = $work;
    
        return $this;
    }

    /**
     * Get work
     *
     * @return boolean
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * Set kid
     *
     * @param \BackEnd\KidsManagementBundle\Entity\Kid $kid
     *
     * @return Plug
     */
    public function setKid(\BackEnd\KidsManagementBundle\Entity\Kid $kid = null)
    {
        $this->Kid = $kid;
    
        return $this;
    }

    /**
     * Get kid
     *
     * @return \BackEnd\KidsManagementBundle\Entity\Kid
     */
    public function getKid()
    {
        return $this->Kid;
    }
}
