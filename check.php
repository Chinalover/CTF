<?
if(isset($_COOKIE['cookies']))
{
  require_once 'dbconn.php';
  $securityCookie=$_COOKIE['cookies'];
  $filename="/tmp/ctf/".$securityCookie;
  $fp=fopen($filename,'r');
  $rand_read=fgets($fp);
  fclose($fp);
  $salt=987658123411873419465135623;
  $decryptCookie=base64_decode($securityCookie)^(md5($salt).$rand_read);
  if(!(list($user,$ip,$expire)=split("#",$decryptCookie)))
  {
    die('error');
  }
  if($user)
  {

  /*
设置已经答题的标记
已经答题：绿色
为答对题：红色
  */

  $sql="select QuesName from Questions,AnwserQues where Questions.QuesId=AnwserQues.QuesId and user='$user';";
  $result=mysql_query($sql, $conn );
  if(! $result )
  {
    die('error ');
  }
  $data=mysql_fetch_array($result);
  while($data)
  {
    $correctId='Bt'.$data['QuesName'];
    echo "<script type='text/javascript'>document.getElementById('$correctId').setAttribute('class','btn btn-success2')</script>"; 
    $data=mysql_fetch_array($result);
  }

////////////////////

  if(isset($_POST['submit']))
  {
    foreach ($_POST as $key => $value) 
    {
      if($key!='submit')
      {
        $quesname=$key;
        $queskey=$value;
      }
    }
    
    $sql="select * from Questions where QuesName='$quesname';";
    $result=mysql_query($sql, $conn );
    if(! $result )
    {
      die('error ');
    }
    $elementid=strtolower($quesname);
    if(mysql_num_rows($result)==1)
    {
      $data=mysql_fetch_array($result);
      if($data['QuesKey']==$queskey)
      {
        $quesid=$data['QuesId'];
        $quesscore=$data['QuesScore'];
        $answertime=date('Y-m-d H:i:s',time());
        $sql1="insert into AnwserQues values('$user',$quesid,'$answertime');";
        $result1=mysql_query($sql1, $conn );
        if(! $result1 )
        {
          echo "<script type='text/javascript'>alert('you have sumit!');</script>"; 
          die('error ');
        }
        $sql2="update ctf_user set UserScore=UserScore+$quesscore,LastAnswerTime='$answertime' where user='$user';";
        $result2=mysql_query($sql2, $conn );
        if(! $result1 or !$result2 )
        {
          die('error ');
        }
      
        echo "<script type='text/javascript'>alert('congratulations!');</script>"; 
      }
      else
        echo "<script type='text/javascript'>alert('not correct!');</script>"; 
    }

  }
    
  }

}
else
  echo "<script>alert('please login!');</script>";

?>