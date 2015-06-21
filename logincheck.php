<?php
header("Content-Type: text/html; charset=utf-8");
require_once 'dbconn.php';


$user=$_POST['username'];
$pass=md5($_POST['password']);

$sql="select * from ctf_user where user='$user' and pass='$pass'";
$result = mysql_query( $sql, $conn );
if(! $result )
{
   
  die('Could not select: ' . mysql_error());
}

$data=mysql_fetch_array($result);
if($data)
{	
	setcookie("user",$data['user'],time()+3600);
    echo"<script type='text/javascript'>alert('登陆成功');location='index.php';</script>"; 

}
else
  echo"<script type='text/javascript'>alert('登陆失败');location='login.php';</script>"; 

mysql_close($conn);
?>