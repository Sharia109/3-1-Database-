<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `child_background` VALUES ('$_POST[reg_no]','$_POST[full_name]','$_POST[fathers_name]','$_POST[mothers_name]','$_POST[present_guardian]','$_POST[contact]','$_POST[address]','$_POST[child_id]') ;");

}
  

?>