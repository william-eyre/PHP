<?php

include('DB_constant.php');
include('admin.php');

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
        $query = $this->db->prepare("SELECT * FROM admin WHERE username=? AND password=?");
        $query->bindParam(1,$username);
        $query->bindParam(2,$password);
        $query->execute();

        return $query->fetchObject('admin');
    }

    function queryAllAdmin()
    {
       return $this->db->query("SELECT * FROM admin")->fetchAll(PDO::FETCH_CLASS, 'admin');
    }

    function queryById($id)
    {
        $query = $this->db->prepare("SELECT * FROM admin where id=?");
        $query->execute([$id]);
        return $query->fetchObject('admin');
    }

    function deleteById($id)
    {
        $query = $this->db->prepare("DELETE * FROM admin where id=?");
        $query->execute([$id]);
        if($this->queryById($id))
            return true;
        else
            return false;
    }

    function InsertIntoAdmin($first_name, $last_name, $username,$password)
    {
        $query = $this->db->prepare("INSERT INTO admin (first_name,last_name,username,password)
                                     VALUES (?,?,?,?)");
        $query->bindParam(1,$first_name);
        $query->bindParam(2,$last_name);
        $query->bindParam(3,$username);
        $query->bindParam(4,$password);
        return $query->execute();


    }

    function editAdmin($id, $first_name, $last_name, $username,$password)
    {
        $query = $this->db->prepare("UPDATE admin SET (first_name=?,last_name=?,username=?,password=? WHERE id=?");
        $query->bindParam(1,$first_name);
        $query->bindParam(2,$last_name);
        $query->bindParam(3,$username);
        $query->bindParam(4,$password);
        $query->bindParam(5,$id);
        return $query->execute();


    }
}