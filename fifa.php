<!DOCTYPE html>
<head>
	<?php
    	include('header.php');
    ?>
    <link rel="stylesheet" href="CSS/Proj.css">
    <script src="JavaScript/animateRg.js"></script>
</head>

<!--Navbar-->
<?php
   include('nav.php');
?>
<!--Body-->

<body>
    <div class="fluid-container">

        <div class="partition">
            <span class="container text-center">FIFA 2020..</span>
        </div>
    </div>
    <div class="container main-body">
        <div data-aos="fade-left" data-aos-duration="900" class="proj-img"><img
                src="Images/events/fifa.jpg" alt="5 Terre"></div>

        <div class="heading">FIFA 2020</div>
        <span class="date">- A Vedio Game -</span>
        <div class="partition-bar"></div>
        <p class="proj-des">
            • Recommend 6 min per half till quarterfinals 1 match<br>
            • if teams are not in even number,  goal difference between three teams will be counted.<br>
            • In case of goal difference is the same, the match will be on the head to head and then fair play rules.<br>
            • Handball and Injuries will be off.<br>
            • The default camera will be used normally unless both players agree to change it.<br>
            • The latest update of squads will be used.<br>
            • You can choose your preferred controls; Manual, Semi or Assisted.<br>
            • The tactical defending mode only.<br>
            • Controllers are supplied by organizers. It is the responsibility of all Players to be familiar with the controller’s 
            functions and mode of operation.<br>
            • If a controller is defective, a Player can pause the game and notify the referee once only, if the player agrees the problem 
            is fixed he may not pause again.<br>
            • The referee will determine the controller status in making such a decision. If a Player plays with a defective controller, 
            all results are nevertheless valid.<br>
            • You can bring your own controllers.<br>
            • You cannot select any fictional or All-Star teams. Every player is allowed to pick their preferred team. Teams can be picked 
            before the start of the game. Players are allowed to use multiple teams throughout the tournament as they please. It is accepted
             to have the same teams play against each other (e.g. Barcelona).In that case, the ‘away’ player will have to pick the Away 
             Jersey for that team. In general, ‘away’ players are responsible for picking the jersey that does not resemble the home team 
             jersey.<br>
            • Custom Formations and editing player position within a formation is not allowed.<br>
            • A player CANNOT pause the game unless the ball is in their possession. If you pause the game intentionally, you may be warned 
            or disqualified at the referee’s discretion. The second warning will disqualify you automatically. You have 40 seconds after 
            the pause.</p>
        <!--Register-->
                <a href="registeration.html"><h6 class="animated infinite flash slower"><br><span style="color: rgb(56, 122, 212);">Get Yourselves Registered <span style=" font-size: 18px; font-weight: bold;">!</span></span></h6></a>  
        <!--More events-->
        <div class="row">
            <div class="col-md-6">
                <div class="heading text-center" style="font-size: 20px; margin-top: 130px; text-transform: uppercase">
                    See More of our events:</div>
                <center><a href="events.html"><button class="more">See More<img
                                src="Images/arrowRY.png" width="20" height="20"></button></a>
                </center>
            </div>
            <!--Images of more events-->
            <div class="col-md-6">
                <div class="proj-imgs">
                    <img class="img-top" data-aos="example1" data-aos-duration="900"
                        src="Images/events/treasureHunt.jpg">
                    <img class="img-bottom" data-aos="example2" data-aos-duration="900"
                        src="Images/events/cod.jpeg">
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