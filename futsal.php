<?php
	session_start();
 ?>
<!DOCTYPE html>

<head>
	<?php
    	include('includes/header.php');
    ?>
    <link rel="stylesheet" href="CSS/Proj.css">
    <script src="CSS/animateRg.css"></script>
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->

<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Futsal..</span>
        </div>
    </div>
    <div class="container main-body">
        <div data-aos="fade-left" data-aos-duration="900" class="proj-img"><img
                src="Images/events/futsal.jpeg" alt="5 Terre"></div>

        <div class="heading">Futsal</div>
        <span class="date">- A Football Game -</span>
        <div class="partition-bar"></div>
        <p class="proj-des">
            A Football Game played on a Smaller Field with 5 Players on each side including a Goalkeeper. 2 Substitute Players can also 
            be named in a Team but they are Optional as the game can be played with 5 Players without a Substitution. In a normal Football 
            Game, when the Ball goes out from the sides of the Pitch, a "Throw-In" is taken while in Futsal "Kick-In" is preffered. The format 
            of a Futsal Tournament may differ but generally it consists of a Group Stage followed by Knockout Stage.

            Detailed Rules:</br>
            • It is Compusory for every team to have atleast 5 players and not more than 8 (5 Playing and 3 as Substitutes).</br>
            • Full time of a game may vary depending on Time available and Teams but generally a Match has a Half Time between 
            5 - 7 minutes in group stage whereas a Half Time of 10 minutes in Knockout Stages.<br>
            • During a game, a Harsh foul declared by Referee can result in a Yellow or Red Card for the Player who commited the Foul 
            (depending on Severity of Foul) where Yellow Card is a Warning and Red Card sends the Player off and the team continues the game 
            without the Player who is Sent Off.<br>
            • A Foul may result in a Free Kick to the other Team if Foul was commited anywhere on the field except the Goalkeeper D, in which 
            case, a Penalty Kick is awarded to the other Team from the Penalty Spot.<br>
            • In Group Stages, a Group consists of 4 Teams where each team plays the other 3 Teams once. Top 2 Teams Qualify for Knockout Stages.<br>
            • Point System in a Group Stage is as follows:<br>
                    - Win = 3 Points<br>
                    - Draw = 1 Point<br>
                    - Lose = 0 Points<br>
            • If at the end of Group Stages, 2 Teams tie for qualification, following things are considered in the sequence (If top condition 
            is satisfied, others conditions will not be considered.):<br>
                    - More Goal Difference<br>
                    - More Goal Scored<br>
                    - Less Goals Conceeded<br>
            and if still the Difference remains same, a Penalty Shootout is carried out between the 2 Teams.<br>
            • In Knockout Stages, the Team who wins the Match proceeds to the Next Round.<br>
            • If at the end of a Knockout Match, Scores are Tied, 1 extra minute is given before Penalty Shootout.<br>
            • Penalty Shootout consists of 3 kicks for each Team from the Penalty Spot and Keeper from other Team trying 
            to save them. If after 3 kicks, scores are same, the shootout goes to "Sudden Death" where in both teams single kicks, if a 
            team scores and saves the other team's kick, they Qualify. Sudden Death continues until a Team Wins.</p>
        <!--Register-->
        <a href="registeration.php"><h6 class="animated infinite flash slower"><br><span style="color: rgb(56, 122, 212);">Get Yourselves Registered <span style=" font-size: 18px; font-weight: bold;">!</span></span></h6></a>  
        <!--More events-->
        <div class="row">
            <div class="col-md-6">
                <div class="heading text-center" style="font-size: 20px; margin-top: 130px; text-transform: uppercase">
                    See More of our events:</div>
                <center><a href="events.php"><button class="more">See More<img
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
   include('includes/footer.php');
?>