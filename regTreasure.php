<?php
	session_start();
 ?>
<!DOCTYPE html>

<head>
	<?php
        include('includes/header.php');
        include('php/reg.php');

    ?>
    <link rel="stylesheet" href="CSS/reg.css">
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
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
                    <div data-aos="fade-right" data-aos-duration="600"> <a class="events" id="cod" href='regCOD.php'>Call Of Duty</a></p></div>
                    <div data-aos="fade-right" data-aos-duration="700"> <a class="events" id="fifa" href='regFifa.php'>FIFA 2020</a></p></div>
                    <div data-aos="fade-right" data-aos-duration="800"> <a class="events" id="treasureHunt" href='regTreasure.php'>Treasure Hunt</a></p></div>
                    <div data-aos="fade-right" data-aos-duration="900"> <a class="events" id="futsal" href='regFutsal.php'>Futsal</a></p></div>
                    <div data-aos="fade-right" data-aos-duration="1000"> <a class="events" id="party" href='regParty.php'>Welcome Party</a></p></div>
                </div>
                  
            </div>
            <div class="col-md-8">
                    <div id="eventForm">
                    <form autocomplete="off">
                        <!--Team name-->
                        <div class="grid-item"><span class="Q">Team Name<span class="req"> *</span> : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Team Name" type="TEXT" NAME="teamName" pattern="{1,32}" title="Team name can contain letters and numbers. e.g. Team1" required /></div>
                        <!--Leader Name-->
                        <div class="grid-item"><span class="Q">Team Leader Name<span class="req"> *</span> : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Leader Name" type="TEXT" NAME="leaderName" pattern="[A-Za-z]{1,32}" title="Name can contain letters. e.g. John" required /></div>
                        <!--CNIC-->
                        <div class="grid-item"><span class="Q">CNIC (Team Leader)<span class="req"> *</span> :</span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="00000-0000000-0" TYPE="TEXT" NAME="cnic" maxlength="15" pattern="\\d{5}[\\-]\\d{7}[\\-]\\d{1}" title="Enter CNIC" required /></div>
                        <!--Contact Number-->
                        <div class="grid-item"><span class="Q">Contact No.<span class="req"> *</span> :</span></div>
                        <div class="grid-item">
                            <input class="read" style="width: 20%; padding-left: 10px; padding-right: 10px;" type="text" name="code" value="+92"> 
                            <input style="width: 79.3%" placeholder="000-0000000" TYPE="text" NAME="contactNo" maxlength="11" pattern="\\d{3}[\\-]\\d{7}" required />
                        </div>
                        <!--Members Names-->
                        <div class="grid-item"><span class="Q">Member Name<span class="req"> *</span> : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member1" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John" required /></div>
                        <!--2-->
                        <div class="grid-item"><span class="Q">Member Name : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member2" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John"/></div>
                        <!--3-->
                        <div class="grid-item"><span class="Q">Member Name : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member3" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John"/></div>
                        <!--4-->
                        <div class="grid-item"><span class="Q">Member Name : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member4" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John"/></div>
                        <!--5-->
                        <div class="grid-item"><span class="Q">Member Name : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member5" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John"/></div>
                        <!--6-->
                        <div class="grid-item"><span class="Q">Member Name : </span></div>
                        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Member Name" type="TEXT" NAME="member6" pattern="[A-Za-z]{1,32}"title="Name can contain letters. e.g. John"/></div>
                        <!--session-->
                        <div class="grid-item"><span class="Q">Session<span class="req"> *</span> : </span></div>
                        <div class="grid-item">
                            <select style="margin-bottom: 1px" NAME="session">
                                <?php 
                                foreach ($sessions AS $s)
                                    echo "<option value='$s[0]'> $s[0] </option>";
                                ?>
                            </select>
                        </div>
                        <!--Submit Button-->
                        <div class="grid-item"></div><button name="Submit" class="allBtns btn-sub">SUBMIT</button>
                    </form>
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
