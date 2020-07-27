<?php
@$dbh1 = mysqli_connect('localhost', 'root', '',"team17"); 
//@$dbh2 = mysqli_connect('localhost', 'root', '',true); 
mysqli_select_db($dbh1,"team17");
//mysqli_select_db($dbh2,"team17");

include 'menteregister.html';

@$Name=$_POST['mname'];
@$Age=$_POST['mage'];
@$pref=$_POST['pref'];
@$City=$_POST['mcity'];
@$College=$_POST['mcollege'];
@$Address=$_POST['address'];
@$Password=$_POST['password'];
@$Username=$_POST['musername'];

if(isset($Username)&&isset($Password)){
	if(!empty($Username)&&!empty($Password)){
		

    
		$query="INSERT INTO mentees values('','$Name','$Address','$Age','$pref','$City','$College','$Password','$Username')";
		
	$query_run=mysqli_query($dbh1,"$query");
		echo $query;
	}
			
			
			
		
		
	
	
}

?>