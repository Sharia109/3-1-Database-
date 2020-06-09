<?php

if(isset($_GET['sub']))
{
    $con=mysqli_connect("localhost","root","") ;

    mysqli_select_db($con,"orphan")  ;
        # code...
    $t=$_GET['fund_id'];
    $m=$_GET['name'];
    $n=$_GET['amount'];
    
    echo $t;
    
    $s="UPDATE fund SET amount='$n' WHERE name='$m' AND fund_id='$t'";
    $CC=mysqli_query($con,$s);
    if($CC){echo "<h1>Fund record updated successfully!!!</h1><br>" ;}
    else echo "<h1>Unable to update / No such record found </h1>";

}




?>