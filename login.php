<?php
	session_start();
	
	if(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"] === true)
	{
		header("location: profile.php");
		exit;
	}
	
	require_once('includes/connection.php');
	
	$ID = $password = "";
	$ID_err = $password_err = "";
	
	// Processing form data when form is submitted
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// Check if ID is empty
		if(empty(trim($_POST["ID"]))){
			$ID_err = "Please enter ID.";
		} else{	
			$ID = trim($_POST["ID"]);
		}
		
		// Check if password is empty
		if(empty(trim($_POST["password"]))){
			$password_err = "Please enter your password.";
		} else{
			$password = trim($_POST["password"]);
		}
		
		// Validate credentials
		if(empty($ID_err) && empty($password_err)){
			// Prepare a select statement
			//$password = hash('whirlpool', $password );
			
			$query = "SELECT * FROM members WHERE ID = '$ID' AND password = '$password' LIMIT 1";
			if($result = mysqli_query($mysqli, $query))
			{
				if($result->num_rows == 1)
				{                    
					session_start();
					$row = $result->fetch_assoc();
					
					// Store data in session variables
					$_SESSION["LoggedIn"] = true;
					$_SESSION["ID"] = $ID;
					$_SESSION["Name"] = $row['Name'];	
					$result->close();					
					header("location: profile.php");
				}
				else
				{
					$password_err = "The password or ID you entered was not valid.";
					exit($password_err);
				}
			}
			else 
			{
				exit("OOPS! Something went wrong");
			}
		}
	}
 ?>
<!DOCTYPE html>
<head>
	<?php
    	include('includes/header.php');
    ?>
    <link rel="stylesheet" href="CSS/login.css">
    <script>
        function contactUs() {
        document.getElementById("contactUs").innerHTML = '<span>Contact Us On Whatsapp &#128512;</span>'
        }    
    </script>
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->

<body>
    <div class="fluid-container">
        <div class="text-center partition" style="height: 50.25em; margin-bottom: -80px;" >
            <div class="partition"><span style="vertical-align: top; padding-top: 100px; text-align: center;">Member Login</span></div>
            <!--Login Form-->
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="on" data-aos="zoom-in" data-aos-duration="1200" class="login-form item1">
				<div class="grid-item"><span class="Q">Reg No: </span></div>
				<div class="grid-item"><input style="margin-bottom: 1px" placeholder="AA00-BBB-000" type="TEXT"
                        NAME="ID" pattern="[FA^SP]{2}[0-9]{2}[-][A-Z]{3,5}[-][0-9]{3}$"
                        title="ID should be in proper format. e.g. FA18-BSE-010" required /><i class="fa fa-user icon"></i></div>
				<div class="grid-item"><span class="Q">Password: </span></div>
				<div class="grid-item"><input style="margin-top: 1px" placeholder="Password" type="TEXT"
                        NAME="password" pattern=".{6,32}"
                        title="Your password should be more than 6 characters." required /><i class="fa fa-lock icon"></i></div>	
				<div onclick="contactUs()" class="grid-item" style="width: 170px;"><span id="frgtPass">Forgot Password? &#128542; </span></div><br>
                <div id="contactUs" class="grid-item" style="width: 270px;"></div>
                <button style="margin-top: 8em;" class="btn-sub" type="submit" value="Login">Login</button>
            </form>
        </div>
    </div>
    
    <script src="JavaScript/aosb.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<!--Footer-->
<?php
    include('includes/footer.php');
?>