<?php

$db=mysqli_connect("localhost","root","","orphan");


if(!$db)

{
	die("Connection Failed: ".  mysqli_connect_error());
}



?>