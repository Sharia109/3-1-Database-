<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<br><h1>Total number of child</h1><br>
  <div class="table-responsive">
    <?php
   $con= mysqli_connect("localhost","root","");
    mysqli_select_db($con,"orphan");
    $sql="SELECT branch_name, no_of_child FROM orphanage  group by branch_name";
    $records=mysqli_query($con,$sql);


     ?>
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>branch_name</th>
         <th>no_of_child</th>
       </tr>
      <?php

      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['branch_name']."</td>";
        echo "<td>".$ques['no_of_child']."</td>";
        echo "</tr>";
      }  

      ?>
     </table>
      <br/><br/>
    <?php
    
           

                $sql="SELECT SUM(no_of_child) FROM orphanage";
                $records=mysqli_query($con,$sql);

                $row = mysqli_fetch_array($records);
                echo "<h2> Total no of child: ".$row['SUM(no_of_child)']."<h2>";
            
    

    ?>
  </div>