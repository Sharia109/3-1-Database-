<!DOCTYPE html>
<html>
<head>
	<title> Show data</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<br><h1>Orphanage Data</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>branch_id</th>
         <th>branch_name</th>
         <th>contact</th>
         <th>address</th>
         <th>no_of_child</th>
       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM orphanage";
    $records=mysqli_query($con,$sql);
         
      while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['branch_id']."</td>";
        echo "<td>".$ques['branch_name']."</td>";
        echo "<td>".$ques['contact']."</td>";
        echo "<td>".$ques['address']."</td>";
        echo "<td>".$ques['no_of_child']."</td>";
        echo "</tr>";
      }
      ?>
     </table>
  </div>

<br><h1>Child Data</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>child_id</th>
         <th>child_name</th>
         <th>gender</th>
         <th>age</th>
         <th>contact</th>
         <th>date_of_birth</th>

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM child";
    $records=mysqli_query($con,$sql);
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


  <br><h1>Worker Details</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>worker_id</th>
         <th>worker_name</th>
         <th>address</th>
         <th>contact</th>
         <th>salary</th>
       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM worker";
    $records=mysqli_query($con,$sql);
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



  <br><h1>Child_background</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>Reg_no</th>
         <th>full_name</th>
         <th>fathers_name</th>
         <th>mothers_name</th>
         <th>present_guardian</th>
         <th>contact</th>
         <th>address</th>

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM child_background";
    $records=mysqli_query($con,$sql);
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


  <br><h1>Adoption Data</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>parent_id</th>
         <th>name</th>
         <th>job</th>
         <th>address</th>
         <th>date</th>
       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM adoption";
    $records=mysqli_query($con,$sql);
       while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['parent_id']."</td>";
        echo "<td>".$ques['name']."</td>";
        echo "<td>".$ques['job']."</td>";
        echo "<td>".$ques['address']."</td>";
        echo "<td>".$ques['date']."</td>";
        

        echo "</tr>";
      }
      ?>
     </table>
  </div>


  <br><h1>Fund info</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>fund_id</th>
         <th>fund_name</th>
         <th>money_amount</th>
        
       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM fund";
    $records=mysqli_query($con,$sql);
         while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['fund_id']."</td>";
        echo "<td>".$ques['name']."</td>";
        echo "<td>".$ques['amount']."</td>";
    
        

        echo "</tr>";
      } 
      ?>
     </table>
  </div>






<br><h1>Adopted Children</h1><br>
  <div class="table-responsive">
     <table class="table table-hover table-dark" id="myTable">
       <tr class="header">
         <th>child_id</th>
         <th>child_name</th>
         <th>gender</th>
         <th>age</th>
         <th>contact</th>
         <th>date_of_birth</th>
         <th>parent_id</th>

       </tr>
      <?php
        $con= mysqli_connect("localhost","root","","orphan");
       $sql="SELECT * FROM adopted";
    $records=mysqli_query($con,$sql);
        while($ques=mysqli_fetch_assoc($records))
      {
        echo "<tr>";
        echo "<td>".$ques['child_id']."</td>";
        echo "<td>".$ques['child_name']."</td>";
        echo "<td>".$ques['gender']."</td>";
        echo "<td>".$ques['age']."</td>";
        echo "<td>".$ques['contact']."</td>";
         echo "<td>".$ques['date_of_birth']."</td>";
         echo "<td>".$ques['parent_id']."</td>";
        echo "</tr>";
      }
      ?>
     </table>
  </div>



</body>
</html>