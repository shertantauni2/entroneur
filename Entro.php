<?php 
 
$con = mysqli_connect('localhost', 'root', '','entroneur'); 
  
$Name = $_POST['Name']; 
$Email = $_POST['Email']; 
$Number = $_POST['Number']; 
$newsletter = $_POST['newsletter']; 

  
$sql = "INSERT INTO orders_list (Name, Email, Number, newsletter) VALUES ('$Name', '$Email', '$Number', '$newsletter')"; 
 
$rs = mysqli_query($con, $sql); 
 
if($rs) 
{ 
 echo "Thank You For Reaching Out!"; 
} 
 
?>