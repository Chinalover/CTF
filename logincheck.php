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

//
/*security cookies develop~
(username+ip+expiration+salt) hash...

*/

$salt=987658123411873419465135623;
$rand=uniqid(rand());
$user=$data['user'];
$expire=time();
$ip=addslashes($_SERVER["REMOTE_ADDR"]);
$cookies=$user.'#'.$ip.'#'.$expire;
$securityCookie=base64_encode($cookies^(md5($salt).$rand));
$filename="/tmp/ctf/".$securityCookie;


if($data)
{	
	$fp=fopen($filename,'w');
	fwrite($fp,$rand);
	fclose($fp);
	setcookie("cookies",$securityCookie,time()+3600,NULL, NULL, NULL, TRUE);
    echo"<script type='text/javascript'>alert('登陆成功');location='index.php';</script>"; 

}
else
  echo"<script type='text/javascript'>alert('登陆失败');location='login.php';</script>"; 

mysql_close($conn);
?>