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
   .inactiveLink {
   pointer-events: none;
   cursor: default;
}
</style>
  </head>

  <body id="page-top">
<?php session_start(); 
if(isset($_GET['p1'])){
  $_SESSION['titem']+=1;
  $_SESSION['1q']+=1;
  $_SESSION['1n']="Farm House";
  $_SESSION['1c']=250;
  $_SESSION['tcost']+=250;
}elseif(isset($_GET['p2'])){
  $_SESSION['titem']+=1;
  $_SESSION['2q']+=1;
    $_SESSION['2n']="Peepy Paneer";
  $_SESSION['2c']=100;
  $_SESSION['tcost']+=100;
}elseif(isset($_GET['p3'])){
  $_SESSION['titem']+=1;
  $_SESSION['3q']+=1;
    $_SESSION['3n']="Mexican Green Wave";

  $_SESSION['3c']=20;
  $_SESSION['tcost']+=20;
}elseif(isset($_GET['p4'])){
  $_SESSION['titem']+=1;
  $_SESSION['4q']+=1;
    $_SESSION['4n']="Veg Extravaganz";

  $_SESSION['4c']=200;
  $_SESSION['tcost']+=200;
}elseif(isset($_GET['p5'])){
  $_SESSION['titem']+=1;
  $_SESSION['5q']+=1;
    $_SESSION['5n']="Peri Peri Chicken";

  $_SESSION['5c']=100;
  $_SESSION['tcost']+=100;
}elseif(isset($_GET['p6'])){
  $_SESSION['titem']+=1;
  $_SESSION['6q']+=1;
    $_SESSION['6n']="Chicken Golden Delight";

  $_SESSION['6c']=20;
  $_SESSION['tcost']+=20;
}elseif(isset($_GET['p7'])){
  $_SESSION['titem']+=1;
  $_SESSION['7q']+=1;
    $_SESSION['7n']="Chicken Dominator";

  $_SESSION['7c']=200;
  $_SESSION['tcost']+=200;
}
elseif(isset($_GET['p8'])){
  $_SESSION['titem']+=1;
  $_SESSION['8q']+=1;
    $_SESSION['8n']="Non Veg Supreme";

  $_SESSION['8c']=200;
  $_SESSION['tcost']+=200;
}elseif(isset($_GET['p9'])){
  $_SESSION['titem']+=1;
  $_SESSION['9q']+=1;
    $_SESSION['9n']="Mexican veg";

  $_SESSION['9c']=100;
  $_SESSION['tcost']+=100;
}elseif(isset($_GET['p10'])){
  $_SESSION['titem']+=1;
  $_SESSION['10q']+=1;
    $_SESSION['10n']="Stuffed garlic bread";

  $_SESSION['10c']=20;
  $_SESSION['tcost']+=20;
}elseif(isset($_GET['p11'])){
  $_SESSION['titem']+=1;
  $_SESSION['11q']+=1;
    $_SESSION['11n']="Veg Pasta";

  $_SESSION['11c']=200;
  $_SESSION['tcost']+=200;
}
elseif(isset($_GET['p12'])){
  $_SESSION['titem']+=1;
  $_SESSION['12q']+=1;
    $_SESSION['12n']="Butterscotch Mousse Cake";

  $_SESSION['12c']=200;
  $_SESSION['tcost']+=200;
}
 ?>
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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Pizza</a>
            </li>
             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#other">Other</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a> 
            </li>
              <li><input type="submit" value="Proceed" class="btn" onclick="window.open('../pizza/order.php')" /> </li>    

            </ul>

              <font color="white">
                
              <?php echo "Hello, ".$_SESSION['username']; ?>
            
 &nbsp&nbsp items : <?php echo $_SESSION['titem']; ?>
           &nbsp &nbsp Cost : <?php echo $_SESSION['tcost']; ?>
            
            <br/>          
           
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
          <div class="carousel-item active" style="background-image: url('img/pizza2.jpg')">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/pizza1.jpg')">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/pizza3.jpg')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
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

    <br/>
    <br/>

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

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
     <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Farmhouse.jpg" alt="Farm House">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Farm House</a>
              </h4>
              <p class="card-text">A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes</p>
              <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p1=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Peppy_Paneer.jpg" alt="Peppy Paneer">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Peepy Paneer</a>
              </h4>
              <p class="card-text">Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p2=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Mexican_Green_Wave.jpg" alt="Mexican Green Wave">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Mexican Green Wave</a>
              </h4>
              <p class="card-text">A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p3=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Veg_Extravaganz.jpg" alt="Veg_Extravaganz">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Veg Extravaganz</a>
              </h4>
              <p class="card-text">A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms and jalapeno - with extra cheese to go all around.</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p4=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Peri-Peri_Chicken.jpg" alt="Peri Peri Chicken">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Peri Peri Chicken</a>
              </h4>
              <p class="card-text">Grilled Chicken Rashers I Peri-Peri Chicken I Onion I Capsicum</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p5=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Chicken_Golden_Delight.jpg" alt="Chicken_Golden_Delight">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Chicken Golden Delight</a>
              </h4>
              <p class="card-text">Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p6=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Dominator.jpg" alt="Dominator">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink"> Chicken Dominator</a>
              </h4>
              <p class="card-text">Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled Chicken Rashers</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p7=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/Non-Veg_Supreme.jpg" alt="Non Veg Supreme">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Non Veg Supreme</a>
              </h4>
              <p class="card-text">Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers</p>
               <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p8=1'" class="btn" >
                        </center>
            </div>
          </div>
        </div>
      </div>
<!-- /.row -->
    </section>

    <!-- Other Section -->
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="other">
     <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/mexican_veg.jpg" alt="Farm House">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Mexican veg</a>
              </h4>
              <p class="card-text">A crispy flaky wrap filled with Mexican Arancini Bean Patty rolled over a creamy Harissa Sauce.</p>
              <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p9=1'" class="btn" >
                        </center>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/stuffed-garlic-bread.jpg" alt="stuffed-garlic-bread">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">stuffed-garlic-bread</a>
              </h4>
              <p class="card-text">Freshly Baked Garlic Bread stuffed with mozzarella cheese, sweet corns & tangy and spicy jalapeños</p>
              <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p10=1'" class="btn" >
                        </center>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/veg_pasta.jpg" alt="veg_pasta">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Veg Pasta</a>
              </h4>
              <p class="card-text">Penne Pasta tossed with extra virgin olive oil, exotic herbs & a generous helping of new flavoured sauce.</p>
              <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p11=1'" class="btn" >
                        </center>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="img/butterscotch_cake.jpg" alt="Butterscotch Mousse Cake">
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" class="inactiveLink">Butterscotch Mousse Cake</a>
              </h4>
              <p class="card-text">A Creamy & Chocolaty indulgence with layers of rich, fluffy Butterscotch Cream and delicious Dark Chocolate Cake, topped with crunchy Dark Chocolate morsels - for a perfect dessert treat!</p>
              <center>
              <input type="button" name="cart" value="Add to cart" onClick="location.href='?p12=1'" class="btn" >
                        </center>

            </div>
          </div>
        </div>
      </div>
<!-- /.row -->
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
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cabin.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/cake.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/circus.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/game.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
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
<!--https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_js_modal2&stacked=h-->