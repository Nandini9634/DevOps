<?php
	// Login Into Facebook
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		echo "Login Details are as follows::";
		echo nl2br("\n");
		echo "You have entered email::  ".$email;
		echo nl2br("\n");
		echo "You have entered password::  ".$pass;
	}
	// Register Into Facebook
	elseif(isset($_POST['registerbutton']))
	{
		$first=$_POST['firstname'];
		$last=$_POST['lastname'];
		$email=$_POST['email'];
    $remail=$_POST['remail'];
		$pass=$_POST['password'];
		echo "Registeration Details are as follows::";
		echo nl2br("\n");
		echo "First Name:: ".$first;
		echo nl2br("\n");
		echo "Last Name:: ".$last;
		echo nl2br("\n");
		echo "Email id:: ".$email;
		echo nl2br("\n");
		echo "Password:: ".$pass;
		echo nl2br("\n");
	}
	else
	{
		echo "Connection Not Established";
	}
?>
