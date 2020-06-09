


<!DOCTYPE html>
<html>
<head>
	<title>Data Insertion</title>
	<link rel="stylesheet" type="text/css" href="ss.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>

<header>
	

	
	<nav>
		<ul>
		 <li><a href="index.blade.php">HOME</a></li>
		 <li><a href="insert.blade.php">Insert_data</a></li>
			<li><a href="delete.blade.php">Delete_data</a></li>
			<li><a href="update.blade.php">Update_data</a></li>
			<li><a href="show_all.blade.php">Show_data</a></li>

		</ul>
	</nav>

</header>

<section>
	<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Orphanage table</h1>
    <form name="Registration" action="insert_orphanage.php" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="branch_id" placeholder="branch_id" required=""> <br>
    		<input class="form-control" type="text" name="branch_name" placeholder="branch_name" required=""> <br>
    	    <input class="form-control" type="text" name="contact" placeholder="contact" required=""> <br>
    	    <input class="form-control" type="text" name="address" placeholder="address" required=""><br>
    	    <input class="form-control" type="text" name="no_of_child" placeholder="no_of_child" required=""> <br>
    	   
    		<input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>

<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Child table</h1>
    <form name="Registration" action="insert_child.php" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="child_id" placeholder="child_id" required=""> <br>
    		<input class="form-control" type="text" name="child_name" placeholder="child_name" required=""> <br>
    	    <input class="form-control" type="text" name="gender" placeholder="gender" required=""> <br>
    	    <input class="form-control" type="text" name="age" placeholder="age" required=""><br>
    	    <input class="form-control" type="text" name="contact" placeholder="contact" required=""> <br>
    	    <input class="form-control" type="text" name="date_of_birth" placeholder="date_of_birth" required=""><br>
             <input class="form-control" type="text" name="branch_id" placeholder="branch_id" required=""> <br>
              <input class="form-control" type="text" name="parent_id" placeholder="parent_id" required=""> <br>
    		<input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>
	<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Worker</h1>
    <form name="Registration" action="insert_worker.php" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="worker_id" placeholder="worker_id" required=""> <br>
    		<input class="form-control" type="text" name="worker_name" placeholder="worker_name" required=""> <br>
    	    <input class="form-control" type="text" name="address" placeholder="address" required=""> <br>
    	    <input class="form-control" type="text" name="contact" placeholder="contact" required=""><br>
    	    <input class="form-control" type="text" name="salary" placeholder="salary" required=""><br>
              <input class="form-control" type="text" name="branch_id" placeholder="branch_id" required=""><br>
    		<input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>


        <div class="reg_img">
<div class="box2">
    <h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Child_background</h1>
    <form name="Registration" action="child_background.php" method="post">
        <div class="login">
            <input class="form-control" type="text" name="reg_no" placeholder="reg_no" required=""> <br>
            <input class="form-control" type="text" name="full_name" placeholder="full_name" required=""> <br>
            <input class="form-control" type="text" name="fathers_name" placeholder="fathers_name" required=""> <br>
            <input class="form-control" type="text" name="mothers_name" placeholder="mothers_name" required=""><br>
             <input class="form-control" type="text" name="present_guardian" placeholder="present_guardian" required=""><br>
              <input class="form-control" type="text" name="contact" placeholder="contact" required=""><br>
            <input class="form-control" type="text" name="address" placeholder="address" required=""><br>
            <input class="form-control" type="text" name="child_id" placeholder="child_id" required=""><br>
            <input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
        
    </div>
    </form>

</div>
        
    </div>



	<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Adoption table</h1>
    <form name="Registration" action="insert_adoption.php" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="parent_id" placeholder="parent_id" required=""> <br>
    		<input class="form-control" type="text" name="name" placeholder="name" required=""> <br>
    	    <input class="form-control" type="text" name="job" placeholder="job" required=""> <br>
    	    <input class="form-control" type="text" name="address" placeholder="address" required=""><br>
    	    <input class="form-control" type="text" name="date" placeholder="date" required=""><br>
    		<input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>



	<div class="reg_img">
<div class="box2">
	<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">Fund table</h1>
    <form name="Registration" action="fund.php" method="post">
    	<div class="login">
    		<input class="form-control" type="text" name="fund_id" placeholder="fund_id" required=""> <br>
    		<input class="form-control" type="text" name="name" placeholder="name" required=""> <br>
    	    <input class="form-control" type="text" name="amount" placeholder="amount" required=""> <br>

    		<input class="btn btn-default" type="submit" name="submit" value="ADD" style="color:black; width: 90px; height: 30px; background-color: brown">
    	
    </div>
    </form>

</div>
		
	</div>




</section>




</body>
</html>