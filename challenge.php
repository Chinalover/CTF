<!DOCTYPE html>
<html lang="en">
<head>
<title>CTF-2015</title>
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
        <li><a href="user.php"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="challenge.php"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
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
  <li><a href="rules.php"> <span>RULES</span></a> </li>
  <li class="submenu active"> <a href="#"> <span>CHALLENGE</span></a>
  <ul>
        <li class="active"><a href="basic.php">basic</a></li>
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> HOME</a> <a href="#">CTF-2015</a> <a href="#" class="current">CHALLENGE</a> </div>
    <h1>CHALLENGE FOR FUN!<br></h1>
</div>

<div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">

<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
            <h5>Basic</h5>
          </div>

          <div class="widget-content"> 
            <a href="#BASIC10" id="BtBASIC10" data-toggle="modal" class="btn btn-success">BASIC10</a> 
            <a href="#BASIC20" id="BtBASIC20" data-toggle="modal" class="btn btn-success">BASIC20</a>
            <a href="#BASIC30" id="BtBASIC30" data-toggle="modal" class="btn btn-success">BASIC30</a>
            <a href="#BASIC40" id="BtBASIC40" data-toggle="modal" class="btn btn-success">BASIC40</a>
            
            <div id="BASIC10" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="" method="post">
                      <b>key:</b> <input type="text"  name="BASIC10" placeholder="input your key">
                      <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                          
                      </form>

                </p>
              </div>
            </div>
          
          <div id="BASIC20" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="BASIC20" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            </div>
          
          <div id="BASIC30" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="BASIC30" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="BASIC40" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="BASIC40" placeholder="input your key">
                          <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            </div>
          </div>
</div>

<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
            <h5>Penetration</h5>
          </div>

          <div class="widget-content"> 
            <a href="#PENE10" id="BtPENE10" data-toggle="modal" class="btn btn-success">PENE10</a> 
            <a href="#PENE20" id="BtPENE20" data-toggle="modal" class="btn btn-success">PENE20</a>
            <a href="#PENE30" id="BtPENE30" data-toggle="modal" class="btn btn-success">PENE30</a>
            <a href="#PENE40" id="BtPENE40" data-toggle="modal" class="btn btn-success">PENE40</a>
            
            <div id="PENE10" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="" method="post">
                      <b>key:</b> <input type="text"  name="PENE10" placeholder="input your key">
                      <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                          
                      </form>

                </p>
              </div>
            
          </div>
          <div id="PENE20" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PENE20" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="PENE30" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PENE30" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="PENE40" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PENE40" placeholder="input your key">
                          <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            </div>
          </div>
</div>

<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
            <h5>PWN</h5>
          </div>

          <div class="widget-content"> 
            <a href="#PWN10" id="BtPWN10" data-toggle="modal" class="btn btn-success">PWN10</a> 
            <a href="#PWN20" id="BtPWN20" data-toggle="modal" class="btn btn-success">PWN20</a>
            <a href="#PWN30" id="BtPWN30" data-toggle="modal" class="btn btn-success">PWN30</a>
            <a href="#PWN40" id="BtPWN40" data-toggle="modal" class="btn btn-success">PWN40</a>
            
            <div id="PWN10" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="" method="post">
                      <b>key:</b> <input type="text"  name="PWN10" placeholder="input your key">
                      <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                          
                      </form>

                </p>
              </div>
           
          </div>
          <div id="PWN20" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PWN20" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="PWN30" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PWN30" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="PWN40" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="PWN40" placeholder="input your key">
                          <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            </div>
          </div>
</div>

<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
            <h5>Reverse</h5>
          </div>

          <div class="widget-content"> 
            <a href="#REVERSE10" id="BtREVERSE10" data-toggle="modal" class="btn btn-success">REVERSE10</a> 
            <a href="#REVERSE20" id="BtREVERSE20" data-toggle="modal" class="btn btn-success">REVERSE20</a>
            <a href="#REVERSE30" id="BtREVERSE30" data-toggle="modal" class="btn btn-success">REVERSE30</a>
            <a href="#REVERSE40" id="BtREVERSE40" data-toggle="modal" class="btn btn-success">REVERSE40</a>
            
            <div id="REVERSE10" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="" method="post">
                      <b>key:</b> <input type="text"  name="REVERSE10" placeholder="input your key">
                      <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                          
                      </form>

                </p>
              </div>
            
          </div>
          <div id="REVERSE20" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="REVERSE20" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="REVERSE30" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="REVERSE30" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
           
          </div>
          <div id="REVERSE40" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="REVERSE40" placeholder="input your key">
                          <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            </div>
          </div>
</div>

<div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
            <h5>Miscellaneous</h5>
          </div>

          <div class="widget-content"> 
            <a href="#MIS10" id="BtMIS10" data-toggle="modal" class="btn btn-success">MIS10</a> 
            <a href="#MIS20" id="BtMIS20" data-toggle="modal" class="btn btn-success">MIS20</a>
            <a href="#MIS30" id="BtMIS30" data-toggle="modal" class="btn btn-success">MIS30</a>
            <a href="#MIS40" id="BtMIS40" data-toggle="modal" class="btn btn-success">MIS40</a>
            
            <div id="MIS10" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="" method="post">
                      <b>key:</b> <input type="text"  name="MIS10" placeholder="input your key">
                      <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                          
                      </form>

                </p>
              </div>
            
          </div>
          <div id="MIS20" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="MIS20" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="MIS30" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="MIS30" placeholder="input your key">
                           <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
              </div>
            
          </div>
          <div id="MIS40" class="modal hide">
              <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Pop up Header</h3>
              </div>
              <div class="modal-body">
                <p>

                      who is the greastest hacker?<br><br><br>
                      <form  class="form-horizontal" action="#" method="post">
                      <b>key:</b> <input type="text" name="MIS40" placeholder="input your key">
                          <input class="btn btn-primary" type="submit" name='submit' value="submit"  />
                      </form>

                </p>
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
<?
require_once 'check.php';
?>