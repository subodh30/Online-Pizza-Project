<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pizza Mania</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/half-slider.css" rel="stylesheet">
 <link href="css/3-col-portfolio.css" rel="stylesheet">
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
<style type="text/css">
	.btn{
		padding: 10px;
		background-color:  #17a589;
		text-align: center;
		color: white; 
		bottom: 10px;
		left: 150px;
		position: absolute;
	}
  .btn1{
    padding-left : 50px;
        padding-right:   50px;
    padding-top : 20px;
    padding-bottom: 20px;
    font-size: 20px;

    background-color:  white;
    text-align: center;
    color: #17a589; 
    border-radius: 10px;

   
  }
  .black{
    color:black;
  }
</style>
  </head>

  <body id="page-top">
<?php session_start(); ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pizza Mania</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          	            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
           
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#orders">My Orders</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li><input type="submit" value="Logout" class="btn" onclick="window.open('../pizza/logout.php')" /> </li>    


          </ul>
        </div>
      </div>
    </nav>


    <!-- Header -->
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Pizza Mania is a online pizza ordering website.It is created by the students in the PICT as a startup project.It is very reliable and user friendly site.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">It is more than just a pizza ordering site,it also allow you to order cake,pasta,garlic bread etc.So do come and enjoy.Have a wonderful pizza time.</p>
          </div>
        </div>
        
      </div>
    </section>
     

    <!-- orders Section -->
    <section class="bg-primary text-white mb-0" id="orders">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">My Orders</h2>
        <hr class="star-light mb-5">
       <center>
       <font size="7">
       <table cellpadding="20px" border="5px" bordercolor="black">
       <tr>
       	<th  class="black">Pizza</th>
       	<th  class="black">Quantity</th>
       	<th  class="black">Price</th>
       </tr>
     <?php 
        for($i=1;$i<=8;$i+=1){
          if(isset($_SESSION[(string)$i.'n'])){
            echo "<tr>";
              echo "<td>".$_SESSION[(string)$i.'n']."</td>";

            echo "<td>".$_SESSION[(string)$i.'q']."</td>";
              echo "<td>".$_SESSION[(string)$i.'c']."</td>";
              echo "<tr>";
          }
        }
           
?>
       </table>
       <br/>
        <h1 class="black">TOTAL COST : <?php echo "RS. ".$_SESSION['tcost'];?> </h1>
   </font>
   <form action="test.php" method="POST">
    <br>
    <br>
    <input type="submit" value="Pay" class="btn1" />
    </form>
   </font>
   </center>


      </div>
    </section>

<!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Us</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <br>
              <div id="success"></div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



  <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">PICT,Dhankawadi
              <br>Pune,411043</p>
          </div>
          
          <div class="col-md-6">
            <h4 class="text-uppercase mb-4">About Pizza Mania</h4>
            <p class="lead mb-0">Pizza Manaia is a easy to use pizza ordering website created by students in PICT.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; PICT 2018</small>
      </div>
    </div>
 <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>