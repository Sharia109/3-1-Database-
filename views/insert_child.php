<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `child` VALUES ('$_POST[child_id]','$_POST[child_name]','$_POST[gender]','$_POST[age]','$_POST[contact]','$_POST[date_of_birth]','$_POST[branch_id]','$_POST[parent_id]') ;");

}
  

?>