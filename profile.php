<?php
	session_start();
	
	if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] === false)
	{
		header("location: login.php");
		exit;
	}
 ?>
<!DOCTYPE html>

<head>
	<?php
    	include('includes/header.php');
		require_once('includes/connection.php');
		require_once('includes/functions.php');
		
		$query = "SELECT * FROM Members WHERE ID = '".$_SESSION["ID"]."'";
		if ($result = $mysqli->query($query)) 
			if($row = $result->fetch_assoc())
			{
				$ID = $row["ID"];
				$Name = $row["Name"];
				$RankDisplay = $row["RankDisplay"];
				$Contact = $row["Contact"];
				$Rank = $row["Rank"];
				$Email = $row["Email"];
				$result->close();		
			}
			else
				exit;
			
		else
			exit;
			
		if (isset($_GET['logout'])) {
			logout();
		}	
    ?>
    <link rel="stylesheet" href="CSS/profile.css">
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->

<body>
    <!--Testing-->
    
    <div class="fluid-container">
        <div class="partition main-partition">
            <div class="partition"><span style="vertical-align: top; padding-top: 100px; text-align: center;">Your Profile</span></div>
      
    <div class="main-body container">
        <!--Image and Info-->
        <div class="row part">
            <div class="col-md-5">
                <img class="person-img" src="Images/ImagesMembers/<?php echo $ID?>.png"/>
            </div>
            <div class="col-md-7">
                <div class="grid-container">
                    <div class="grid-item item1 q">Name: </div>
                    <div class="grid-item item2"><?php echo $Name?></div>
                    <div class="grid-item q">Registeration Number: </div>  
                    <div class="grid-item"><?php echo $ID?></div>  
                    <div class="grid-item q">Rank: </div>
                    <div class="grid-item"><?php echo $RankDisplay?></div>
                    <div class="grid-item q">Contact: </div>
                    <div class="grid-item"><?php echo $Contact?></div>
                    <div class="grid-item q">Email: </div>
                    <div class="grid-item"><?php echo $Email?></div>
                </div>
            </div>
        </div>
        <!--Duty and Edits-->
        <div class="row part">
            <div class="col-md-8">
                <!--Duty-->
                <div style="color: rgb(55,116,201)">Duty: </div>
                <div class="grid-container part">
                    <div class="grid-item item1">Monday:</div><div class="grid-item item2">1:00-2:30</div>
                    <div class="grid-item">Tuesday:</div><div class="grid-item">8:30-10:00</div>
                </div>
                <div style="color: rgb(55,116,201); padding-top: 20px;">News: </div>
                <div class="news">Meeting. Tomorrow 1 PM. At N2. Your presence is mandatory. In case of any problem do inform</div>
                <div class="news">Please fill the following form.</div>
            </div>
            <!--Edit-->
            <div class="col-md-4">
                <div class="btns">
                    <div class="edit"><a href="profileUpdate.html">Edit Profile</a></div>
                    <div class="edit">Request Card</div>
                    <div class="edit">Submit Time Table</div>
					<div class="edit"><a href="profile.php?logout=true">Logout</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>
