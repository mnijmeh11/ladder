<!--this is the page that allows user to log on if they were kicked out of the player or other page that requires logon...-->
<?php
include('wpscripts/authmain.php'); // Includes Login Script

if(isset($_SESSION['username'])){
header("location: playladder.php");
}
else 
{
$error = "You are not Logged On, Please Log On!";
    echo '<script>
alert("Sorry, only logged session allowed to view or perform function with the ladder game. Please Log on and you can play with us! Thank you for understanding!");
</script>';
}
?>
<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta  content="text/html; charset=UTF-8"  http-equiv="content-type">
    <title>Ladder Website Access</title>
    <meta  name="Description"  content="I am learning postgres server administration">
    <meta  name="author"  content="Moses Mike Nijmeh">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    <script  type="text/javascript"  src="wpscripts/jquery.event.move.js"></script>
    <script  type="text/javascript"  src="wpscripts/jquery.event.swipe.js"></script>
    <script  type="text/javascript"  src="wpscripts/jquery.wpslider.js"></script>
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/wpstyles.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/underwater.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/hints.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script type="text/javascript" src="wpscripts/verify_mydata.js"></script>
     <script type="text/javascript" src="wpscripts/email.js"></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style  type="text/css">
      .P-1 
      { text-align:center;
      line-height:1px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;font-weight:700;
      color:#ffffff;background-color:transparent;
      font-variant:normal;
      font-size:15.0px;
      vertical-align:0; 
      }
      .C-1 
      { line-height:22.40px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;
      font-weight:700;
      color:#ffffff;
      background-color:transparent;
      text-decoration:none;
      font-variant:normal;
      font-size:14.7px;
      vertical-align:0; 
      }
      .P-2 
      { line-height:1px;
      font-family:"Trebuchet MS", sans-serif;
      font-style:normal;
      font-weight:normal;
      color:#22262b;
      background-color:transparent;
      font-variant:normal;
      font-size:13.0px;
      vertical-align:0; }
      .C-2 
      { line-height:18.33px;
      font-family:"Trebuchet MS", sans-serif;
      font-style:normal;
      font-weight:normal;
      color:#22262b;
      background-color:transparent;
      text-decoration:none;
      font-variant:normal;
      font-size:13.3px;vertical-align:0;
      }
      .OBJ-1,.OBJ-1:link,.OBJ-1:visited { 
      background-image:url('wpimages/wpf3b2b6cd_06.png');
      background-repeat:no-repeat;
      background-position:0px 0px;
      text-decoration:none;
      display:block;
      position:absolute; 
      }
      .OBJ-1:hover 
      {
       background-position:0px -84px; 
       }
      .OBJ-1:active,a:link.OBJ-1.Activated,a:link.OBJ-1.Down,a:visited.OBJ-1.Activated,a:visited.OBJ-1.Down,.OBJ-1.Activated,.OBJ-1.Down {
       background-position:0px -42px; 
       }
      .OBJ-1.Disabled,a:link.OBJ-1.Disabled,a:visited.OBJ-1.Disabled,a:hover.OBJ-1.Disabled,a:active.OBJ-1.Disabled { 
      background-position:0px -126px; 
      }
      .OBJ-1:focus { 
      outline-style:none; 
      }
      button.OBJ-1 { 
      background-color:transparent;border:none 0px;padding:0;
      display:inline-block;cursor:pointer; }
      button.OBJ-1:disabled { 
      pointer-events:none;
       }
      .OBJ-1.Inline { 
      display:inline-block;
      position:relative;
      line-height:normal;
       }
      .OBJ-1 span,.OBJ-1:link span,.OBJ-1:visited span { color:#a5a5a5;
font-family:Verdana,sans-serif;
font-weight:normal;
text-decoration:none;
text-align:center;
text-transform:uppercase;
font-style:normal;
left:10px;top:13px;
width:83px;
height:13px;
line-height:13px;
font-size:10px;display:block;
position:absolute;cursor:pointer; 
}
      .OBJ-1:hover span { 
      color:#333333;
       }
      .OBJ-1:active span,a:link.OBJ-1.Activated span,a:link.OBJ-1.Down span,a:visited.OBJ-1.Activated span,a:visited.OBJ-1.Down span,.OBJ-1.Activated span,.OBJ-1.Down span { 
color:#b72122; 
}
      .OBJ-1.Disabled span,a:link.OBJ-1.Disabled span,a:visited.OBJ-1.Disabled span,a:hover.OBJ-1.Disabled span,a:active.OBJ-1.Disabled span { 
      color:#7a7a7a; 
      }
      .OBJ-2 {
line-height:42px;
 }
      .P-3 { 
		text-align:center;
		line-height:1px;
		font-family:"Arial Black", sans-serif;
		font-style:normal;
		font-weight:700;
		color:#ffffff;
		background-color:transparent;
		font-variant:normal;
		font-size:19.0px;
		vertical-align:0; 
		}
      .C-3 { 
      line-height:29.47px;
      font-family:"Arial Black", sans-serif;
		font-style:normal;
		font-weight:700;
		color:#ffffff;
		background-color:transparent;
		text-decoration:underline;font-variant:normal;
		font-size:18.7px;vertical-align:0;
		}
      a.C-3:link, a:link .C-3, a.C-3:visited, a:visited .C-3, a.C-3:hover, a:hover .C-3, a.C-3:active, a:active .C-3 { 
      color:#ffffff;text-decoration:underline;
       }
      .C-4 { 
      line-height:44.20px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;
      font-weight:700;
      color:#ffffff;
      background-color:transparent;
      text-decoration:underline;
      font-variant:normal;
      font-size:18.7px;vertical-align:0; 
      }
      .P-4 { 
      text-align:center;
      line-height:1px;
      font-family:"Trebuchet MS",      	   
      sans-serif;font-style:normal;
      font-weight:700;
      color:#22262b;
      background-color:transparent;
      font-variant:normal;
      font-size:33.0px;
      vertical-align:0; 
      }
      .C-5 
      { line-height:35.47px;
      font-family:"Trebuchet MS", sans-serif;
      font-style:normal;font-weight:700;
      color:#22262b;background-color:transparent;text-decoration:none;
      font-variant:normal;font-size:32.8px;
      vertical-align:0; }
      .P-5 { 
      line-height:1px;font-family:"Trebuchet MS", sans-serif;font-style:normal;
       font-weight:normal;
		color:#22262b;
		background-color:transparent;font-variant:normal;font-size:19.0px;vertical-align:0; }
      .C-6 
      { line-height:25.26px;
      font-family:"Trebuchet MS", sans-serif;
      font-style:normal;font-weight:normal;
		color:#22262b;background-color:transparent;
		text-decoration:none;font-variant:normal;
		font-size:19.5px;vertical-align:0; }

      .C-7 { line-height:12.80px;
      font-family:"Arial", sans-serif;
      font-style:normal;
      font-weight:normal;
      color:#22262b;
      background-color:transparent;
      text-decoration:none;
      font-variant:normal;
      font-size:13.3px;
      vertical-align:0;
      }
      .P-6 { 
      margin-left:48.0px;
      text-indent:-15.0px;
      line-height:1px;
      font-family:"Arial", sans-serif;
      font-style:normal;
      font-weight:normal;
      color:#22262b;
      background-color:transparent;
      font-variant:normal;
      font-size:13.0px;
      vertical-align:0; 
      }
      .P-7 { 
      text-indent:48.0px;
      line-height:1px;
      font-family:"Arial", sans-serif;
      font-style:normal;
      font-weight:normal;
      color:#22262b;
      background-color:transparent;
      font-variant:normal;
      font-size:13.0px;
      vertical-align:0; 
      }
      .C-8 { 
      line-height:14.40px;
      font-family:"Trebuchet MS", sans-serif;
      font-style:normal;
      font-weight:700;
      color:#22262b;
      background-color:transparent;
      text-decoration:none;
      font-variant:normal;
      font-size:13.3px;
      vertical-align:0;
      }
      .C-9 { 
      line-height:12.80px;
      font-family:"Arial", sans-serif;
      font-style:normal;
      font-weight:700;
      color:#22262b;
      background-color:transparent;
      text-decoration:none;
      font-variant:normal;
      font-size:13.3px;
      vertical-align:0;
       }
    </style>
    <!-- So very_mydata is the script for my phone number  -->	
    <!-- So email is the script for my email checking   -->

		 <script  type="text/javascript">
    /* here is the code that runs the slider*/
      $(document).ready(function() {
      $('#slider_1').data('wpslider', new $.fn.wpslider( { g_nDivId:'#slider_1', g_nTransitStyle:2, g_nLoopTime:5000, g_nAnimationTime:500, g_strEasing: "swing" } ) );
      var btnState = [];
      $('#slider_1').data('wpslider').restrictSlides();
      $("a.ActiveButton").bind({ mousedown:function(){if ( $(this).attr('disabled') === undefined ) $(this).addClass('Activated');}, mouseleave:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}, mouseup:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}});
      });
    </script>
    </script>
  </head>
  <!--I wanted to make it really look good, i might not be keeping all of the images as we move to the database sight -->
  <!--lines all over the page and some are here coded but positioned all over the place -->
  <body  style="height:1650px;background:#ddf3f6 url('wpimages/wp48090e4b_06.png') repeat-x scroll center top;background-size:auto;">
    <div  style="height:inherit;width:100%;min-width:960px;margin:0;position:absolute;background:transparent url('wpimages/wp1bf6e529_06.png') repeat-x scroll center bottom;background-size:auto;"></div>
    <div  id="divMain"  style="background:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:1650px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:211px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:206px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:200px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:195px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:190px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:185px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp9ddea60e_06.png"  style="position:absolute;left:180px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp9ddea60e_06.png"  style="position:absolute;left:175px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:170px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:164px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:159px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:154px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp9ddea60e_06.png"  style="position:absolute;left:149px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:144px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:139px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:134px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:128px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:123px;top:121px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp02042590_06.png"  style="position:absolute;left:118px;top:121px;width:3px;height:3px;">
      <img  alt="Moses? Ladder Game"  src="wpimages/wp4a650d0c_06.png"  style="position:absolute;left:77px;top:32px;width:283px;height:79px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:118px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:123px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:128px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:134px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:139px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:144px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:149px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:154px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:159px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:164px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:170px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:175px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:180px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:185px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:190px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:195px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:200px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:206px;top:14px;width:3px;height:3px;">
      <img  alt=""  src="wpimages/wp57eb059c_06.png"  style="position:absolute;left:211px;top:14px;width:3px;height:3px;">
      <img  src="wpimages/wp573566bc_06.png"  alt=""  style="position:absolute;left:42px;top:171px;width:877px;height:318px;"

       <!--  <!--this=""  is=""  the=""  code=""  that=""  assist=""  me=""  with=""  banner=""  at=""  top=""  of=""  page--=""-->
      <div  id="slider_1"  style="position:absolute;left:55px;top:184px;width:850px;height:284px;overflow:hidden;">
        <div  id="slider_1_P1"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;">
          <img  alt=""  src="wpimages/wp121bd566_05_06.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P2"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/wp4edc98b1_05_06.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P3"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports3.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P4"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports2.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P5"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports1.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P6"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports4.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P7"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports5.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
        <div  id="slider_1_P8"  style="position:absolute;left:0px;right:0px;width:850px;height:284px;visibility:hidden;display:none;">
          <img  alt=""  src="wpimages/sports6.png"  style="position:absolute;left:0px;top:0px;width:850px;height:284px;">
        </div>
      </div>

      <div  style="position:absolute;left:353px;top:33px;width:600px;height:79px;">
        <!--So here I am trying to setup the buttons for the index.php and I will copy it to the other htmls-->
        <!--here is my index.php link--> <a  href="index.php"  id="nav_12_B1"

           class="OBJ-1 ActiveButton Down OBJ-2"  style="display:block;position:absolute;left:176px;top:18px;width:103px;height:42px;">
          <span>Home</span></a>
        <!-- Here is my project information link--> <a  href="aboutus.html"  id="nav_12_B2"

           class="OBJ-1 ActiveButton OBJ-2"  style="display:block;position:absolute;left:280px;top:18px;width:103px;height:42px;">
          <span>Project&nbsp;Info</span></a>
        <!--here is my loggin php link --> <a  href="loggin.php"  id="nav_12_B2" class="OBJ-1 ActiveButton OBJ-2"  style="display:block;position:absolute;left:380px;top:18px;width:103px;height:42px;">
          <span>Log&nbsp;Inn</span></a>
        <!--here is my register php link --> <a  href="register.php"  id="nav_12_B2" class="OBJ-1 ActiveButton OBJ-2"  style="display:block;position:absolute;left:478px;top:18px;width:103px;height:42px;">
          <span>Register</span></a>
        <!--end of the code for the buttons for the index.php and I will copy it to the other htmls-->
        <!--I have added a set of complex lines all over the page to try to make it look good-->
      </div>
      <img  alt=""  src="wpimages/wpf596c6a7_06.png"  style="position:absolute;left:270px;top:1491px;width:8px;height:122px;">
      <img  alt=""  src="wpimages/wpf596c6a7_06.png"  style="position:absolute;left:527px;top:1491px;width:8px;height:122px;">
      <img  alt=""  src="wpimages/wp17603ca7_06.png"  style="position:absolute;left:223px;top:24px;width:260px;height:18px;">
      <img  alt=""  src="wpimages/wp17ccc5ee_06.png"  style="position:absolute;left:103px;top:108px;width:413px;height:8px;">
      <img  alt=""  src="wpimages/wp500ecd80_06.png"  style="position:absolute;left:516px;top:116px;width:425px;height:18px;">
      <img  alt=""  src="wpimages/wp6918070c_06.png"  style="position:absolute;left:471px;top:6px;width:471px;height:18px;">
      <img  alt=""  src="wpimages/wp8a909793_06.png"  style="position:absolute;left:931px;top:15px;width:22px;height:137px;">
      <img  alt=""  src="wpimages/wp7054713c_06.png"  style="position:absolute;left:857px;top:143px;width:103px;height:368px;">
      <img  alt=""  src="wpimages/wp4400045f_06.png"  style="position:absolute;left:0px;top:137px;width:94px;height:399px;">
      <div  id="txt_20"  style="position:absolute;left:50px;top:1491px;width:205px;height:122px;overflow:hidden;">
        <!--lower left of page-->
        <!--keep closing tags example the href tag must be closed or the whole area after is a hyperlink -->
        <p  class="Normal P-3"><a  href="index.php"  class="C-3">HOME</a></p>
        <p  class="Normal P-3"><a  href="loggin.php"  class="C-3">Log&nbsp;In</a></p>
        <p  class="Normal P-3"><a  href="register.php"  class="C-3">Register </a></p>
        <p  class="Normal P-3"><a  href="aboutus.html"  class="C-3">About&nbsp;
          </a></p>
        <!--end of the area for the index at the lower left of the page-->
         <img alt=""  src="wpimages/wp5fa067e3_06.png"  style="position:absolute;left:519px;top:1472px;width:33px;height:160px;">
      </div>
      <!--body of the actual page-->
<div style="position: absolute; top:50px; left:4px; width:auto;"> 
    <div class="underwater" style="position: absolute; top: 460px; width:820px; height: 40px; left:middle;"><class="Heading-1 P-4"><span  class="C-5">Required User to Log on to access the Ladder Game</span></div>      
<div id="login" style="position:absolute;top:522px; left:middle; width: 900px;">
<form class = "mytext" action="" method="post">
<label class= "css-label" >User Name</label>
<input class= "mytext" id="username" name="username" type="text"  maxlength="20"required/>
<label class= "css-label" >Password :</label>
<input class ="mytext" id="password" name="password" type="password" maxlength="12" required/>&nbsp;&nbsp;&nbsp;
<input class="button" name="submit" type="submit" value="Climb A Ladder"/>
<label class= "css-label">Error mess:</label>
<input class="mytext" name="submit" type="text" value="<?php echo $error; ?>" readonly/>
</form>
</div>  
        <div style="position:absolute;top:560px;width:auto;height:auto;left:300px;"><h2 class="sexy">Offical&nbsp;rules</h2> </div>
        <div style="position: absolute; top: 640px; width:820px; height:auto;">
            <ol class="rounded-list">
    <li><a href="">OFFICIAL RULES(see about for more detail)</a></li>
    <li><a href="">Ladder is a game played with two players. Each player has to complete a set of climbs against their opponent. A third party timer can only record a completed climb up an official rope or wooden ladder.  The object of the game is to climb the ladder a fast as you can possibly without any use of climbing aid. The fastest climb time wins each game. Each completed Match consists of three sets of games. Each game consists of three of five fastest climbs up an official ladder. 
</a></li>
                <ol><li><a href="">OFFICIAL EQUIPMENT:</a></li></ol>
                <ol><li><a href="">Made from Hardwood </a></li>
            <li><a href="">has eight inches by 24 inches supported by reinforced arches.</a></li>
            <li><a href="">Each step is six inches above the previous step. </a></li>
            <li><a href="">The width of the whole ladder can be up to eight feet ( two players)</a></li>
            <li><a href="">Single player ladder cannot be no more than three feet. </a></li>  
            <li><a href="">Support structure can be made from any form of metal.</a></li>
            <li><a href="">All ladders can not be smaller then 12 feet in height. </a></li>  
        </li></ol>
    <ol><li><a href="">Made from rope</a></li></ol>
    <ol><li><a href="">Has is 24 inches supported by reinforced arches at end connection to the main line rope.  All joints of connection have to be reinforced and secured to support up to 1000lbs of carry weight.
</a></li> 
        <li><a href="">Two-person ladder has to be up to eight feet in width and twelve feet in height minimum. </a></li> 
        <li><a href="">One-person ladder can only be up to three feet in width. </a></li> 
        <li><a href="">Support structure must be made from material that can support up to 1000lbs per person on ladder at any given time. </a></li>         </ol>                             
</ol>
            </div>         
        <div style="position: absolute; top: 644px; left: 44px;">
          <img   id="frame2"  title="Climb A Ladder"  alt="Have you climbed a ladder today?"   src="wpimages/theladdergame.jpg"> <img  alt=""  src="wpimages/wpfb491e60_06.png"></div>
        
    </div>    

    </div>

	<!--So I have to really mark up the whole page or I forget where I place what-->
      <img alt="" src="wpimages/wpfb491e60_06.png" style="position:absolute;left:15px;top:495px;width:913px;height:11px;">
      <img alt="" src="wpimages/wpfb491e60_06.png" style="position:absolute;left:0px;top:713px;width:913px;height:11px;">
      <img alt="" src="wpimages/wpfb491e60_06.png" style="position:absolute;left:15px;top:946px;width:913px;height:11px;">
  </body>
</html>