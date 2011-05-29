<?php

/**
 * Description of my_auth
 *
 * @author henry
 */
class MyAuth {
    
    protected $adapter;

    public function check() {
        Auth2::setDefault('propel');
        $this->adapter = Auth2::factory();        
        $this->adapter->setAlgos('md5');
        $this->adapter->setKey('jF8D13KIdXs7LA00');
        $this->adapter->setModel('UserQuery');
        $this->adapter->setLogin('username');
        $this->adapter->setPass('password');
        
        return $this->adapter->identify2();
    }
    
    public function getError() {
        return $this->adapter->getError();
    }
    
    public function logout() {
        return $this->adapter->logout();
    }

}