<!DOCTYPE html>
<head>
	<?php
    	include('header.php');
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
   include('nav.php');
?>
<!--Body-->

<body>
    <div class="fluid-container">
        <div class="text-center partition" style="margin-bottom: -200px; height: 900px" >
            <div class="partition"><span style="vertical-align: top; padding-top: 100px; text-align: center;">Member Login</span></div>
            <!--Login Form-->
            <form autocomplete="off" data-aos="zoom-in" data-aos-duration="1200" class="login-form item1">
                <div class="grid-item"><span class="Q">Reg No: </span></div>
                <div class="grid-item"><input style="margin-bottom: 1px" placeholder="AA00-BBB-000" type="TEXT"
                        NAME="first-name" pattern="[A-Za-z]{1,32}"
                        title="Username should only contain letters. e.g. John" required /><i class="fa fa-user icon"></i></div>
                <div class="grid-item"><span class="Q">Password: </span></div>
                <div class="grid-item"><input style="margin-top: 1px" placeholder="Password" type="TEXT"
                        NAME="last-name" pattern="[A-Za-z]{1,32}"
                        title="Username should only contain letters. e.g. John" required /><i class="fa fa-lock icon"></i></div>
                <div onclick="contactUs()" class="grid-item" style="width: 170px;"><span id="frgtPass">Forgot Password? &#128542; </span></div><br>
                <div id="contactUs" class="grid-item" style="width: 270px;"></div>
                <button style="margin-top: 8em;" class="btn-sub">Login</button>
            </form>
        </div>
    </div>
    
    <script src="JavaScript/aosb.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<!--footer-->
<?php
   include('footer.php');
?>