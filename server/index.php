<?php
	// check who's logged in here and store in $username
	$username = "";
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>DistrProg | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <style type="text/css"></style></head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Distributed Programming</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?php echo $username; ?></a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Quick Navigation (not working)</li>
              <li><a href="#">Download Desktop Client</a></li>
              <li><a href="#">Upload Files</a></li>
              <li><a href="#">Troubleshooting</a></li>
              <li><a href="https://github.com/KevZho/distributedcomputing">Github Repo</a></li>
              <li class="nav-header">User Nav</li>
              <li><a href="#">User Stats</a></li>
              <li><a href="#">Account Options</a></li>
              <li><a href="#"><b>Collect Balance</b></a></li>
              <li><a href="#">Filler</a></li>
              <li><a href="#">Filler</a></li>
              <li><a href="#">Logout</a></li>
              <li class="nav-header">More Information</li>
              <li><a href="#">How it Works</a></li>
              <li><a href="#">Mission Statement</a></li>
              <li><a href="#">Interested in Partnership?</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1><center>Welcome to the DistProg Portal:</center></h1>
            <br/>
            <p><center>Know what you're doing?</center></p>
            <p><center><a href="#" class="btn btn-primary btn-large">Upload Stuff</a></center></p>
            <br/>
            <br/>
            <p><center>First time here? Get started by following the instructions below...</center></p>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Step 1</h2>
              <p>Download our desktop client. This will be neccesary to execute any projects that reside on our server.</p>
              <p><a class="btn" href="#">Download Here»</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Step 2</h2>
              <p>Make sure you have computing space available in your computer for the projects. If you do not, the programs will not be downloaded, and you won't earn as much as you can.</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Step 3</h2>
              <p>Run the client for the desired amount of time. The server will record your computing hours and credit you accordingly</p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details »</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->

    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>

  

</body></html>