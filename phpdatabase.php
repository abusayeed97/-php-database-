<?php
$host = 'localhost';
$username = 'sayeed';
$password = 'sayeed10';

$dbname = 'online bus ticket management';

$con = mysql_connect($host, $username, $password);
$selectdb = mysqli_select_db($con, $dbname);

if($selectdb) {
	echo 'selectdb';

}else{
	echo "not selected";
}

?>

<!DOCTYPE HTML>

