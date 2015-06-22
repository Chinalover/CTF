<?
if(isset($_COOKIE['cookies']))
{
	setcookie('cookies','',time()-3600,NULL, NULL, NULL, TRUE);
	$securityCookie=$_COOKIE['cookies'];
    $filename="/tmp/ctf/".$securityCookie;
    $result = @unlink ($filename); 
	echo '<script>location="index.php";</script>';
}

?>