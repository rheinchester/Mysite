<!doctype html> 
                                                                                                                                                                                      
<html>
<!-- Use .container-fluid for a full width container, spanning the entire width of your viewport. -->
<!-- remember, excess news is not good -->
<!-- The Scrollspy plugin is used to automatically update links in a navigation list based on scroll position. -->
  <head>
  <title>PalmLiner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- just update these links once a while and all will be fine -->
  <script type="text/javascript" src ="ResponsiveNav.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mysite_css.css">
  <script type="text/javascript" src ="js/respond.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
  </head>

  <body> 
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">The PalmLiner</a>
  </div>
  
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Business <span class="caret"></span></a>
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Men Collection</li>                            
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
        </ul>       
      </li>
            <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tech <span class="caret"></span></a>     
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
              <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
                    <li class="col-sm-3">
              <ul>
              <li class="dropdown-header">Women Collection</li>                            
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
                  </ul>
                </li>
              </ul>       
            </li>
          <li class="dropdown mega-dropdown"><a href="#" class="dropdown-toggle">History<span class="caret"></span></a></li>
    </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
  </div><!-- /.nav-collapse -->
  </nav>
  <!-- Nav ends -->
      </header>

<div class="container-fluid"> 
      <section class = "row">
        <nav class="col " >
        <!-- responsive sidenav -->
        </nav>

        <div class="col col-lg-9"><!-- carousel div Begins--> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="img-responsive active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class="img-responsive " ></li>
              <li data-target="#myCarousel" data-slide-to="2" class="img-responsive "></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="img/images2.jpg" alt="New York" width="1200" height="700">
                  <div class="carousel-caption">
                  
                </div>      
              </div>

                <div class="item">
                  <img src="img/images2.jpg" alt="Chicago" width="1200" height="700">
                  <div class="carousel-caption">
                 
                  </div>      
                </div>
        
            <div class="item">
                <img src="img/images3.jpg" alt="Los Angeles" width="1200" height="700">
                <div class="carousel-caption">
                 
                  </div>      
              </div>
            </div>
        <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- carousel ends -->

        </div>
        <aside class="col">
            <!-- for top 3 updates -->
            <div class="col col-lg-3 top-border"><hr><h3>Hyperloop</h3></div>
            <div class="col col-lg-3 "><hr><h3>On China</h3></div>
            <div class="col col-lg-3 "><hr><h3>Fall of western Rome</h3></div>
        </aside>
        <article class="col ">
   
        </article>
        <div class="col "></div>
      </section>
</div>
      <aside class = "row brown-aside">
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><ol>
        <h2 class="smaller-text"> Legal stuff</h2>
          <li><a href="liquorLegal.php">Permissions</a></li>
          <li><a href="liquorLegal.php">Privacy policy</a></li>
          <li><a href="liquorLegal.php"> Nigerian beverage law</a></li>
          <li><a href="liquorLegal.php">Cookies</a></li>
          <li><a href="liquorLegal.php">Distribution policy</a></li>
        </ol></div>
        
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><ol>
        <h2 class="smaller-text"> Legal stuff</h2>
          <li><a href="liquorLegal.php">Permissions</a></li>
          <li><a href="liquorLegal.php">Privacy policy</a></li>
          <li><a href="liquorLegal.php"> Nigerian beverage law</a></li>
          <li><a href="liquorLegal.php">Cookies</a></li>
          <li><a href="liquorLegal.php">Distribution policy</a></li>
        </ol></div>

        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><h3>Col C</h3></div>
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><h3>Col D</h3></div>
      </aside>
      <footer class = "row">
        <p>&copy; 2017 Palmliner</p>
      </footer>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
