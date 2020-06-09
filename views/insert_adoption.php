<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `adoption` VALUES ('$_POST[parent_id]','$_POST[name]','$_POST[job]','$_POST[address]','$_POST[date]') ;");

}
  

?>