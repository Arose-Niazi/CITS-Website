<?php
	session_start();
 ?>
<!DOCTYPE html>
<head>
	<?php
    	include('includes/header.php');
    ?>
    <link rel="stylesheet" href="CSS/contact_us.css">
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->
<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Contact Us..</span>
        </div>
    </div>
    <div style="margin-top: 80px">
        <div data-aos="zoom-in-right" data-aos-duration="1000" class="text-center heading"
            style=" font-size: 20px">
            <span style="color: rgb(56, 122, 212);">Any Questions <span style=" font-size: 18px; font-weight: bold;"> ?</span></br>Feel Free To Ask
            </span><i class="fa fa-exclamation" style="color:  rgb(56, 122, 212); font-size: 18px"></i>
        </div>
        <div class="slope">
            <div class="container">
            <form autocomplete="off" data-aos="zoom-in" data-aos-duration="1200" class="contact-form item1">
                <div class="grid-item"><span class="Q">First Name : </span></div>
                <div class="grid-item"><input style="margin-bottom: 1px" placeholder="First Name" type="TEXT"
                        NAME="first-name" pattern="[A-Za-z]{1,32}"
                        title="Username should only contain letters. e.g. John" required /></div>
                <div class="grid-item"><span class="Q">Last Name : </span></div>
                <div class="grid-item"><input style="margin-top: 1px" placeholder="Last Name" type="TEXT"
                        NAME="last-name" pattern="[A-Za-z]{1,32}"
                        title="Username should only contain letters. e.g. John" required /></div>
                <div class="grid-item"><span class="Q">Email : </span></div>
                <div class="grid-item"><INPUT placeholder="Email" TYPE="TEXT" NAME="email" SIZE="30" MAXLENGTH="50"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="" required /></div>
                <div class="grid-item"><span class="Q">Contact No. :</span></div>
                <div class="grid-item"><input class="read" style="width: 20%; padding-left: 10px; padding-right: 10px;" type="text"
                        name="code" value="+92" readonly>
                    <input style="width: 78%" placeholder="000-0000000" TYPE="TEXT" NAME="CONATCT" SIZE="30" MAX
                        LENGTH="50" pattern="\d{3}[\-]\d{7}" required /></div>
                <div class="grid-item"><span class="Q">Your message :</span></div>
                <div class="grid-item"><textarea placeholder="Send us a message" rows=5 name="comments"
                        required></textarea></div>
                <div class="grid-item"></div><button class="allBtns btn-sub">SUBMIT</button>
                </form>
            <div class="text-slope item2">
                <span class="h">-Our Location</span>
                <div class="heading" style="color: white; font-size: 20px;">COMSATS UNIVERSITY ISLAMABAD</div>
                <div class="partition-bar" style="background-color: whitesmoke; margin-bottom: 0px"></div>
                </br>
                Lahore Campus</br>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="JavaScript/aosb.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>