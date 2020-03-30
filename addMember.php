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
        <div class="grid-item"><input class="read" style="width: 20%; padding-left: 10px; padding-right: 10px;" type="text" name="code" value="92" readonly> 
        <input style="width: 79.3%" placeholder="000-0000000" TYPE="text" NAME="CONATCT" maxlength="11" pattern="\d{3}[\-]\d{7}" required /></div>
        <!--Email-->
        <div class="grid-item"><span class="Q">Email<span class="req"> *</span> : </span></div>
        <div class="grid-item"><INPUT placeholder="Email" TYPE="TEXT" NAME="email" SIZE="30" MAXLENGTH="50"
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="" required /></div>
        <!--Reg No-->
        <!--Reg Number-->
        <div class="grid-item"><span class="Q">Registeration No.<span class="req"> *</span> :</span></div>
        <div class="grid-item"><input placeholder="AA00-BBB-000" TYPE="text" NAME="CONATCT" SIZE="30" maxlength="12" pattern="[A-Za-z][A-Za-z][0-9][0-9][\\-][A-Za-z][A-Za-z][A-Za-z][\\-][0-9][0-9][0-9]" required /></div>
        <!--Joined Date-->
        <div class="grid-item"><span class="Q">Joined Date<span class="req"> *</span> :</span></div>
        <div class="grid-item"><div class="md-form">
        <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker">
        <label for="date-picker-example">Try me...</label>
        </div></div>
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