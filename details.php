<?php
$id=$_GET['id'];
@$dbh1 = mysql_connect('localhost', 'root', ''); 
@$dbh2 = mysql_connect('localhost', 'root', '',true); 

@mysql_select_db('team17jp', $dbh1);
@mysql_select_db('team17jp', $dbh2);

$query="SELECT * from mentees where SID=$id";
$query_run = mysql_query($query);
@$row=(mysql_fetch_assoc($query_run));


  $name = $row['Name'];
  $Address = $row['Address'];
  $Age = $row['Age'];
  $pref = $row['Pref'];
  $city = $row['City'];
  $College=$row['College'];
   $Password = $row['Password'];
   $MID=$row['MID'];

   if($MID!=0)

{    $query1="SELECT * from mentors where ID=$MID";
      $query_run1 = mysql_query($query1);
      @$row1=(mysql_fetch_assoc($query_run1));
      $mentor=$row1['Name'];


  echo " 


  <div style='width: 350px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
border-top: 10px solid green;
min-height: 250px;
padding-: 10px;
font-size: 15pt;
margin: 10px;
'>
  
      Name of the student: $name<br />
      Address: $Address<br>
      Age: $Age<br>
      Field of interest: $pref<br >
     City: $city<br>
       College: $College<br>
       Mentor:$mentor<br>


    
    </div>
  
  


  
  ";

}

else
{
$query1="SELECT * from mentors where City=$city AND Mechanical=1";
      $query_run1 = mysql_query($query1);
      @$row1=(mysql_fetch_assoc($query_run1));
      $mentor=$row1['Name'];



echo"

  <div style='width: 350px;
border: 1px solid gray;
box-shadow: 1px 1px 3px #888;
border-top: 10px solid green;
min-height: 250px;
padding-: 10px;
font-size: 15pt;
margin: 10px;
'>
  
      Name of the student: $name<br />
      Address: $Address<br>
      Age: $Age<br>
      Field of interest: $pref<br >
     City: $city<br>
       College: $College<br>

Suggested Mentor:$mentor<br>

    
    </div>
  

";


}
?>

