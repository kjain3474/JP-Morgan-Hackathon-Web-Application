<?php
/**
 * Created by PhpStorm.
 * User: tuxer
 * Date: 7/23/2016
 * Time: 6:23 PM
 */

$dbh = mysqli_connect('localhost', 'root', '','team17');
$name = $_POST['name'];
$username = $_POST['username'];
$password= $_POST['password'];
$job = $_POST['job'];
$job_experience = $_POST['job_experience'];


    if(isset($username)&&isset($password)){

        $query = "INSERT INTO  mentors  values ('$name','$username','$password','$job','$job_experiance','$gender',0,0,0,0,0,0,0,0,0,0,'$email','$contact')";
        $regMentor = mysqli_query($dbh,$query);

        if(!$regMentor){

        echo "success";

        }
        else {
        print mysql_error();

        }

    }




    ?>