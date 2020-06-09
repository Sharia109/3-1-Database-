<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1>ORPHANAGE INFORMATION </h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');
    $sql="SELECT * FROM child";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>child_id.</th>
         <th>child_name</th>
         <th>gender</th>
         <th>age</th>
         <th>contact</th>
           <th>date_of_birth</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_id']."</td>";
        echo "<td>".$ques['child_name']."</td>";
        echo "<td>".$ques['gender']."</td>";
        echo "<td>".$ques['age']."</td>";
        echo "<td>".$ques['contact']."</td>";
         echo "<td>".$ques['date_of_birth']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>