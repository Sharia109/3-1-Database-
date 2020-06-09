<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `fund` VALUES ('$_POST[fund_id]','$_POST[name]','$_POST[amount]') ;");

}
  

?>