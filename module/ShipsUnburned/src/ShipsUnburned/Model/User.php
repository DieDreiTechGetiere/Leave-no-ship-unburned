<?php

namespace ShipsUnburned\Model;

use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilter;

/**
 * Entity for an object of the table tblUser
 */

class User implements UserInterface,
                      InputFilterAwareInterface  
{
    /**
     * Properties for the entities
     *
     * @var string 
     */
    protected $id;
    protected $loginName;
    protected $ingameName;
    protected $hashedPassword;
    protected $aktiv;
    protected $role;
    protected $timestamp;
    protected $inputFilter;
    
    /**
     * Function to fill the object with data from an array.
     * Property will be set to NULL if key is not available in the array.
     * 
     * @param array $array
     */
    public function exchangeArray($array)
    {
        $this->id               = (!empty($array['uID'])) ? $array['uID'] : null;
        $this->loginName        = (!empty($array['uLoginName'])) ? $array['uLoginName'] : null;
        $this->ingameName       = (!empty($array['uIngameName'])) ? $array['uIngameName'] : null;
        $this->hashedPassword   = (!empty($array['uPassword'])) ? $array['uPassword'] : null;
        $this->aktiv            = (!empty($array['uFreigeschaltet'])) ? $array['uFreigeschaltet'] : null;
        $this->role             = (!empty($array['uRole'])) ? $array['uRole'] : null;
        $this->timestamp        = (!empty($array['uTimestamp'])) ? $array['uTimestamp'] : null;
    }
    
    // Get and Set functions for the Properties
    
     /**
     * Filters for an entity
     * Examples: Cut out tags from strings,
     *           max and min length of string...
     * 
     * @return inputFilter
     */
    public function getInputFilter()
    {
        return $this->inputFilter;
    }
   
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        $this->inputFilter = $inputFilter;
    }
    
    public function getID()
    {
        return $this->id;
    }
    
    public function getLoginName()
    {
        return $this->loginName;
    }    
    
    public function getIngameName()
    {
        return $this->ingameName;
    }

    public function getHashedPassword()
    {
        return $this->hashedPassword;
    }

    public function getAktiv()
    {
        return $this->aktiv;
    }

    public function getRole()
    {
        return $this->role;
    }   
    
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    public function setID($id)
    {
        $this->id = $id;
    }
    
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
    }    
    
    public function setIngameName($ingameName)
    {
        $this->ingameName = $ingameName;
    }

    public function setHashedPassword($hashedPassword)
    {
        $this->hashedPassword = $hashedPassword;
    }

    public function setAktiv($aktiv)
    {
        $this->aktiv = $aktiv;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }      
    
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }   
}
