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
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="mysite_css.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
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
        <div class="clear">
          
        </div>
        <div class="container">
              <h3>Form</h3>
                <form method="post" action="#">
                  <div class="row uniform">
                    <div class="6u 12u$(xsmall)">
                      <input type="text" name="name" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="6u$ 12u$(xsmall)">
                      <input type="email" name="email" id="email" value="" placeholder="Email" />
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                      <div class="select-wrapper">
                        <select name="category" id="category">
                          <option value="">- Category -</option>
                          <option value="1">Manufacturing</option>
                          <option value="1">Shipping</option>
                          <option value="1">Administration</option>
                          <option value="1">Human Resources</option>
                        </select>
                      </div>
                    </div>
                    <!-- Break -->
                    <div class="4u 12u$(small)">
                      <input type="radio" id="priority-low" name="priority" checked>
                      <label for="priority-low">Low Priority</label>
                    </div>
                    <div class="4u 12u$(small)">
                      <input type="radio" id="priority-normal" name="priority">
                      <label for="priority-normal">Normal Priority</label>
                    </div>
                    <div class="4u$ 12u$(small)">
                      <input type="radio" id="priority-high" name="priority">
                      <label for="priority-high">High Priority</label>
                    </div>
                    <!-- Break -->
                    <div class="6u 12u$(small)">
                      <input type="checkbox" id="copy" name="copy">
                      <label for="copy">Email me a copy of this message</label>
                    </div>
                    <div class="6u$ 12u$(small)">
                      <input type="checkbox" id="human" name="human" checked>
                      <label for="human">I am a human and not a robot</label>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                      <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                    </div>
                    <!-- Break -->
                    <div class="12u$">
                      <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                        <li><input type="reset" value="Reset" class="alt" /></li>
                      </ul>
                    </div>
                  </div>
                </form>
                </div>
        <div class="col "></div>
      </section>
</div>
      <aside class = "row brown-aside">
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><ol>
        <h2 class="smaller-text"> Home</h2>
          <li><a href="liquorLegal.php">Tech</a></li>
          <li><a href="liquorLegal.php">Business</a></li>
          <li><a href="liquorLegal.php">History</a></li>
          <li><a href="liquorLegal.php">Geo and travel</a></li>
        </ol></div>
        
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><ol>
        <h2 class="smaller-text"> Info</h2>
          <li><a href="liquorLegal.php">About us</a></li>
          <li><a href="liquorLegal.php">Contact & inquiry</a></li>
          <li><a href="liquorLegal.php">Disclaimer</a></li>
          <li><a href="liquorLegal.php">Permissions</a></li>
          <li><a href="liquorLegal.php">Privacy policy</a></li>
          <li><a href="liquorLegal.php">Cookies</a></li>
        
        </ol></div>

        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6"><h3>Col C</h3></div>
        <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6">
          <div class="FA" >
            <h2 class="smaller-text">Social</h2>
            <a href =""><i class=" fa-4x fa fa-facebook"></i></a>
            <a href =""><i class=" fa-4x fa fa-twitter"></i></a>
            <a href =""><i class=" fa-4x fa fa-youtube"></i></a>
            <a href =""><i class=" fa-4x fa fa-instagram"></i></a>
          </div>
        </div>
      </aside>
      <footer class = "row brown-aside">
        <p>&copy; 2017 Palmline Inc</p>
      </footer>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
