<?php

namespace ShipsUnburned\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
/**
 * Controller for all actions regarding the userhandling
 */
class UserController extends AbstractRestfulController 
{
    protected $userTable;
    
    public function __construct(UserTable $userTable)
    {
        $this->userTable = $userTable;
    }    
    /**
     * create function for user who try to login
     * @return JsonModel
     */
    public function createLogin()
    {
        $request = $this->getRequest();
        
        if ($request->isPost())
        {
            $data = Zend_Json::decode($request->getPost());
            
            if ($data != null)
            {
                $result = $this->userTable->verifyLoginByLoginNameAndPassword($data["loginName"], $data["password"]);
            }
        }
        return new JsonModel($result);
    }    
    
    public function createRegister()
    {
        $request = $this->getRequest();
        
        if ($request->isPost())
        {
            $data = Zend_Json::decode($request->getPost());
            
            if ($data != null)
            {
                $result = $this->userTable->registerUserByLoginName($data);
            }
        }
        return new JsonModel($result);
        }
    }
}
