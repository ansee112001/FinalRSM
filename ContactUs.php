<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Contact</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- My Css -->
	<link rel="stylesheet" type="text/css" href="contact.css" />
	<!--My Link-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">

<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.instagram.com" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="https://accounts.snapchat.com/" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="https://www.pinterest.com" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="https://twitter.com" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="https://www.linkedin.com" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
  
   <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="home.html" class="w3-bar-item w3-button><i class="fa fa-home w3-margin-right"></i>Home</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-teal" title="Notifications">Information <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="about.html" class="w3-bar-item w3-button">About</a>
      <a href="ContactUs.php" class="w3-bar-item w3-button w3-teal">Contact</a>
    </div>
  </div>
  <a href="shoping.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Shopping</a>
  <a href="galery.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
  <a href="https://www.google.com/" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>
</div>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="img/maps.jpg" width="100%" height="100%" style="display: block; margin: auto;">
	</div>
	
    <div class="column">
        <form class="formhorizontal" method="post" action="Contacthasil.php">
            <div class="formgroup">
                <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Your name.." name="name">
            </div>
            </div>
			<div class="formgroup">
                <label class="control-label col-sm-2" for="gen">Gender:</label>
            <div class="col-sm-10">
                <label class="radioinline" ><input type="radio" id="gen" name="gen" value="pria">Pria</label>
                <label class="radioinline"><input type="radio" id="gen" name="gen" value="wanita">Wanita</label>
            </div>
            </div>
            <div class="formgroup">
                <label class="control-label col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date" name="date">
            </div>
            </div>
			<div class="formgroup">
                <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email" placeholder="Your email.." name="email">
              </div>
            </div>
				<label class="control-label col-sm-2" for="message">Message</label>
				<textarea id="message" name="message" placeholder="Write something.." style= "width:540px" "height:170%"></textarea>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
            </div>
            </div>
        </form>
    </div>
	<br></br>
	<hr>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow </h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.google.com/" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.instagram.com" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="https://www.linkedin.com" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SosialMedia.AR</a></p>

<!-- Akhir Footer -->

  </body>
</html>