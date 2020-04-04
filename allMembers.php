<?php
	session_start();
	
	/*if(!isset($_SESSION["LoggedIn"]) || $_SESSION["LoggedIn"] === false)
	{
		header("location: login.php");
		exit;
	}*/
 ?>
<!DOCTYPE html>

<head>
	<?php
        include('includes/header.php');
        require_once('includes/connection.php');
	?>
    <link rel="stylesheet" href="CSS/profile.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="CSS/profile.css">
    
    <script>
    $(function() {
    var nameRegs = [
        <?php 
            $query = "SELECT ID FROM Members";
		    if ($result = $mysqli->query($query)) 
			while($row = $result->fetch_assoc())
			{
				echo '"'.$row["ID"].'",';
			}
		    else
                exit;
            echo '"FA18-BSE-010"';  
            $result->close();	
        ?>
    ];
    $( "#search" ).autocomplete({
      source: nameRegs
    });
  } );
  </script>
    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $temp = trim($_POST["search"]);
            if(!empty($temp)) {
                
                $toLookID = $temp;
                include('includes/userData.php');
                if(!isset($_SESSION["WorkingOnID"]) || $_SESSION["WorkingOnID"] != $temp) 
                {
                    $_SESSION["WorkingOnID"] = $temp;
                }
                else 
                {
                    require_once('includes/uploadImage.php');
            
                    $query = "UPDATE Members SET Image = ".$Img;
                    if(!empty(trim($_POST["name"]))){
                        $Name = trim($_POST["name"]);
                        $query = $query.", Name = '".$Name."'";
                    }
                    if(!empty(trim($_POST["reg"]))){
                        $ID = trim($_POST["reg"]);
                        $query = $query.", ID = '".$ID."'";
                    }
                    if(!empty(trim($_POST["contact"]))){
                        $Contact = trim($_POST["contact"]);
                        $query = $query.", Contact = '".$Contact."'";
                     }
                    if(!empty(trim($_POST["email"]))){
                        $Email = trim($_POST["email"]);
                        $query = $query.", Email = '".$Email."'";
                    }
                    if(!empty(trim($_POST["about"]))){
                        $About = trim($_POST["about"]);
                        
                        $query = $query.", About = '".str_replace("'","\'",$About)."'";
                    }
                    if(!empty(trim($_POST["rank"]))){
                        $Rank = trim($_POST["rank"]);
                        $query = $query.", Rank = ".$Rank;
                    }
                    if(!empty(trim($_POST["rankdisplay"]))){
                        $RankDisplay = trim($_POST["rankdisplay"]);
                        $query = $query.", RankDisplay = '".$RankDisplay."'";
                    }
                    if(!empty(trim($_POST["password"]))){
                        $password = trim($_POST["password"]);
                        $password = hash('whirlpool', $password );
                        $query = $query.", Password = '".$password."'";
                    }
                    $query = $query." WHERE ID = '".$_SESSION["WorkingOnID"]."'";
                    echo $query;
                    if($mysqli->query($query))
                    {
                        require_once('includes/uploadImage.php');
                        $alertMessage= "Member Data Updated!<BR>";
                        $addedMember = true;
                        unset($_SESSION["WorkingOnID"]);
                    }
                    else  $alertMessage= "Error Updating Data!<BR>";
            
                    if(!$skipFileUpdate){
                        $alertMessage= $alertMessage."Picture Changed!";
                    }
                }
            }
            
        } 
    ?>
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->

<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Search Profile..</span>
        </div>
    </div>
    <div class="main-body container">
        <!--Image and Info-->
        <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="on">
            <div class="part">
                <!--Search Bar-->
                <div class="ui-widget">
                    <input id="search" class="search" type="text" name="search" placeholder="Search..." <?php if(isset($_SESSION["WorkingOnID"])) echo 'value="'.$_SESSION["WorkingOnID"].'"';?> >
                </div>
                <!--Image ^ Name ^ Reg No. ^ Password ^ About-->
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="change"><img id="img" class="person-img" src="Images/ImagesMembers/<?php if(isset($_SESSION["WorkingOnID"])) echo $ID.$Img; else echo 'NoImage'?>.jpg"/></div>
                        <input style="border: none" class="uploadImg" name="uploaded_file" id="file" type="file" accept="image/*">
                    </div>
                    <div class="col-md-7">
                        <div class="grid-container">
                            <div class="grid-item item1 q">Name: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $Name; else echo 'Name'?>" class="grid-item item2" pattern=".{1,32}" name = "name"></input>
                            <div class="grid-item q">Reg No: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $ID; else echo 'AA00-BBB-000'?>" class="grid-item" type = "text" name="reg" pattern="[FA^SP]{2}[0-9]{2}[-][A-Z]{3,5}[-][0-9]{3}$"></input>
                            <div class="grid-item q">Password: </div>
                            <input placeholder="Password" class="grid-item" type = "TEXT" name="password" pattern=".{6,32}" title="Your password should be more than 6 and less than 32 characters."></input>
                            <div class="grid-item q">About: </div>
                            <textarea rows="5" placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $About; else echo 'Write about yourself here...'?>" class="grid-item" pattern=".{10,250}" title="Your about should be more than 10 and less than 250 characters." name="about"></textarea>
                        </div>
                    </div>
                </div>
                <!--Contact ^ Email ^ Rank ^ Rank Display-->
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="grid-container">
                            <div class="grid-item item1 q">Contact: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $Contact; else echo '0000-0000000'?>" class="grid-item item2" pattern="[0][0-9]{3}[-][0-9]{7}$" title="Correct Format: 0000-0000000" name = "contact"></input>
                            <div class="grid-item q">Rank: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $Rank; else echo 'Rank'?>" class="grid-item" type = "number" name="rank" min="1" max="9"></input>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="grid-container">
                            <div class="grid-item item1 q">Email: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $Email; else echo 'Email'?>" class="grid-item item2" type = "email" name="email"></input>
                            <div class="grid-item q">Rank Display: </div>
                            <input placeholder="<?php if(isset($_SESSION["WorkingOnID"])) echo $RankDisplay; else echo 'Rank Display'?>" class="grid-item" type = "TEXT" name="rankdisplay" maxlength="30"></input>
                        </div>
                    </div>
                    <button style="margin-top: 8em;" class="btn-sub allBtns" type="submit" value="Save"><?php if(isset($_SESSION["WorkingOnID"])) echo 'Save'; else echo 'Search';?></button>
                    <div class="grid-item"><span class="Q"><?php if(isset($alertMessage)) echo $alertMessage;?> </span></div>
                </div>
            </div>
        </form>  
    </div>            
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>
