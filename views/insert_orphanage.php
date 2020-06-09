<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `orphanage` VALUES ('$_POST[branch_id]','$_POST[branch_name]','$_POST[contact]','$_POST[address]','$_POST[no_of_child]') ;");

}
  

?>