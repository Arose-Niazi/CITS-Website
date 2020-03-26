<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="Awesome/css/all.css">
    <link rel="stylesheet" href="AwesomeOld/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/aos.css">
    <link rel="stylesheet" href="CSS/Theme.css">
    <link rel="stylesheet" href="CSS/reg.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="JavaScript/jQ.js"></script>
    <script src="JavaScript/bootStrap.js"></script>
    <script src="JavaScript/reg.js"></script>
    <script src="JavaScript/nav.js"></script> 
</head>
<!--Navbar-->
<?php
   include('nav.php');
?>
<!--Body-->
<body>
  
    <div class="fluid-container">

        <div class="partition">
            <span class="container text-center">Register Yourself..</span>
        </div>
    </div>
    <div class="container main-body">
        <div class="row">
            <div id="act" class="col-md-4">
                <span class="heading">Event You Want To Register In:</span>
                <div class="partition-bar"></div>
                <div id="act">
                    <div data-aos="fade-right" data-aos-duration="600"><p id="cod" onclick="cod()" class="events class">Call Of Duty</p></div>
                    <div data-aos="fade-right" data-aos-duration="700"><p id="fifa" onclick="fifa()" class="events">FIFA 2020</p></div>
                    <div data-aos="fade-right" data-aos-duration="800"><p id="treasureHunt" onclick="treasureHunt()" class="events">Treasure Hunt</p></div>
                    <div data-aos="fade-right" data-aos-duration="900"><p id="futsal" onclick="futsal()" class="events">Futsal</p></div>
                    <div data-aos="fade-right" data-aos-duration="1000"><p id="party" onclick="party()" class="events">Welcome Party</p></div>
                </div>
                
                <script>
                    var header = document.getElementById("act");
                    var btns = header.getElementsByClassName("events");
                    var current = document.getElementsByClassName("class");
                    for (var i = 0; i < btns.length; i++) {
                      btns[i].addEventListener("click", function() {
                      current[0].className = current[0].className.replace(" active", "");
                      this.className += " active";
                      current = document.getElementsByClassName("active");
                      });
                    }
                </script>
            </div>
            <div class="col-md-8">
                    <div id="eventForm"></div>
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
