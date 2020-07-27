<?php
@$dbh1 = mysqli_connect('localhost', 'root', '',"team17"); 
//@$dbh2 = mysqli_connect('localhost', 'root', '',true); 
mysqli_select_db($dbh1,"team17");
//mysqli_select_db($dbh2,"team17");
include 'MentorRegister.html';
@$username=$_POST['username'];
@$city=$_POST['city'];
@$job=$_POST['job'];
@$address = $_POST['address'];
@$password=$_POST['password'];
@$Technology=$_POST['ct'];
@$Civil=$_POST['civil'];
@$Mechanical=$_POST['mech'];
@$Electronics=$_POST['elec'];
@$Electrical=$_POST['tele'];
@$Finance=$_POST['fin'];
@$English=$_POST['vocab'];
@$Moral=$_POST['moral'];
@$Contact=$_POST['contact'];
@$Experiance=$_POST['exp'];
@$guidance=$_POST['guid'];

@$gender=$_POST['optradio'];

@$Name=$_POST['name'];
if(isset($username)&&isset($password)){
	if(!empty($username)&&!empty($password)){


		$query="INSERT INTO mentors values('','$job','$gender','$address','$city','$Technology','$Civil','$Mechanical','$Electronics','$Electrical','$Finance','$English','$Moral','$Contact','$Experiance','$password','$username','$Name','0')";
		
	$query_run=mysqli_query($dbh1,"$query");
	
	}
			
			
			
		
		
	
	
}

?>