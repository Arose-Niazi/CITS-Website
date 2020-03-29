
<div class="navbar" id="nav">
  <a class="Logo"><IMG src="Images/logo.png" width="120px" height="50px" /></a>
  <div class="reverse">
	<?php
  if(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] === true)
  {
    echo '<a href="profile.php?logout=ture">Logout</a>';
		echo '<a href="profile.php">Profile</a>';
  }
  else
		echo '<a href="login.php">Login</a>';
	?>
    
    <a href="sponsors.php">Partners</a>
    <a href="faq.php">FAQ</a>
    <a href="contact_us.php">Contact Us</a>
    <a href="events.php">Events</a>
    <a href="about.php">About</a>
    <a href="main.php">Home</a>
  </div>
  <div href="javascript:void(0);" id="nav-icon1" class="icon" onclick="my()">
      <div>
        <span></span>
        <span></span>
        <span></span>
      </div>
  </div>
</div>
