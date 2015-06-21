<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '123456';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('ctf2015');
mysql_query('set NAMES utf8');
/*
$sql="select * from ctf_user;";
$result = mysql_query( $sql, $conn );
if(! $result )
{
	 
  die('Could not select: ' . mysql_error());
}
$data=mysql_fetch_array($result);
print_r($data);
*/
?>