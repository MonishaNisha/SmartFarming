<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Land Lord</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/adstyle.css"> 

</head>
<body>
<!-- partial:index.partial.html -->
<head>
  <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  </head>
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
        <a class="navbar-brand" href="#">Smart Farming</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Dashboard</a></li>
          <li><a href="#">Pages</a></li>
          <li><a href="#">Posts</a></li>
          <li><a href="#">Users</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php echo '<b>'.$this->session->userdata('emailid').'</b>'?></a></li>
          <li><a href=" <?php echo base_url();?>RegisterOwner/logout">Log out</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
  <!--header-->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-10 ">
          <h2><span class="glyphicon glyphicon-cog" id="gear"></span> Dashboard</h2>
        </div>
      </div>
    </div>
  </div>
  <!--Breadcrumb-->
  <section id="breadcrumb" >
    <div class="container">
      <ol class="breadcrumb">
        <li class="active">Home</li>
      </ol>
    </div>
  </section>
  <!--main section-->
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group animated zoomIn">
            <a href="#" class="list-group-item active  main-color-bg">
                  <span class="glyphicon glyphicon-cog"></span>  Home
              </a>
            <a href="pages.html" class="list-group-item"><span class="badge">14</span><span class="glyphicon glyphicon-user"></span> Profile</a>
            <a href="posts.html" class="list-group-item"><span class="badge">26</span><span class="glyphicon glyphicon-grain"></span> Lands</a>
            <a href="users.html" class="list-group-item"><span class="badge">54</span><span class="glyphicon glyphicon-stats"></span> No.of Lands</a>
          </div>
          
        </div>
       
                 <div class="col-md-9">
          <div class="panel panel-default animated zoomIn">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Website Overview</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-3">
                <div class="well dash-box">
                  <h2><span class="glyphicon glyphicon-user"></span> 140</h2>
                  <h4>Users</h4>
                </div>
              </div>
              <div class="col-md-3 dash-box">
                <div class="well">
                  <h2><span class="glyphicon glyphicon-list-alt"></span> 18</h2>
                  <h4>Pages</h4>
                </div>
              </div>
              <div class="col-md-3 dash-box">
                <div class="well">
                  <h2><span class="glyphicon glyphicon-pencil"></span> 28</h2>
                  <h4>Posts</h4>
                </div>
              </div>
              <div class="col-md-3 dash-box">
                <div class="well">
                  <h2><span class="glyphicon glyphicon-stats"></span> 1140</h2>
                  <h4>Visiters</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-default animated zoomIn">
            <!-- Default panel contents -->
            <div class="panel-heading main-color-bg">Latest Users</div>
            <div class="panel-body">
              <!-- Table -->
              <table class="table table-striped table-hover">
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Joined</th>
                </tr>
                <tr>
                  <td>Satjeet Sandhu</td>
                  <td>satyajeet.sandhu@iig.ernet.in</td>
                  <td>Oct 14,2017</td>
                </tr>
                <tr>
                  <td>Satjeet Sandhu</td>
                  <td>satyajeet.sandhu@iig.ernet.in</td>
                  <td>Oct 14,2017</td>
                </tr>
                <tr>
                  <td>Satjeet Sandhu</td>
                  <td>satyajeet.sandhu@iig.ernet.in</td>
                  <td>Oct 14,2017</td>
                </tr>
                <tr>
                  <td>Satjeet Sandhu</td>
                  <td>satyajeet.sandhu@iig.ernet.in</td>
                  <td>Oct 14,2017</td>
                </tr>

              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <p>&copy; Developed by <i><strong>Monisha</p>
    </footer>
  <!-- Model -->
  <!-- Add page -->
  <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add page</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Page Title</label>
              <input type="text" class="form-control" placeholder="Page Title">
            </div>
            <div class="form-group">
              <label>Page Body</label>
              <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
            </div>
            <div class="checkbox">
              <label>
          <input type="checkbox"> Published
        </label>
            </div>
            <div class="form-group">
              <label>Meta Tags</label>
              <input type="text" class="form-control" placeholder="Add Some Tags...">
            </div>
            <div class="form-group">
              <label>Meta Description</label>
              <input type="text" class="form-control" placeholder="Add Meta Description...">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="assets/js/adscript.js"></script>
 <script  src="<?php echo base_url()?>assets/js/logscript.js"></script>

</body>
</html>
