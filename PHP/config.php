<?php
$database = array(
      'host' 	 => 'localhost',  
      'database' => 'im_programmer',        
      'username' => 'root',      
      'password' => '',    
);



$con = mysqli_connect($database['host'], $database['username'], $database['password'], $database['database']);
if (mysqli_connect_errno()){
	echo "Connect failed: " . mysqli_connect_error();
	exit;
}
mysqli_set_charset($con, 'utf8');
?>
