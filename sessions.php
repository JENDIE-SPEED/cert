<?php
    //Start session
    session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['company']) || (trim($_SESSION['company']) == '')) {
		if ($_SESSION['role']== 'accounts') {
            # code...
            header('location:headeraccount.php');
        } else {
            # code...
            header('location:desktopindex.php');
        }
        
		exit();
	}
?>