<?php

function _bot_detected() {
/* detecteaza daca pe site se afla un robot sau un utilizator */
	  if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/bot|crawl|slurp|spider/i', $_SERVER['HTTP_USER_AGENT'])) {
		return TRUE;
	  }
	  else {
		return FALSE;
	  }
}

function getClientIP(){
	if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
		return  $_SERVER["HTTP_X_FORWARDED_FOR"];  
	}else if (array_key_exists('REMOTE_ADDR', $_SERVER)) { 
		return $_SERVER["REMOTE_ADDR"]; 
	}else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
		return $_SERVER["HTTP_CLIENT_IP"]; 
	} 

	return '';
}


if (!_bot_detected())
{
	$mysqli = new mysqli('localhost', 'user', 'pass', 'db');
	if (mysqli_connect_errno()) {
	  exit('Connect failed: '. mysqli_connect_error());
	}

	$ip=getClientIP();
	$concurent=$_POST['concurent'];
	$cookie_name = "vot";
	if(!isset($_COOKIE[$cookie_name])) {
			$cookie_value = $concurent;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			$sql=$mysqli->prepare("INSERT INTO `voturi` (ip,concurent)
			VALUES(?,?)");
			$sql->bind_param("ss",$ip,$concurent);
			if (!$sql->execute())
			{
				echo 'Eroare!';
			}
			else
			{
				echo 'Votul dumneavoastra a fost atribuit concurentului '.$concurent;
			}
			$sql->close();
	} 
	else 
	{
		echo 'Ati votat deja pentru '.$_COOKIE[$cookie_name];
	}
	
	$ip=getClientIP();
	$concurent=$_POST['concurent'];

	$sql=$mysqli->prepare("INSERT INTO `voturi` (ip,concurent)
	VALUES(?,?)");
	$sql->bind_param("ss",$ip,$concurent);
	if (!$sql->execute())
	{
		echo 'Eroare!';
	}
	else
	{
		echo 'Votul dumneavoastra a fost atribuit concurentului '.$concurent;
	}
	$sql->close();

	$mysqli->close();
}	
else
{
	echo 'Robot';
}

?>