<?php
	require_once 'header.php';
	$sendMail = false;
	if($sendMail){
		require_once 'mail_complete.php';
	} else {
		require_once 'main_contact.php';
	}
	require_once 'footer.php';
?>