<?php
//constant variable
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','school');

//connect with database
try{
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if(!$connect){
		die("Connection failed.<br>");
	}
	else{
		//echo("Connected successfully.<br>");
	}
}
catch(Exception $e){
	die($e->getMessage());
}
//echo "abc.<br>";
?>