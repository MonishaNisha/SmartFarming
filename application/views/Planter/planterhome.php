<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Planter</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/adstyle.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/sstyle.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/shdiv.css">
</head>
<body>
<!-- partial:index.partial.html -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#" style="font-size: 30px">Smart Farming</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>RegisterPlanter/phome">Home</a></li>
          <li><a href="<?php echo base_url();?>Planter/pro">Profile</a></li>
          <li><a href="#">Lands</a></li>
          <li><a href="#">Suggestion</a></li>
          <li><a href="#">IOT Support</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php echo '<b>'.$this->session->userdata('emailid').'</b>'?></a></li>
          <li><a href=" <?php echo base_url();?>RegisterPlanter/logout">Log out</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!--header-->
  <div class="page-header">
    <div class="container">
      <div class="row cartbtnalgn" >
        <div class="col-md-10" >
          <h2><span class="glyphicon glyphicon-cog" id="gear"></span> Planter   
            <!-- <div class="col-md-7">  
            </div> -->
            <!-- <div class="col-md-5">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button>
        </div> -->
          </h2>
        </div>
        <div class="col-md-2" style="float: right;">

          <!-- <h2><span class="glyphicon glyphicon-cog" id="gear"></span> Planter</h2> -->
          <h2>&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button>&nbsp;&nbsp;<button class="clear-cart btn btn-danger">Clear Cart</button></h2>
        </div>
          <!-- <nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded"> -->
    <!-- <div class="row"> -->
        <!-- <div class="col"> -->
          <!-- </div>
    </div> -->
<!-- </nav> -->
      </div>
    </div>
  </div>
  <!--Breadcrumb-->
  <section id="breadcrumb" >
    <div class="container cls">
      <ol class="breadcrumb">
        <li>Home</li>
      </ol>
    </div>
  </section>
  <!--main section-->
  <!--main section-->
  <section id="main">
    <div class="container cls">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="<?php echo base_url();?>Planter/phome" class="list-group-item active  main-color-bg">
                  <span class="glyphicon glyphicon-cog"></span> Home
              </a>
            <a href="<?php echo base_url();?>Planter/pro" class="list-group-item"><span class="badge">14</span><span class="glyphicon glyphicon-user"></span> Profile</a>
            <a href="posts.html" class="list-group-item"><span class="badge">26</span><span class="glyphicon glyphicon-grain"></span> Lands</a>
            <a href="users.html" class="list-group-item"><span class="badge">54</span><span class="glyphicon glyphicon-search"></span>  Suggestion</a>
             <a href="users.html" class="list-group-item"><span class="badge">54</span><span class="glyphicon glyphicon-cloud"></span>
             IOT Support</a>
          </div>
          <div>
        <?php include('weather.php') ?>
      </div>
        </div>
        <div class="col-md-9">
          <?php include('slide.php') ?>
        </div>
      </div>
  </section>
<center>   
  <br>
  <div class="container">
    <div class="row" >
      <div class="col-sm-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/image/L1.jpg"alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Land1</h4>
    <p class="card-text">Price: ₹500000</p>
    <a href="#" data-name="Land1" data-price="500000" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/image/L2.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Land2</h4>
    <p class="card-text">Price: ₹200000</p>
    <a href="#" data-name="Land2" data-price="200000" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/image/L6.jpg"alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Land3</h4>
    <p class="card-text">Price: ₹350000</p>
    <a href="#" data-name="Land3" data-price="350000" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col-sm-3">
      </div>
          <div class="col-sm-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/image/L4.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Land4</h4>
    <p class="card-text">Price: ₹450000</p>
    <a href="#" data-name="Land4" data-price="450000" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 20rem;">
  <img class="card-img-top" src="<?php echo base_url();?>assets/image/L5.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Land5</h4>
    <p class="card-text">Price: ₹1000000</p>
    <a href="#" data-name="Land5" data-price="100000" class="add-to-cart btn btn-primary">Add to cart</a>
  </div>
</div>
      </div>
    </div>
</div>
</center>
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">& times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div>
  <!-- footer -->
<?php 
  echo 'hello';
  echo $this->session->userdata('ph');

 ?>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<!-- <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script  src="<?php echo base_url()?>assets/js/adscript.js"></script> -->
 <script  src="<?php echo base_url()?>assets/js/logscript.js"></script>
 <script  src="<?php echo base_url()?>assets/js/sscript.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script  src="<?php echo base_url()?>assets/js/shdiv.js"></script>
</body>
</html>