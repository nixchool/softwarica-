<html>
  <head>
    <title> Restuarant </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "icon" href = "images/logo.png" type = "image/x-icon"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.bundle.min.js">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <!-- <header style="color: black; font-weight: bold;" class="pull-right">Bibas is here now<br>Koirala<br></header> -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand"><a href="index.html"><img src="images/logo.png" width="50" height="45" class="d-inline-block align-top" alt=""></a></div>
        </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="padding-right:100px;">
            <li class="active"><a href="index.html">Home </a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <?php
              require('auth_session.php');
              if($_SESSION["username"]) {
                $user = $_SESSION["username"];
                echo "<li><a href='logout.php'>Logout <span style='color:green;'> </li>", $user ,"</a>";
              }
              else {
                echo "<li><a href='login.php'>Login</a></li>";
              }
              ?>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class=" wallpaper">
      <div class="shadow"><p> Welcome<br>To The<br> Somewhere</p>
    <div class=" open_time"> <h4>Opening Time</h4>Saturday to Friday <br> From 9:00 AM To 8:00 PM</div></div>
    </div><br>
    <div class="box">
      <div class="offer"><p>Events & Offers</p></div>
      <marquee behaviour = "slide" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="15" width="85%"><p style="font-size:16px;">Welcome to the Restaurant</p> </marquee>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-ls-12" style="text-align: center; margin: 50px 0px 50px 0px;">
        <h2> What we Serve?</h2>
      </div></div><div class="row">
      <div class="col-md-4"><div class="menu_box"><img src="images/tea.jpg" alt="Tea" class="img-responsive"> <p class="txt">Tea </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 20 per </p>
      </div></div>
      <div class="col-md-4"><div class="menu_box"><img src="images/momo.jpg" alt="Mo:Mo" class="img-responsive"><p class="txt">Mo:Mo </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 100 per</p>
      </div></div>
      <div class="col-md-4"><div class="menu_box"><img src="images/chowmein.jpg" alt="Chowmein" class="img-responsive"><p class="txt">Chowmein </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 80 per</p>
      </div></div>
    </div>

      <div class="row">
      <div class="col-md-4"><div class="menu_box"><img src="images/tea.jpg" alt="Tea" class="img-responsive"><p class="txt">Tea </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 20 per</p>
      </div></div>
      <div class="col-md-4"><div class="menu_box"><img src="images/momo.jpg" alt="Mo:Mo" class="img-responsive"><p class="txt">Mo:Mo </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 100 per</p>
      </div></div>
      <div class="col-md-4"><div class="menu_box"><img src="images/chowmein.jpg" alt="Chowmein" class="img-responsive"><p class="txt">Chowmein </p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p><p class="txt">Price: Rs. 80 per</p>
      </div></div>
    </div>
    <div class="row">
      <div class="col-sm-12" style="text-align: center; margin-top: 20px;"><a href="menu.html"> <button type="button" class="btn btn-primary">See Menu </button> </a></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="text-align: center; margin: 50px 0px 50px 0px;">
        <h2> Moments at Somewhere</h2>
      </div>
      
      <div class="col-md-4"><div class="g_box"><img src="images/pic1.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic2.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic3.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
  
    
      <div class="col-md-4"><div class="g_box"><img src="images/pic4.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic5.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic6.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
    
    
      <div class="col-md-4"><div class="g_box"><img src="images/pic7.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic8.jpeg" alt="Moments at Somewhere" class="img-responsive"></div></div>
      <div class="col-md-4"><div class="g_box"><img src="images/pic9.jpg" alt="Moments at Somewhere" class="img-responsive"></div></div>

    <div class="col-sm-12" style="text-align: center; margin-top: 20px;"><a href="gallery.html"><button type="button" class="btn btn-primary"> See Gallery </button> </a></div>
  </div>
  </div>
  



    <br><br><br><br><br><br><br>
  <div class="footer footer_box">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><h4>HEADING</h4><p> Delicious quality foods at reasonable price. Perfect place to hang out with friends and family. </p></div>
        <div class="col-md-4"><h4>Location:</h4><p><i class="fas fa-map-marker-alt"></i>  B.P Chowk, Gaighat-11, Udayapur </p>
          <p><i class="fas fa-phone-volume"></i> +977 9805933798</p></div>
        <div class="col-md-4"><h4>Social Media:</h4><a href="#Facebook"><i class="fab fa-facebook-f fb"></i></a><a href="#Instagram"><i class="fab fa-instagram insta"></i></a></div>
        
        <div class="col-sm-12" style="text-align: center;"><br><br><p>© <script>document.write( new Date().getFullYear() );</script></p></div>
      </div>
    </div>
    </div>
  </body>
</html>