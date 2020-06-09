<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>Counting branches</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect("localhost","root","");
    mysqli_select_db($con,"orphan");
    $sql="SELECT branch_id,branch_name,no_of_child  FROM orphanage order by branch_id asc";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>branch_id</th>
         <th>branch_name</th>
         <th>no_of_child</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['branch_id']."</td>";
        echo "<td>".$ques['branch_name']."</td>";
        echo "<td>".$ques['no_of_child']."</td>";
        echo "</tr>";
      }  
      ?>
     </table>
     <br/><br/>
    <?php
    
           

                $sql="SELECT COUNT(branch_name) FROM orphanage order by branch_id asc";
                $records=mysqli_query($con,$sql);

                $row = mysqli_fetch_array($records);
                echo "<h2> Total number of branches in the orphanage : ".$row['COUNT(branch_name)']."<h2>";
            
    

    ?>
  </div>