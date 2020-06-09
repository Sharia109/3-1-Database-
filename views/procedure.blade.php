<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<br><h1>Child family</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');

    $sql="CALL orphan";
    $records=mysqli_query($con,$sql);
 
 
     ?>
    <table class="table table-hover table-dark">
       <tr class="header">
         <th>child id</th>
         <th>child name</th>
         <th>fathers name</th>
         <th>mothers name</th>
 
       </tr>
      <?php
 
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_id']."</td>";
        echo "<td>".$ques['child_name']."</td>";
        echo "<td>".$ques['fathers_name']."</td>";
        echo "<td>".$ques['mothers_name']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>