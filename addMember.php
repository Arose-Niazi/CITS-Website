<?php
	session_start();
 ?>
<!DOCTYPE html>

<head>
	<?php
    	include('includes/header.php');
    ?>
    <link rel="stylesheet" href="CSS/reg.css">
    <script src="JavaScript/addMember.js"></script>
</head>
<!--Navbar-->
<?php
   include('includes/nav.php');
?>
<!--Body-->
<body>
    <div class="fluid-container">
        <div class="partition">
            <span class="container text-center">Add Member..</span>
        </div>
    </div>
    <div class="container main-body">
    <form autocomplete="off">
        <!--Name-->
        <div class="grid-item"><span class="Q">Name<span class="req"> *</span> : </span></div>
        <div class="grid-item"><input style="margin-bottom: 1px" placeholder="Name" type="TEXT" NAME="team-name" pattern="[A-Za-z]{1,32}" title="Name can contain letters only. e.g. John" required /></div>
        <!--Contact Number-->
        <div class="grid-item"><span class="Q">Contact No.<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input class="read" style="width: 20%; padding-left: 10px; padding-right: 10px;" type="text" name="code" value="0" readonly> 
        <input style="width: 79.3%" placeholder="000-0000000" TYPE="text" NAME="CONATCT" maxlength="11" pattern="\d{3}[\-]\d{7}" required /></div>
        <!--Email-->
        <div class="grid-item"><span class="Q">Email<span class="req"> *</span> : </span></div>
        <div class="grid-item"><INPUT placeholder="Email" TYPE="TEXT" NAME="email" SIZE="30" MAXLENGTH="50"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="" required /></div>
        <!--Reg Number-->
        <div class="grid-item"><span class="Q">Registeration No.<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input placeholder="AA00-BBB-000" TYPE="text" NAME="CONATCT" SIZE="30" maxlength="12" pattern="[A-Za-z][A-Za-z][0-9][0-9][\\-][A-Za-z][A-Za-z][A-Za-z][\\-][0-9][0-9][0-9]" required /></div>
        <!--Joined Semester-->
        <div class="grid-item"><span class="Q">Joined In Semester<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input placeholder="AA00" TYPE="text" NAME="semester" SIZE="30" maxlength="4" pattern="[A-Za-z][A-Za-z][0-9][0-9]" required /></div>
        <!--Rank-->
        <div class="grid-item"><span class="Q">Rank.<span class="req"> *</span> :</span></div>
        <div class="grid-item row">
        <select class="select-css col-md-3 Q">
            <option value="0">Select Value:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <select class="select-css col-md-6 Q">
            <option value="0">Select Rank:</option>
            <option value="1">President</option>
            <option value="2">Vice President</option>
            <option value="3">General Secretary</option>
            <option value="4">Treasurer</option>
            <option value="5">Head</option>
            <option value="6">Member</option>
            <!--<option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>-->
        </select>
        </div>
        <!--Profile Photo-->
        <div class="grid-item"><span class="Q">Profile Photo : </span></div>
        <input class="btn-prof" id="file" type="file" accept="image/*">

        <!--Submit Button-->
        <div class="grid-item"></div><button class="allBtns btn-sub">SUBMIT</button>
    </form>
</div>
</body>
<!--footer-->
<?php
   include('includes/footer.php');
?>