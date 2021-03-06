<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $forename;

    /**
     * @var string
     */
    

    /**
     * @var string
     */
    private $sex;

    /**
     * @var \DateTime
     */
    private $born;

    /**
     * @var string
     */
    private $woj;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $kategoria;

    /**
     * @var boolean
     */
    private $rule;


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
     * @return User
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
     * Set forename
     *
     * @param string forename
     * @return User
     */
    public function setForename($forename)
    {
        $this->forename = $forename;

        return $this;
    }

    /**
     * Get forename
     *
     * @return string 
     */
    public function getForename()
    {
        return $this->forename;
    }

    

    

    /**
     * Set sex
     *
     * @param string $sex
     * @return User
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set born
     *
     * @param \DateTime $born
     * @return User
     */
    public function setBorn($born)
    {
        $this->born = $born;

        return $this;
    }

    /**
     * Get born
     *
     * @return \DateTime 
     */
    public function getBorn()
    {
        return $this->born;
    }

    /**
     * Set woj
     *
     * @param string $woj
     * @return User
     */
    public function setWoj($woj)
    {
        $this->woj = $woj;

        return $this;
    }

    /**
     * Get woj
     *
     * @return string 
     */
    public function getWoj()
    {
        return $this->woj;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set kategoria
     *
     * @param string $kategoria
     * @return User
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get kategoria
     *
     * @return string 
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set rule
     *
     * @param boolean $rule
     * @return User
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get rule
     *
     * @return boolean 
     */
    public function getRule()
    {
        return $this->rule;
    }
    
   
}
