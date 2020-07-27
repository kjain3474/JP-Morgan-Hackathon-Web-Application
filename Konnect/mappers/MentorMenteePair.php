<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 8:11 PM
 */

class MentorMenteePair {

    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function GetMentorByMenteeId($menteeId)
    {
        $user = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentors where ID =  (SELECT mentor_id from mentor_mentee where mentee_id = $menteeId) ");
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

    public function GetMenteeByMenterId($mentorId)
    {
        $users = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentees where ID =  (SELECT mentee_id from mentor_mentee where mentor_id = $mentorId) ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($users, $ob);
            }
            return $users;
        } else {
            return FALSE;
        }
    }

    public function getPairDetails($pairId)
    {
        $users = array();
        $sth = $this->databaseHandler->query("SELECT * FROM mentees where pair_id = $pairId ");
        $sth->setFetchMode(PDO::FETCH_BOTH);
        if ($sth->rowCount() > 0) {
            while ($ob = $sth->fetch()) {
                array_push($users, $ob);
            }
            return $users;
        } else {
            return FALSE;
        }
    }
}