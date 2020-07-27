<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 8:31 PM
 */

class MentorSuggestions {

    private $databaseHandler = null;


    function __construct()
    {
        $this->databaseHandler = Database::connect();
    }

    public function GetMentorsByFilters($skill,$city)
    {
        $user = array();
        $sth = $this->databaseHandler->query("
            SELECT * FROM mentors where
            $skill = 1
            AND
            city = '$city'
            ");
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



}