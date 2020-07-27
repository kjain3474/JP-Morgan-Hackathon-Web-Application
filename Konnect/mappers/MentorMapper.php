<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 3:24 PM
 */

//require_once '../functions/Database.class.php';


class Mentormapper{

    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function Login($username,$password)
    {
        $user = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentors where username = '$username' AND password='$password' ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($user, $ob);
            }
            return $user;
        } else {
            return FALSE;
        }
    }

    public function getAllplaces()
    {
        $allPlaces = array();
        $sth = $this->databaseHandler->query("SELECT * FROM place");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($allPlaces, $ob);
            }
            return $allPlaces;
        } else {
            return FALSE;
        }
    }
}