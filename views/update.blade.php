<!DOCTYPE html>
<html lang="en">

<head>
<style>
        <?php include 'homepage2.css' ?>
        <?php include 'homepage.css' ?>
        input.MyButton {
           
width: 300px;
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;
-moz-box-shadow:: 6px 6px 5px #999;
-webkit-box-shadow:: 6px 6px 5px #999;
box-shadow:: 6px 6px 5px #999;
}
input.MyButton:hover {
color: #ffff00;
background: #000;
border: 1px solid #fff;
}

    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Orphanage update</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>


  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">What would you like to update?<br/></h2>
          <br/>
          <input class="MyButton" type="button" value="Orphanage data" onclick="window.location.href='later.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Child data" onclick="window.location.href='later.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Child_background data" onclick="window.location.href='later.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Worker data" onclick="window.location.href='later.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Adoption data" onclick="window.location.href='later.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Fund data" onclick="window.location.href='update_orphanage.blade.php'" />
        </div>
      </div>
      
    
    </div>
  </section>