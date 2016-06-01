<?php

namespace BackEnd\KidsManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Custody
 *
 * @ORM\Table(name="custody")
 * @ORM\Entity(repositoryClass="BackEnd\KidsManagementBundle\Repository\CustodyRepository")
 */
class Custody
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_entry", type="datetime", nullable=true)
     */
    private $dateEntry;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_release", type="datetime", nullable=true)
     */
    private $dateRelease;


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
     * Set dateEntry
     *
     * @param \DateTime $dateEntry
     *
     * @return Custody
     */
    public function setDateEntry($dateEntry)
    {
        $this->dateEntry = $dateEntry;
    
        return $this;
    }

    /**
     * Get dateEntry
     *
     * @return \DateTime
     */
    public function getDateEntry()
    {
        return $this->dateEntry;
    }

    /**
     * Set dateRelease
     *
     * @param \DateTime $dateRelease
     *
     * @return Custody
     */
    public function setDateRelease($dateRelease)
    {
        $this->dateRelease = $dateRelease;
    
        return $this;
    }

    /**
     * Get dateRelease
     *
     * @return \DateTime
     */
    public function getDateRelease()
    {
        return $this->dateRelease;
    }
}
