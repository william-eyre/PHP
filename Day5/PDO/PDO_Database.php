<?php

include('DB_constant.php');
include('user.php');
include('game.php');

class PDO_Database
{
    //global access
    public $db;

    public function __construct()
    {

        try
        {
            $options = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            );

            $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" .
            DB_DATABASE, DB_USER, DB_PASSWORD, $options);
        }
        catch(PDOException $e)
        {
            print "Error[BOOM]: " . $e->getMessage();
            die();
        }

    }

    function queryByNameAndPassword($username,$password)
    {
        $query = $this->db->prepare("SELECT * FROM user WHERE username=? AND password=?");
        $query->bindParam(1,$username);
        $query->bindParam(2,$password);
        $query->execute();

        return $query->fetchObject('user');
    }

    function queryAllUser()
    {
       return $this->db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_CLASS, 'user');
    }

    function queryById($id)
    {
        $query = $this->db->prepare("SELECT * FROM user where id=?");
        $query->execute([$id]);
        return $query->fetchObject('user');
    }

    function deleteById($id)
    {
        $query = $this->db->prepare("DELETE * FROM user where id=?");
        $query->execute([$id]);
        if($this->queryById($id))
            return true;
        else
            return false;
    }

    function queryByIdOfGame($id)
    {
        $query = $this->db->prepare("SELECT * FROM game where id=?");
        $query->execute([$id]);
        return $query->fetchObject('game');
    }

    function queryAllGame()
    {
        return $this->db->query("SELECT * FROM game")->fetchAll(PDO::FETCH_CLASS, 'game');
    }


    function InsertIntoUser($first_name, $last_name, $username, $password)
    {
        $query = $this->db->prepare("INSERT INTO user (first_name, last_name, username, password)
                                     VALUES (?, ?, ?, ?)");
        $query->bindParam(1,$first_name);
        $query->bindParam(2,$last_name);
        $query->bindParam(3,$username);
        $query->bindParam(4,$password);
        return $query->execute();


    }

    function editUser($id, $first_name, $last_name, $username, $password)
    {
        $query = $this->db->prepare("UPDATE user SET first_name=?, last_name=?, username=?, password=? WHERE id=?");
        $query->bindParam(1,$first_name);
        $query->bindParam(2,$last_name);
        $query->bindParam(3,$username);
        $query->bindParam(4,$password);
        $query->bindParam(5,$id);
        return $query->execute();


    }
}