<!DOCTYPE html>
<html lang="en">
<head>
  <title>School site</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

  <link rel="stylesheet" href = "assets/boottutorial/bootstrap-5.2.0-dist/css/bootstrap.css">
  <script src="assets/boottutorial/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/body.css">

  
</head>
<body>

 
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg pt-lg-0 bg-warning navbar-info py-0">

  <?php
include('dashboard.php');
?>


    <div class="container">
      


    <a href="#" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button"
     data-bs-toggler="">
    </button>

   

    <div class="align-items-end">
    
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="sign_up.php" class="nav-link">Sign up</a>
            </li>
            <li class="nav-item">
                <a href="#learn" class="nav-link">instructors</a>
            </li>
        </ul>
    </div>
</div>

</nav>
 <!-- End of Navbar-->

 <div>
    <img src="assets/img/pic.jpg" height="600px" width="100%">
 </div>




 <div class="thumbs">
			<div class="thumb">
				<img src="assets/img/2.jpg">
				<div class="head">
					Available Genres
				</div>
				<div class="body">
					<p>Documentary</p>
					<p>Chick Flick</p>
					<p>Romance</p>
				</div>
			</div>
			<div class="thumb">
				<img src="assets/img/3.jpg">
				<div class="head">
					Book an Appointment
				</div>
				<div class="body">
					<input type="date" name="">		
					<button>Request</button>
				</div>
			</div>
			<div class="thumb">
				<img src="assets/img/4.jpg">
				<div class="head">
					Become a Member
				</div>
				<div class="body">
					<input type="text" name="" placeholder="Your Name">
					<input type="text" name="" placeholder="Your Email">
					<button>Register</button>
				</div>
			</div>
		</div>

 

<!--start footer--> 

 <section class="footer">
      <div class="social">
        <a href="#"><i class="">
            <img src="assets/img/fb.png" height="10px">
        </i></a>
        <a href="#"><i class="">
            <img src="assets/img/twitter.png" height="10px">
        </i></a>
      </div>
 
      <p class="copyright" style="background-color: darkorange;" >copyright &copy; info</p>
    </section>


</body>

</html>