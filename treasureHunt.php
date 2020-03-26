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
            <span class="container text-center">Treasure Hunt..</span>
        </div>
    </div>
    <div class="container main-body">
        <div data-aos="fade-left" data-aos-duration="900" class="proj-img"><img
                src="Images/events/treasureHunt.jpg" alt="5 Terre"></div>

        <div class="heading">Treasure Hunt</div>
        <span class="date">- Finding Clues -</span>
        <div class="partition-bar"></div>
        <p class="proj-des">
            Gaming events are signature events of CITS during student week. Number of indoor and outdoor games are arranged by CITS to 
            provide relaxation and extra curricular platform to students. Numbers of games are there in which students challenged each 
            other in groups or individually as well. One of the group outdoor game arranged by CITS is Treasure Hunt.<br>
            Treasure hunt is not less than a journey of Pirate within the COMSATS. As you are well aware that a Pirate starts with a clue 
            of treasure and try to reach the next clue through which he get the hint of another and the journey going on until he reached 
            the treasure.<br>
            Similarly treasure hunt in COMSATS is sort of competition between multiple pirate groups. Management provide them first clue 
            and then the journey begins. Every team try to decode the clue in order to reach the next one.
            But here came the twist as whats new in boring game of finding simple clues. On every clue there is a volunteer of CITS and if 
            any group wants to get clue, they have to complete the task or dare assigned by the volunteer. If two or more group reached at 
            same time the one how complete the task first will get clue. And at that point CITS ensure that there is no biasness done by 
            any volunteer to any group.<br>
            So the game is quite simple, Get clue, decode it, Reached the next point, Do the task, Get clue and repeat.
            So this loop going on until any of the team reached the treasure means last clue. And the one who reached first is the winner 
            of treasure, which is the prize money of up to 10K.<br>
            There are some rules which are also associated with this game.<br>
            • As this is group game so minimum a team consist of 3 members and maximum of 7.<br>
            • First clue is provided to every team while all others are hidden.<br>
            • Numbers of clues are preannounced.<br>
            • No one is allowed to help other team, by telling them about the clue number or something which help them to get clue early. 
            If something like this reported teams are directly disqualified.<br>
            • Jumping over the clues are not allowed. Means you have to collect all 4 clues before heading towards the 5th one. For that 
            purpose a paper is also given to teams on which every volunteer sign after giving clue to the team.<br>
            • Last but not the least, Once the team reached to the final clue, game ends and the winner is announced.<br>

            As you know total area of COMSATS is 185 acres, so if your team is energetic one and if you believe you know the campus very 
            well, CITS welcome you to come and take part in treasure hunt and become the next Pirate of Geekspree. </p>
            <!--Register-->
            <a href="registeration.php"><h6 class="animated infinite flash slower"><br><span style="color: rgb(56, 122, 212);">Get Yourselves Registered <span style=" font-size: 18px; font-weight: bold;">!</span></span></h6></a>  
            <div class="row">
            <div class="col-md-6">
                <div class="heading text-center" style="font-size: 20px; margin-top: 130px; text-transform: uppercase">
                    See More of our events:</div>
                <center><a href="events.php"><button class="more">See More<img
                                src="Images/arrowRY.png" width="20" height="20"></button></a>
                </center>
            </div>
            <div class="col-md-6">
                <div class="proj-imgs">
                    <img class="img-top" data-aos="example1" data-aos-duration="900"
                        src="Images/events/fifa.jpg">
                    <img class="img-bottom" data-aos="example2" data-aos-duration="900"
                        src="Images/events/party.jpg">
                    <img data-aos="example3" data-aos-duration="900" class="img-dbottom"
                        src="Images/events/futsal.jpeg">

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