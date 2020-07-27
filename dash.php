<html>
<head>
	<title></title>
</head>
<body>

	<div style='width: 650px;
border: 5px solid gray;
box-shadow: 5px 5px 3px #888;
border-top: 10px solid gray;
    position: relative;
    left: 450px;
	top: 50px;
min-height: 15px;
padding-: 30px;
font-size: 45px;
'>
<center>Students</center> 

</div>
<br><br><br>


<?php
if(!mysql_connect('localhost','root','')||!mysql_select_db('team17jp')){
   die('Could not connect to the database');
}
	$query="Select * from mentees ";
	
	$comments= mysql_query($query);
	while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
	{
		$id= $row['SID'];
	  $name = $row['Name'];
	  $Age = $row['Age'];
	  $City = $row['City'];
	  $College = $row['College'];





 echo " 
<br>
 <div style='width: 1000px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
background-color:lightgrey;
border-top: 10px solid grey;
border-left: 10px solid grey;
min-height: 200px;
margin-left:100px;
font-weight:900;
padding-: 10px;
font-size: 15pt;

'>
     
 Name: $name<br>
     Age: $Age<br>
      City: $City<br>
      College: $College
    <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='details.php?id=$id' <button id='$id' value='$id'>VIEW</button></a>     
    </div>
  ";

	}

		
		
	
	




?>


</body>
</html>