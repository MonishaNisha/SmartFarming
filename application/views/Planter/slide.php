<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container marg" style="max-width: 850px; max-height: 500px;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
    <ol class="carousel-indicators" align="left">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url();?>assets/image/wall15.jpg" alt="Los Angeles" width="500" height="500">
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>assets/image/s1.jpg" alt="Chicago" width="500" height="500">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>assets/image/wall16.jpg" alt="New york" width="500" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
