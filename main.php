<?php
	session_start();
?>
<!DOCTYPE html>

<head>
	<?php
		include('includes/header.php');
	?>
    <link rel="stylesheet" href="CSS/Main.css">
    <link rel="stylesheet" href="CSS/maincover.css">
    <script src="JavaScript/Main.js"></script>
    <script src="JavaScript/testing.js"></script>
</head>

<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->
<body>
  <div class="Modern-Slider">
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="Images/cover.jpeg" alt="">
        <div class="info">
          <div>
            <h3>CITS</h3>
            <h5>COMSATS Information Technology Society</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="Images/03.jpg" alt="">
        <div class="info">
          <div>
            <h3>Geekspree</h3>
            <h5>The signature event of CITS. Student week is the high time when every society try its level best to provide entertainment 
              to students. So under the name of Geekspree CITS manage number of different games including Welcome party of CS department, 
              Futsal, Treasure Hunt, FIFA, and COD. For more details of each event go to EVENTS.</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="Images/1.jpeg" alt="">
        <div class="info">
          <div>
            <h3>Seminars</h3>
            <h5>CITS continues the legacy to provide knowledge to student alongside of entertainment. So every semester CITS arrange talks 
              on different topics of CS field where platform is provided to students to get knowledge about field, interact with field 
              experts and get to know roots and scope of fields. Sessions with developer of Facebook and Hult Prize are also arranged by 
              CITS in past semesters. </h5>
          </div>
        </div>
      </div>
    </div>
    <!-- // Item -->
    <!-- Item -->
    <div class="item">
      <div class="img-fill">
        <img src="Images/02.jpg" alt="">
        <div class="info">
          <div>
            <h3>Trips</h3>
            <h5>Another source of entertainment which CITS provide are trips which are being arranged by CITS every semester. Trips to 
              northern areas of Pakistan to Qila Rohtas, every semester CITS try to pitch a beautiful destination to student and affordable 
              package of 1 day trip. And guess what? Members of CITS get 10% discount to these trips too.</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- // Item -->
  </div>
    <br>
    <br>
    <div class="text-center heading" style="color: #6D7993">
        <span>Oppertunities provided to volunteers </span><i class="fa fa-exclamation"
            style="color: #6D7993; font-size: 120%"></i></div>
    </br>
    <!--Oppertunities-->
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                    <i class="fas fa-users heading-icon"></i><br><br>
                    <span class="heading"> Leadership</span></br>
                    <span class="description">Oppertunity of leading groups, teams and other members </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                    <i class='fas fa-people-carry heading-icon'></i></i><br><br>
                    <span class="heading"> Team Building</span></br>
                    <span class="description">Talent wins games, but teamwork win championships. </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                    <i class="fas fa-tasks heading-icon"></i></i><br><br>
                    <span class="heading"> Management</span></br>
                    <span class="description"> Leadership is working with goals and vision, Management is working with objectives </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                    <i class="fa fa-globe heading-icon"></i><br><br>
                    <span class="heading"> Social Build up</span></br>
                    <span class="description">It is not enough to be compassionate, you need to be social! </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                <i class="fa fa-user-plus heading-icon"></i><br><br>
                    <span class="heading"> Self-Confidence</span></br>
                    <span class="description">Each time we face our fear, we gain strength, courage, and confidence in the doing. </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hover-up">
                <div class="company-des">
                    <i class="fa fa-percent heading-icon"></i><br><br>
                    <span class="heading"> Discounts</span></br>
                    <span class="description">Get 10% off on every single event organized by CITS! </span>
                </div>
            </div>
        </div>
    </div>
    <div class="partition partition-main">
        <span class="container text-center">Our Events..</span>
    </div>
    <iframe id='frameid' src="testing.php" scrolling="no"></iframe>

  
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>
