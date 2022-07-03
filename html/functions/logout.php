<?php

	session_start();
	unset($_SESSION['email']);
	unset($_SESSION['token']);
	unset($_SESSION['id']);

	addToLogs(getUserId(),"Signed out");

	header("Location: ../index.php");
