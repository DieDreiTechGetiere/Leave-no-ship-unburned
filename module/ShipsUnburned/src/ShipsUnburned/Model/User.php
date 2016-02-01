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
    protected $password;
    protected $aktiv;
    protected $role;
    protected $inputFilter;
    
    /**
     * Function to fill the object with data from an array.
     * Property will be set to NULL if key is not available in the array.
     * 
     * @param array $array
     */
    public function exchangeArray($array)
    {
        $this->id           = (!empty($array['id'])) ? $array['id'] : null;
        $this->loginName        = (!empty($array['loginName'])) ? $array['loginName'] : null;
        $this->ingameName         = (!empty($array['ingameName'])) ? $array['ingameName'] : null;
        $this->password        = (!empty($array['password'])) ? $array['password'] : null;
        $this->aktiv         = (!empty($array['aktiv'])) ? $array['aktiv'] : null;
        $this->role   = (!empty($array['role'])) ? $array['role'] : null;
    }
    
     /**
     * Filters for an entity
     * Examples: Cut out tags from strings,
     *           max and min length of string...
     * 
     * @return inputFilter
     */
    
    //TODO: Umsetzen. Wirft nur Exception momentan
    public function getInputFilter()
    {
        throw new \Exception("Not in used");
    }
    
    /**
     * 
     * @param InputFilterInterface $inputFilter
     * @throws \Exception
     */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not in used");
    }
    
    // Get and Set functions for the Properties
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

    public function getPassword()
    {
        return $this->password;
    }

    public function getAktiv()
    {
        return $this->aktiv;
    }

    public function getRole()
    {
        return $this->role;
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

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setAktiv($aktiv)
    {
        $this->aktiv = $aktiv;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }        
}
