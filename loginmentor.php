<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 4:49 PM
 */
require_once 'Konnect/functions/Database.class.php';
require_once 'Konnect/mappers/MentorMapper.php';
require_once 'Konnect/mappers/MenteeMapper.php';



$mentorMapper = new Mentormapper();
$menteeMapper = new MenteeMapper();


    $username = $_POST['username'];
    $password= $_POST['password'];

    if(isset($username)&&isset($password)){

        $result = $mentorMapper->Login($username,$password);

        if($result){
            echo "success for mentor";

            session_start();
            $_SESSION['user'] = $result;
            $_SESSION['logged_in'] = true;
        }
        else {
            $resultMentee = $menteeMapper->Login($username,$password);

            if($resultMentee){
                echo "success for mentee";

                session_start();
                $_SESSION['user'] = $resultMentee;
                $_SESSION['logged_in'] = true;
            }
            else {
                echo "no user found";
            }
        }

    }




    ?>