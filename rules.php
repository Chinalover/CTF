<!DOCTYPE html>
<html lang="en">
<head>
<title>ctf 2015</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="#"></a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
    <?php 
    if(isset($_COOKIE['user']))
    {
    ?>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  
    <span class="text"><? echo $_COOKIE['user']; ?>
    </span>
    <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="logout.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<?
}
else
{
?>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  
    <span class="text"> Welcome
    </span>
    <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="user.php"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="challenge.php"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Sign in</span></a></li>
  </ul>
</div>
<? } ?>

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
  <li ><a href="index.php"> <span>CTF-2015</span></a> </li>
  <li class="active"><a href="rules.php"> <span>RULES</span></a> </li>
  <li class="submenu "> <a href="#"> <span>CHALLENGE</span></a>
  <ul>
        <li><a href="basic.php">basic</a></li>
        <li><a href="penetration.php">penetration</a></li>
        <li><a href="reverse.php">reverse</a></li>
        <li><a href="pwn.php">pwn</a></li>
        <li><a href="mis.php">mis</a></li>
      </ul>
  <li><a href="rank.php"> <span>RANK</span></a> </li>
  <li><a href="notice.php"> <span>NOTICE</span></a> </li>
  <li><a href="study-guide.php"> <span>STUDY-GUIDE</span></a> </li>
</li>

  </ul>
</div>



<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">CTF-2015</a> <a href="#" class="current">RULES</a> </div>
    
</div>

<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">

          <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
                <h5>rules</h5>
              </div>
              
 <div class="widget-content">
 <div class="myfont">               
1、It is not allowed for teams with independent accounts to cooperate or discuss about the contest problems.<br>
2、It is not allowed to attack the competition infrastructure. If flaws in the infrastructure are found, please report to us.<br>
3、The registration units is team. Domestic player can login in with XCTF account.<br>
4、For placing teams to receive prizes, they must submit a full writeup of each challenge explaining how it was solved.<br>
5、Teams breaking rules may be penalized or excluded from the competition.<br>
6、The final interpretation right of this event is reserved by the commitee.<br>
</div>
    </div>
            
          </div>
      </div>

  </div>
</div>
</div>

 </div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> ctf platform by youmeng <a href="#" ></a> - Collect from <a href="#"></a>NET </div>
</div>
<!--end-Footer-part-->

<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.wizard.js"></script>
</body>
</html>
