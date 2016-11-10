<?php

class user
{
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $password;

    public function __construct(){}

    public function __get($var)
    {
        if($var)
        {
            switch($var)
            {
                case 'id':
                    return $this->id;
                    break;
                case 'first_name':
                    return $this->first_name;
                    break;
                case 'last_name':
                    return $this->last_name;
                    break;
                case 'username':
                    return $this->username;
                    break;
                case 'password':
                    return $this->password;
                    break;
            }
        }
        return null;
    }

    public function setFirstName($fn)
    {
        $this->first_name = $fn;
    }
    public function setLastName($ln)
    {
        $this->last_name = $ln;
    }
    public function setUsername($u)
    {
        $this->username = $u;
    }
    public function setPassword($pwd)
    {
        $this->password = $pwd;
    }

}