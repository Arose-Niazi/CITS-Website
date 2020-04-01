
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
            <span class="container text-center">Name's Profile..</span>
        </div>
    </div>
    <div class="main-body container">
        <!--Image and Info-->
        <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="on">
        
        <div class="row part">
            <div class="col-md-5 ">
                <div class="change"><img id="img" class="person-img" src="Images/ImagesMembers/<?php echo $ID.$Img;?>.jpg"/></div>
                <input style="border: none" class="uploadImg" name="uploaded_file" id="file" type="file" accept="image/*">
            </div>
            <div class="col-md-7">
                <div class="grid-container">
                    <div class="grid-item item1 q">Contact: </div>
                    <input placeholder="<?php echo $Contact;?>" class="grid-item item2" pattern="[0][0-9]{3}[-][0-9]{7}$" title="Correct Format: 0000-0000000" name = "contact"></input>
                    <div class="grid-item q">Email: </div>
                    <input placeholder="<?php echo $Email;?>" class="grid-item" type = "email" name="email"></input>
                    <div class="grid-item q">Password: </div>
                    <input placeholder="Password" class="grid-item" type = "TEXT" name="password" pattern=".{6,32}" title="Your password should be more than 6 and less than 32 characters."></input>
                    <div class="grid-item q">About: </div>
                    <textarea rows="5" placeholder="<?php echo $About;?>" class="grid-item" pattern=".{10,250}" title="Your about should be more than 10 and less than 250 characters." name="about"></textarea>
                    <button style="margin-top: 8em;" class="btn-sub allBtns" type="submit" value="Save">Save</button>
                </div>
            </div>
        </div>
        </form>              
    </div>
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>
