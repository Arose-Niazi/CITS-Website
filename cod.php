<!DOCTYPE html>

<head>
	<?php
    	include('header.php');
    ?>
    <link rel="stylesheet" href="CSS/Proj.css">
    <script src="CSS/animateRg.css"></script>
</head>
<!--Navbar-->
    <?php
        include('nav.php');
    ?>
<!--Body-->
<body>
    <div class="fluid-container">

        <div class="partition">
            <span class="container text-center">COD 4..</span>
        </div>
    </div>
    <div class="container main-body">
        <div data-aos="fade-left" data-aos-duration="900" class="proj-img"><img
                src="Images/events/cod.jpeg" alt="5 Terre"></div>

        <div class="heading">COD 4</div>
        <span class="date">- A Vedio Game -</span>
        <div class="partition-bar"></div>
        <p class="proj-des">
            • Maps will be decided on behalf of the Ban-Ban Ban-Ban Rule (Popular maps only).<br>
            • Final Match map will be decided on behalf of the Pick-Pick Ban-Ban Rule (Popular maps only).<br>
            • Each team consists of five (5) players. <br>
            • The entire team roster must be picked in advance on-line before tournament sign-ups are closed. <br>
            • Players can sign up and play for only one team. <br>
            • Teams must have a unique name.<br>
            • Final and semi-finals would be the best of three matches.<br>
            • All other rounds will have one match.<br>
            • Game type:  Search and Destroy.</p>
        <!--Register-->
        <a href="registeration.php"><h6 class="animated infinite flash slower"><br><span style="color: rgb(56, 122, 212);">Get Yourselves Registered <span style=" font-size: 18px; font-weight: bold;">!</span></span></h6></a>  
        <!--More Projects-->
        <div class="row">
            <div class="col-md-6">
                <div class="heading text-center" style="font-size: 20px; margin-top: 130px; text-transform: uppercase">
                    See More of our events:</div>
                <center><a href="events.php"><button class="more">See More<img
                                src="Images/arrowRY.png" width="20" height="20"></button></a>
                </center>
            </div>
            <!--Images of more projects-->
            <div class="col-md-6">
                <div class="proj-imgs">
                    <img class="img-top" data-aos="example1" data-aos-duration="900"
                        src="Images/events/fifa.jpg">
                    <img class="img-bottom" data-aos="example2" data-aos-duration="900"
                        src="Images/events/treasureHunt.jpg">
                    <img data-aos="example3" data-aos-duration="900" class="img-dbottom"
                        src="Images/events/party.jpg">

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
   include('footer.php');
?>