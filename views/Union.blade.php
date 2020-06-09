<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>Child </h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');
    $sql="SELECT child_name
    FROM child
    UNION ALL
    (
    SELECT child_name
    FROM adopted 
    ) ;";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Orphan children and adopted children list</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_name']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
    
  </div>