<?php

namespace Webworks\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemModule
 */
class SystemModule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $menuItemText;


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
     * @return SystemModule
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
     * Set description
     *
     * @param string $description
     * @return SystemModule
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return SystemModule
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set menuItemText
     *
     * @param string $menuItemText
     * @return SystemModule
     */
    public function setMenuItemText($menuItemText)
    {
        $this->menuItemText = $menuItemText;

        return $this;
    }

    /**
     * Get menuItemText
     *
     * @return string 
     */
    public function getMenuItemText()
    {
        return $this->menuItemText;
    }
    /**
     * @var boolean
     */
    private $required;


    /**
     * Set required
     *
     * @param boolean $required
     * @return SystemModule
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean 
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * @var string
     */
    private $developerName;

    /**
     * @var string
     */
    private $developerUrl;


    /**
     * Set developerName
     *
     * @param string $developerName
     * @return SystemModule
     */
    public function setDeveloperName($developerName)
    {
        $this->developerName = $developerName;

        return $this;
    }

    /**
     * Get developerName
     *
     * @return string 
     */
    public function getDeveloperName()
    {
        return $this->developerName;
    }

    /**
     * Set developerUrl
     *
     * @param string $developerUrl
     * @return SystemModule
     */
    public function setDeveloperUrl($developerUrl)
    {
        $this->developerUrl = $developerUrl;

        return $this;
    }

    /**
     * Get developerUrl
     *
     * @return string 
     */
    public function getDeveloperUrl()
    {
        return $this->developerUrl;
    }
}
