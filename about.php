<!DOCTYPE html>
<head>
	<?php
    	include('header.php');
	?>
	<link rel="stylesheet" href="CSS/about.css">
</head>
<?php
   include('nav.php');
?>
<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">About Us..</span>
        </div>
    </div>

    <div class="container parts">
        <div class="main-body part">
            <div data-aos="zoom-in" data-aos-duration="1000" class="heading" style="font-size: 1.8em">- Our Mission -
            </div>
            <p class="text-center">An IT society is a proper platform which delivers not only curricular material but also professional skills.</p>
            <p class="text-justify">COMSATS Information Technology Society will ensure that all of its members have equal opportunity for 
                learning the required skills and experience. Learning must be designed in such a way that everyone has access to it. 
                Technology has changed the way teachers teach, offering us effective ways to reach students through means such as Seminars, 
                Workshops and Competitions. <br>
                The theme of this society is to "Learn and Invent". The purpose of this society is to ensure that the students 
                of COMSATS who are in Information Technology related discipline, have technical knowledge of what they study during their degree. 
                CITS will develop professional skills regarding computer sciences and Information technology. CITS will polish students professional 
                face in the practical world and skills to the best. <br>
                This society will also give them a platform to show their hidden talents and show the world of what they are capable when they are 
                given a platform to "learn and invent". <br>
                An IT society is a proper platform which delivers not only curricular material but also professional skills. Information Technology 
                which is actually a development, design, study, implementation and management of computer related information.</p>
        </div>
    </div>
	<?php
		$mysqli = new mysqli("localhost", "arosenia_aeman", "YZOwr_=6(Ih@", "arosenia_cits"); 
	?>
	<?php 
		$rankChecks = array();
		$rankChecks[0] = 10;
		$rankChecks[1] = 5;
		$rankChecks[2] = 4;
		$rankChecks[3] = 1;
		$rankChecks[4] = 0;
		
		$rankDis = array();
		$rankDis[0] = "Executive Committee";
		$rankDis[1] = "Heads";
		$rankDis[2] = "Members";
		$rankDis[3] = "Ex-Members";
		
		
		for($i = 1; $i<5; $i++)
		{
		
			$query = "SELECT * FROM Members WHERE Rank > ".$rankChecks[$i]." AND Rank <= ".$rankChecks[$i-1]." ORDER BY Rank DESC";
			if ($result = $mysqli->query($query)) 
			if(mysqli_num_rows($result) > 0){
				
				echo'
				<div class="container parts">
					<div class="main-body part">
						<div data-aos="zoom-in" data-aos-duration="1000" class="heading" style="font-size: 1.8em">- '.$rankDis[$i-1].' -
						</div>';
						
						$loopcontinue = true;
						while($loopcontinue)
						{
							echo '<div class="row">';
							for($x = 0; $x<2; $x++)
							{
								if($row = $result->fetch_assoc())
								{
									$ID = $row["ID"];
									$Name = $row["Name"];
									$RankDisplay = $row["RankDisplay"];
									$About = $row["About"];
									
									echo '
										<div class="col-md-6 col-sm-6">
											<div data-aos="fade-up" class="block">
												<center><img class="person" src="Images/ImagesMembers/'.$ID.'.png"></center>
												<p class="heading text-center" style="font-size: bolder">'.$Name.'</p>
												<p class="post text-center">'.$RankDisplay.'</p>
												<p class="description text-justify text-center">'.$About.'</p>
											</div>
										</div>';
								}
								else $loopcontinue = false;
							}
							echo '</div>';
						}
					echo '</div>';	
				echo '</div>';		
			}
		}	
	?>
	<script src="JavaScript/aosb.js"></script>
    <script>
        AOS.init();
    </script>
</body> 
<!--footer-->
<?php
   include('footer.php');
?>