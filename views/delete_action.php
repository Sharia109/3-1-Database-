<?php


//header('location:index.php');
if(isset($_POST['submit']))

{$con = mysqli_connect("localhost","root","");

mysqli_select_db($con,"orphan");


	$fn = $_POST['branch_name']; 
	$reg= "DELETE FROM child WHERE child_id='$fn'";
	$s=mysqli_query($con,$reg);
    if($s){echo "<h1>orphanage record deleted successfully!!!</h1><br>" ;}
    else echo "<h1>Unable to delete / No such record found </h1>";

}

?>