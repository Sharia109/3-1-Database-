<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1>Worker INFORMATION </h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');
    $sql="SELECT * FROM worker";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>worker_id</th>
         <th>worker_name</th>
         <th>address</th>
         <th>contact</th>
         <th>salary</th>
             
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['worker_id']."</td>";
        echo "<td>".$ques['worker_name']."</td>";
        echo "<td>".$ques['address']."</td>";
        echo "<td>".$ques['contact']."</td>";
        echo "<td>".$ques['salary']."</td>";
        

        echo "</tr>";
      }  
      ?>
     </table>
  </div>