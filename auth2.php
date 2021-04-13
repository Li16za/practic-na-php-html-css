<?php
	include("sql.php");
	session_start();
	 
	function Destroy() {
	    unset($_SESSION['USERNAME']);
	    header("location: login2.php");
	}
	 
	if(isset($_SESSION['UID']) && isset($_SESSION['USERNAME'])) {
	    $UID = $_SESSION['UID'];
	    $username = $_SESSION['USERNAME'];
	    $qry = "SELECT * FROM `users` WHERE `Username` = '" . $username . "'";
	    $result = $conn->query($qry);
	    if($result->num_rows!= 1) {
	    Destroy(); 
	    }
	} 
	else { 
		header("location: menugl2.html");
	}
?>