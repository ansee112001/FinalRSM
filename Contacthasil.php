    <?php
        $name = $_POST['name'];
		$gen = $_POST['gen'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    ?>

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
      <a href="contact.php" class="w3-bar-item w3-button w3-teal">Contact</a>
    </div>
  </div>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Shopping</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Inbox</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>
</div>
<!--Akhir Navbar-->

  <div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
	<h3><a>User Personal Data Based on Data Input Received</a><h3>
  </div>
  
  <div class="row">
    <div class="column">
      <img src="img/maps.jpg" width="100%" height="50%" style="display: block; margin: auto;">
	</div>
	

    <div class="column">
        <div class="panel-group">
        <div class="panel panel-success">
        <div class="panel-heading">Hasil Penginputan Data</div>
        <br>
            <div class="panel-body">
        <div class="row">
                <label class="col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <?= $name?>
            </div>
        </div>
		<div class="row">
                <label class="col-sm-2" for="gen">Gender:</label>
            <div class="col-sm-10">
                <?=$gen?>
            </div>
		</div>
		<div class="row">
                <label class="col-sm-2" for="date">Date:</label>
            <div class="col-sm-10">
                <?php echo $_POST['date']; ?>
            </div>
        </div>
        <div class="row">
                <label class="col-sm-2" for="nama">Email:</label>
            <div class="col-sm-10">
                <?php echo $email; ?>
            </div>
        </div>
        <div class="row">
                <label class="col-sm-2" for="message">Message:</label>
            <div class="col-sm-10">
                <?=$message?>
            </div>
		  </div>
	    </div>
	  </div>
	</div>
</div>

  <!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow </h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SosialMedia.AR</a></p>
</footer>
<!-- Akhir Footer -->
  
  </body>
</html>