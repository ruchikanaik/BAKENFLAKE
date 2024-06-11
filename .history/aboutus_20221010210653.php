<?php
session_start();
?>

<html>

<head>
  <title> About | BAKE n' Flake </title>
</head>

<link rel="stylesheet" type="text/css" href="css/aboutus.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<body>


  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>

  <script type="text/javascript">
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">BAKE n' FLAKE</a>
      </div>

      <div class="collapse navbar-collapse " id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="aboutus.php">About</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>

        <?php
        if (isset($_SESSION['login_user1'])) {

        ?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else if (isset($_SESSION['login_user2'])) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Product Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                (<?php
                  if (isset($_SESSION["cart"])) {
                    $count = count($_SESSION["cart"]);
                    echo "$count";
                  } else
                    echo "0";
                  ?>)
              </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        <?php
        } else {

        ?>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
              <ul class="dropdown-menu">
                <li> <a href="customersignup.php"> User Sign-up</a></li>
                <li> <a href="managersignup.php"> Manager Sign-up</a></li>

              </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li> <a href="customerlogin.php"> User Login</a></li>
                <li> <a href="managerlogin.php"> Manager Login</a></li>

              </ul>
            </li>
          </ul>

        <?php
        }
        ?>
      </div>

    </div>
  </nav>

  <div class="wide">

    <div class="tagline">
      <font color="FB2576">We make the special <font color="256D85"><strong>moments</strong></font>in our life <font color="256D85"><strong><em>with the efforts and trust!!! </em>.</strong></font>
    </div>
    <h2 style="color: 3C2317">---ABOUT OUR SITE BAKE n' FLAKE---</h2>
    <br>
    <h3 style="color:  9C2C77">This BAKE n' FLAKE bakery website allow us to order the product anywhere and at anytime to enjoy the special moments - parties,birthday.</h3>
    <h3 style="color : 06283D">.We bring you an exclusive range of fresh product such as cakes,chocolates,Savouries,pastries with a safety.</h3>
    <h3 style="color : 06283D">.We try to serve our products in the celebrations and have fun doing so to make your celebrations memorable and wonderful.</h3>
    <h3 style="color : 06283D">.We try our level best that whatever we display on our website is delivered with the same quality as promised and trust.</h3>
    <h3 style="color : 06283D">.In ordering, we also care to follow certain guidelines, rules and processes.</h3>

    </h3>
  </div>


</body>

</html>