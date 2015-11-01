<!-- MySQL DB config & connect-->
<?php
include('db.php');
include('mysql_connect.php');

$query = 'INSERT INTO `data` (`name`, `email`, `comment`) VALUES ( "'.mysql_real_escape_string($_POST['name']) .'","'.mysql_real_escape_string($_POST['email']) .'","'.mysql_real_escape_string($_POST['comment']) .'")';

$result=mysql_query($query);
include('mysql_close.php');
?>