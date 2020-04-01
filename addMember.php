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

        $query = "SELECT * FROM Members WHERE ID = '".$_SESSION["ID"]."'";
        if ($result = $mysqli->query($query)) 
			if($row = $result->fetch_assoc())
			{
				$RankDisplay = $row["RankDisplay"];
				$Rank = $row["Rank"];
				$result->close();		
			}
			else
				exit("No Data");
        else
            exit("Error!");

        if($Rank < 7 && $RankDisplay != "Registration Head") 
        {
		    exit("Permission Denied!");
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(!empty(trim($_POST["ID"]))){
                $ID = trim($_POST["ID"]);
                $Name = trim($_POST["name"]);
                $Contact = '0'.trim($_POST["contact"]);
                $password = hash('whirlpool', 'cits123' );
                $Email = trim($_POST["email"]);
                $Joined = trim($_POST["Joined"]);
                $Rank = trim($_POST["rank"]);
                if($Rank == 'Select Value') $Rank = 2;
                $RankDisplay = trim($_POST["RankDisplay"]);
                $Img = -1;
                
               
                $query = "INSERT INTO Members(ID, Name, Password, Email, Joined, Contact, Rank, RankDisplay, Image, AddedBy) VALUES ('".$ID."','".$Name."','".$password."','".$Email."','".$Joined."','".$Contact."',".$Rank.",'".$RankDisplay."',0,'".$_SESSION["ID"]."')";

                $alertMessage= "";
                $addedMember = false;

                //exit ($query);
                if($mysqli->query($query))
                {
                    require_once('includes/uploadImage.php');
                    $alertMessage= "Member Added!<BR>";
                    $addedMember = true;
                }
                else  $alertMessage= "Error adding member!<BR>";
            
                if(!$skipFileUpdate){
                    $alertMessage= $alertMessage."Picture Uploaded!";
                }            
            }
            
        } 
    ?>
    <link rel="stylesheet" href="CSS/reg.css">
    <script src="JavaScript/addMember.js"></script>
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->
<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Add Member..</span>
        </div>
    </div>
    <div class="container main-body">
    <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="on" >
        <!--Name-->
        <div class="grid-item"><span class="Q">Name<span class="req"> *</span> : </span></div>
        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Name" type="TEXT" NAME="name" pattern=".{1,32}" title="Name can contain letters only. e.g. John" required /></div>
        <!--Contact Number-->
        <div class="grid-item"><span class="Q">Contact No.<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input class="read" style="width: 20%; padding-left: 10px; padding-right: 10px;" type="text" name="code" value="+92" readonly> 
        <input style="width: 79.3%" placeholder="000-0000000" TYPE="text" NAME="contact" maxlength="11" pattern="\d{3}[\-]\d{7}" required /></div>
        <!--Email-->
        <div class="grid-item"><span class="Q">Email<span class="req"> *</span> : </span></div>
        <div class="grid-item"><INPUT placeholder="Email" TYPE="TEXT" NAME="email" SIZE="30" MAXLENGTH="50"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="" required /></div>
        <!--Reg Number-->
        <div class="grid-item"><span class="Q">Registeration No.<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input placeholder="AA00-BBB-000" TYPE="text" NAME="ID" SIZE="30" maxlength="12" pattern="[FA^SP]{2}[0-9]{2}[-][A-Z]{3,5}[-][0-9]{3}$" required /></div>
        <!--Joined Semester-->
        <div class="grid-item"><span class="Q">Joined In Semester<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input placeholder="AA00" TYPE="text" NAME="Joined" SIZE="30" maxlength="4" pattern="[FA^SP]{2}[0-9]{2}$" required /></div>
        <!--Rank-->
        <div class="grid-item"><span class="Q">Rank.<span class="req"> *</span> :</span></div>
        <div class="grid-item row">
        <select style="margin-left: 15px;" class="select-css col-md-2 Q" name = "rank">
            <option value="0">Select Value:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <input style="width: 80%; margin-left: 10px" placeholder="Rank to display" TYPE="text" NAME="RankDisplay" maxlength="30" required/>
        </div>
        <!--Profile Photo-->
        <div class="grid-item"><span class="Q">Profile Photo : </span></div>
        <input class="btn-prof" name="uploaded_file" id="file" type="file" accept="image/*">

        <!--Submit Button-->
        <div class="grid-item"></div><button class="allBtns btn-sub"  type="submit">SUBMIT</button>

        <div class="grid-item"><span class="Q"><?php if(isset($alertMessage)) echo $alertMessage;?> </span></div>
    </form>
</div>
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>