<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Theme.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="JavaScript/jQ.js"></script>
    <script src="JavaScript/bootStrap.js"></script>
    <script src="JavaScript/nav.js"></script>
</head>
<!--Navbar-->
<div id="nav-placeholder"></div>
    <script>
        $(function(){
        $("#nav-placeholder").load("nav.html");
        });
    </script>
<!--Body-->

<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Edit Profile..</span>
        </div>
    </div>
    <div class="main-body container">
        <!--Image and Info-->
        <div class="row part">
            <div class="col-md-5 ">
                <div id="change" class="change"><img id="img" class="person-img" src="Images/ImagesMembers/FA18-BSE-010.png"/>
                <div id="changePhoto" class="changePhoto">Change Photo</div></div>
            </div>
            <div class="col-md-7">
                <div class="grid-container">
                    <div class="grid-item item1 q">Contact: </div>
                    <input placeholder="0000-0000000" class="grid-item item2"></input>
                    <div class="grid-item q">Email: </div>
                    <input placeholder="abc@gmail.com" class="grid-item"></input>
                    <div class="grid-item q">About: </div>
                    <textarea rows="5" placeholder="About" class="grid-item"></textarea>
                </div>
            </div>
        </div>        
    </div>
</body>
<!--footer-->
<?php
   include('footer.php');
?>
