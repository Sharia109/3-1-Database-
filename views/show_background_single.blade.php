<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<br><h1>Child_background INFORMATION </h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');
    $sql="SELECT * FROM child_background";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>reg_no</th>
         <th>full_name</th>
         <th>fathers_name</th>
         <th>mothers_name</th>
         <th>present_guardian</th>
               <th>contact</th>
           <th>address</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['reg_no']."</td>";
        echo "<td>".$ques['full_name']."</td>";
        echo "<td>".$ques['fathers_name']."</td>";
        echo "<td>".$ques['mothers_name']."</td>";
        echo "<td>".$ques['present_guardian']."</td>";
         echo "<td>".$ques['contact']."</td>";
         echo "<td>".$ques['address']."</td>";

        echo "</tr>";
      }  
      ?>
     </table>
  </div>