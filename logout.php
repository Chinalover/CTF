<?
if(isset($_COOKIE['user']))
{
	setcookie('user','',time()-3600);
	echo '<script>location="index.php";</script>';
}

?>