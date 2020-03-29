<?php

function logout()
{
	session_destroy();
	header("location: login.php");
}


?>