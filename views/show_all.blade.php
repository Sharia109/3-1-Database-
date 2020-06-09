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

  <title>Orphanage</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>


  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Choose what you want to see<br/></h2>
          <br/>
          <input class="MyButton" type="button" value="All data" onclick="window.location.href='show.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Single data" onclick="window.location.href='showsingletable.blader.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Child present guardian" onclick="window.location.href='join1.blade.php'" />
           <br/><br/>
          <input class="MyButton" type="button" value="Estimation" onclick="window.location.href='aggregate.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Child full bio" onclick="window.location.href='subquery.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Orphan and adopted children list" onclick="window.location.href='union.blade.php'" />
               <br/><br/>
          <input class="MyButton" type="button" value="Child family background" onclick="window.location.href='procedure.blade.php'" />
          <br/><br/>
          <input class="MyButton" type="button" value="Child's age" onclick="window.location.href='function.blade.php'" />
          

        </div>
      </div>
      
    
    </div>
  </section>