<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<br><h1>Child details information</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect("localhost","root","");
    mysqli_select_db($con,"orphan");

    $sql="SELECT child.child_id,child.child_name,child_background.reg_no,child_background.fathers_name,child_background.mothers_name,child_background.present_guardian,child_background.address FROM child JOIN child_background ON child.child_id=child_background.reg_no";
    $records=mysqli_query($con,$sql);
 
 
     ?>
     <table class="table table-hover table-dark">
       <tr class="header">
         <th>child id</th>
         <th>child name</th>
         <th>Present_guardian</th>
         <th>Guardian's address</th>
 
       </tr>
      <?php
 
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_id']."</td>";
        echo "<td>".$ques['child_name']."</td>";
        echo "<td>".$ques['present_guardian']."</td>";
        echo "<td>".$ques['address']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
  </div>