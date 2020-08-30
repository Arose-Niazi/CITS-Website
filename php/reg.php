<?php
    include('includes/connection.php');
    $sessions = $mysqli->query("SELECT Session FROM session")->fetch_all();

    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit']))
    {

        $ID = trim($_POST["ID"]);
        $Name = trim($_POST["Name"]);
        $ContactNo = trim($_POST["ContactNo"]);
        $Email = trim($_POST["Email"]);
        $Rank = trim($_POST["Rank"]);
        $Address = trim($_POST["Address"]);
        $Password = hash('whirlpool',trim($_POST["Password"]));
        if($Rank != -1)
        {
            $query = "
            INSERT INTO 
                users (
                    ID, Name, Password, Email, ContactNo, Address, `Rank`
                ) 
                value (
                    '$ID','$Name','$Password','$Email','$ContactNo','$Address',$Rank
                )

        ";

            if($mysqli->query($query))
            {
                $help_msg = "Added $Name<BR>";
                if(uploadImage("Images/Users/",$ID,-1))
                {
                    $help_msg .= "Uploaded Image";
                }
                updateLog($_SESSION['ID'],$_SESSION['Rank'],"Added employee $ID ($Name)",$mysqli);
            }
            else
                $help_msg = "User with $ID already exists";
        }
        else
            $help_msg = "Please select rank";
    }
?>