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
                $Img = $row['Image'];
				$result->close();		
			}
			else
				exit;
			
		else
            exit;
            
        $dutyDay = array();   
        $dutyHour = array();
        $dutyMin = array();
        $dutyHourEnd = array();
        $dutyMinEnd = array();
        $dutyDate = array();
        $dutyCounter = 0;
        $query = "SELECT DAYNAME(Date) AS Day,HOUR(Date) AS Hour, MINUTE(Date) AS Mins,HOUR(DATE_ADD(Date,INTERVAL 90 MINUTE)) AS HourEnd, MINUTE(DATE_ADD(Date,INTERVAL 90 MINUTE)) AS MinsEnd, DATE_FORMAT(Date,'%d-%m-%Y') AS Date FROM Duty WHERE Date > CURRENT_TIMESTAMP() AND Member = '".$ID."' ORDER BY Date ASC";

        if ($result = $mysqli->query($query)) 
            while($row = $result->fetch_assoc())
            {
                $dutyDay[$dutyCounter] = $row['Day'];
                $dutyHour[$dutyCounter] = $row['Hour'];
                $dutyMin[$dutyCounter] = $row['Mins'];
                $dutyHourEnd[$dutyCounter] = $row['HourEnd'];
                $dutyMinEnd[$dutyCounter] = $row['MinsEnd'];
                $dutyDate[$dutyCounter++] = $row['Date'];
            }

        $news = array();
        $newsCounter = 0;
         
        $query = "SELECT * FROM News WHERE ActiveTill > CURRENT_TIMESTAMP() ORDER BY ID DESC";
        
        if ($result = $mysqli->query($query)) 
            while($row = $result->fetch_assoc())
                $news[$newsCounter++] = $row['Details'];

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
                <img class="person-img" src="Images/ImagesMembers/<?php echo $ID.$Img?>.jpg"/>
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
                <?php
                    if($dutyCounter > 0)
                    {
                        echo '
                            <div style="color: rgb(55,116,201)">Duty: </div>
                            <div class="grid-container part">';
                    }
                    for($x = 0; $x < $dutyCounter; $x++)
                    {
                        if($x == 0)
                            echo '<div class="grid-item item1">';
                        else
                            echo '<div class="grid-item">';
                            
                            
                        echo $dutyDay[$x].' ('.$dutyDate[$x].'):</div>';
                        
                        if($x == 0)
                            echo '<div class="grid-item item2">';
                        else
                            echo '<div class="grid-item">';
                        
                        printf("%02d:%02d-%02d:%02d",$dutyHour[$x],$dutyMin[$x],$dutyHourEnd[$x],$dutyMinEnd[$x]);
                        echo '</div>';
                    }
                    if($dutyCounter > 0)
                    {
                        echo '</div>';
                    }
                    echo '<div style="color: rgb(55,116,201); padding-top: 20px;">News: </div>';
                    for($x = 0; $x < $newsCounter; $x++)
                    {
                        echo '<div class="news">'.$news[$x].'</div>';
                    }
                    if($newsCounter == 0)
                    {
                        echo '<div class="news">No new news.</div>';
                    }
                    echo '</div>';
                ?>
            <!--Edit-->
            <div class="col-md-4">
                <div class="btns">
                    <div class="edit"><a href="profileUpdate.php">Edit Profile</a></div>
                    <!--<div class="edit">Request Card</div>
                    <div class="edit">Submit Time Table</div> -->
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
