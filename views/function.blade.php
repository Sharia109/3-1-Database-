<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<br><h1>Calculated age</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect('localhost','root','');
    mysqli_select_db($con,'orphan');

    $sql="SELECT child_id,child_name,age(date_of_birth) as age2 from child";
    $records=mysqli_query($con,$sql);
 
 
     ?>
     <table class="table table-hover table-dark">
       <tr class="header">
         <th>child_id.</th>
         <th>child_name</th>
         <th>age</th>
      
 
       </tr>
      <?php
 
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_id']."</td>";
        echo "<td>".$ques['child_name']."</td>";
        echo "<td>".$ques['age2']."</td>";
       
        echo "</tr>";
      }  
      ?>
     </table>
  </div>