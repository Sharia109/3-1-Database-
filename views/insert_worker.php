<?php


  if(isset($_POST['submit']))
 {

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}


mysqli_query($db,"INSERT INTO `worker` VALUES ('$_POST[worker_id]','$_POST[worker_name]','$_POST[address]','$_POST[contact]','$_POST[salary]','$_POST[branch_id]') ;");

}
  

?>