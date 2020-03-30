<?php
	session_start();
 ?>
<!DOCTYPE html>

<head>
	<?php
    	include('includes/header.php');
    ?>
    <link rel="stylesheet" href="CSS/profile.css">
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
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
                <div class="change"><img id="img" class="person-img" src="Images/ImagesMembers/FA18-BSE-010.png"/></div>
                <input style="border: none" class="uploadImg" id="file" type="file" accept="image/*">
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
   include('includes/footer.php');
?>
