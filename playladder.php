<?php
     session_start();
if(isset($_SESSION['userName'])) {
  echo "Your session is running " . $_SESSION['userName'];
$username = $_SESSION['userName'];
$valueforusername = $username; 
}
else
{
    header("location: loggme.php");
    echo "please dont send me somewhere";
    $error = "You are not Logged On, Please Log On!";
}

?>
<!DOCTYPE html>
<html  lang="en">
  <head>
    <meta  content="text/html; charset=UTF-8"  http-equiv="content-type">
    <title>Ladder Game</title>
    <meta  name="Description"  content="I am learning postgres server administration">
    <meta  name="author"  content="Moses Mike Nijmeh">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/wpstyles.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/underwater.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/hints.css">
     <link  rel="stylesheet"  type="text/css"  href="wpscripts/scrollableContainer.css"> 
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
          <script src="../Source/Locale.en-US.DatePicker.js" type="text/javascript"></script> 
    <script src="Source/Picker.js" type="text/javascript"></script> 
    <script src="Source/Picker.Attach.js" type="text/javascript"></script> 
    <script src="Source/Picker.Date.js" type="text/javascript"></script> 
     
    <link href="../Source/datepicker_dashboard/datepicker_dashboard.css" rel="stylesheet">
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
    <script  type="text/javascript"  src="wpscripts/jquery.js"></script>
    <script  type="text/javascript"  src="wpscripts/jquery.event.move.js"></script>
    <script  type="text/javascript"  src="wpscripts/jquery.event.swipe.js"></script>
    <script  type="text/javascript"  src="wpscripts/jquery.wpslider.js"></script>
    <script  type="text/javascript">
    /* here is the code that runs the slider*/
      $(document).ready(function() {
      $('#slider_1').data('wpslider', new $.fn.wpslider( { g_nDivId:'#slider_1', g_nTransitStyle:2, g_nLoopTime:5000, g_nAnimationTime:500, g_strEasing: "swing" } ) );
      var btnState = [];
      $('#slider_1').data('wpslider').restrictSlides();
      $("a.ActiveButton").bind({ mousedown:function(){if ( $(this).attr('disabled') === undefined ) $(this).addClass('Activated');}, mouseleave:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}, mouseup:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}});
      });
    </script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> 
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
<script>
webshims.setOptions('forms-ext', {types: 'input'});
webshims.polyfill('forms forms-ext');
$.webshims.formcfg = {
en: {
    dFormat: '-',
    dateSigns: '-',
    patterns: {
        d: "yy-mm-dd"
    }
}
};
</script>
      <script>

	window.addEvent('domready', function(){
		new Picker.Date($$('datetime-local'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_dashboard',
			useFadeInOut: !Browser.ie
		});
	});

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
      <img  src="wpimages/wp573566bc_06.png"  alt=""  style="position:absolute;left:42px;top:171px;width:877px;height:318px;">
        
    <img  id="frame2"  title="Climb A Ladder"  src="wpimages/climb-ladder-gif.gif"  alt=""  style="position:absolute;left: 400px;overflow: auto; top:520px;width:150px; height: 450px;">   
    <img  id="frame2"  title="Climb A Ladder"  src="wpimages/ladder.gif"  alt="" style="position:absolute;left:600px;top:1020px;overflow: auto; width:150px; height: 350px;">
    <img  id="frame2"  title="Climb A Ladder"  src="wpimages/ladder.gif" alt=""  style="position:absolute;left:800px;top:520px;width:150px;height: 350px;">
    <img  id="frame2"  title="Climb A Ladder"  src="wpimages/climb-ladder-gif.gif"  alt=""  style="position:absolute;left:50px; top:920px;width:150px; height: 450px;">


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
      <div  style="position:absolute;left:570px;top:1486px;width:340px;height:129px;overflow:hidden;">
        <p  class="Footer P-1"><span  class="C-1">Ladder Sports Playing LLC</span></p>
        <p  class="Body P-1"><span  class="C-1">200 Ford Road #245</span></p>
        <p  class="Body P-1"><span  class="C-1">San Jose Ca. 95138</span></p>
        <p  class="Body P-1"><span  class="C-1">408-<wbr>444-<wbr>4433</span></p>
        <p  class="Body P-1"><span  class="C-1">Email: mosesnijmeh@yahoo.com</span></p>
        <p  class="Body P-2"><span  class="C-2"><br>
          </span></p>
      </div>
      <div  style="position:absolute;left:353px;top:33px;width:600px;height:79px;">
        <!--So here I am trying to setup the buttons for the index.php and I will copy it to the other htmls
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
                  <div class="underwater" style="text-align:center;position:absolute;top:490px;width:300px;height:40px;overflow:show;left:40px;">
            <pclass="Heading-1 P-4"><span  class="C-5">Create A Challenge</span></p></div>  
         <div class="underwater" style="text-align:center;position:absolute;top:490px;width:150px;height:40px;overflow:show;left:510px;">
             <p class="Heading-1 P-4"><span class="C-5"><strong><a href="JavaScript:newPopup('displayalstats.php');">All Stats</a></p></strong></span></div>  
         <script type="text/javascript">
// Popup window code so I could display all of the stats for the ladder game
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=500,left=10,top=10,resizable=no,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>
        
          <!--make a new game form--> <!--make a new game form--> <!--make a new game form--> <!--make a new game form-->
<div id="login" style="position:absolute;top:550px; left: 79px; width:auto; height:400px;">
<form class = "mytext" action="setanewchallenge.php" method="post">    
<label class= "css-label" >Challenger</label>&nbsp;&nbsp;&nbsp;
<input class= "mytext" id="challenger" name="challenger" type="text"  value = "<?php echo $valueforusername; ?>" readonly required/>&nbsp;&nbsp;&nbsp;
<label class= "css-label" >Challengee</label>&nbsp;&nbsp;&nbsp;
    <?php require  'wpscripts/getPlayerstoChallenge.php';?></select>&nbsp;&nbsp;&nbsp;
<label class= "css-label" >Dated Issued</label>&nbsp;&nbsp;&nbsp;
<input class ="mytext" id="issued" name="issued" type="text" <?php $currentdate = date('Y-m-d');echo 'value="' .$currentdate.'"';?> required readonly/>&nbsp;&nbsp;&nbsp;<br>
<label class= "css-label" >Date Accepted</label>&nbsp;&nbsp;&nbsp;
<input class ="mytext" id="accepted" name="accepted" type="text"   value = "" required readonly/>&nbsp;&nbsp;&nbsp;
<label class= "css-label" >Date scheduled</label>&nbsp;&nbsp;&nbsp;
<input class ="mytext" id="scheduled" name="scheduled" type="datetime-local" value="" required/>&nbsp;&nbsp;&nbsp;
<input class="button" name="submit" type="submit" value="New Game"/>
<button  onclick="resetValidationStatus(this.form);"  class="button" id="reset" type="reset">Reset</button>
</form>
</div>  
      <!--end of  a new game form--> <!--end of  a new game form--> <!--end of  a new game form--> <!--end of  a new game form-->
      
       <!--new--> <!--accept--> <!--challenge--> <!--from--><!--system-->
    <div class="underwater" style="text-align:center;position:absolute;top:820px;width:400px;height:40px;overflow:show;left:50px;">
    <pclass="Heading-1 P-4"><span  class="C-5">Accept A Challenge</span></p></div>';
                <!--make a new game form-->
<div id="login" class="mytext" style="position:absolute;top:870px; left: 79px; max-width:1000px; height:auto; max-height:200px;
    overflow-y: scroll; overflow-x: scroll;" >
<?php require 'wpscripts/yourchallenges.php'?>
</div> 
   <div class="underwater" style="text-align:center;position:absolute;top:690px;width:400px;height:40px;overflow:show;left:50px;">
    <pclass="Heading-1 P-4"><span  class="C-5">Leave The Game</span></p></div>';
                <!--make a leaves the ladder game form-->
<div id="login" style="position:absolute;top:740px; left: 79px; width:auto; height:400px;">
<form class = "mytext" action="wpscripts/leavethegame.php" method="post">
<label class= "css-label" >Player's Username</label>&nbsp;&nbsp;&nbsp;
<input class= "mytext" id="username1" name="username1" type="text"  value = "<?php echo $valueforusername; ?>" readonly required/>&nbsp;&nbsp;&nbsp;
<button method="post"  class="button" type="submit" id = "register"/>Leave the game</button>&nbsp;&nbsp;&nbsp;
</form>
</div>
       <div> 
	   <form class="underwater" action="wpscripts/logout.php" method="post" style="text-align:center;position:absolute;top:490px;width:150px;height:40px;overflow:show;left:350px;">
    <pclass="Heading-1 P-4"><span  class="C-5">
    <input name="return" type="hidden" value="<?php echo urlencode($_SERVER["PHP_SELF"]);?>" />
    <input  type="submit" value="Log Off" /></span></p>
</form>  
      </div>    
   <div class="underwater" style="text-align:center;position:absolute;top:1090px;width:400px;height:40px;overflow:show;left:200px;">
    <pclass="Heading-1 P-4"><span  class="C-5">Update Your Game</span></p></div>';
                <!--make a new game form-->
<div id="login" style="position:absolute;top:1150px; left:-100px; width:auto; max-width:auto; height:auto; max-height:200px;
    overflow-y: scroll; overflow-x: scroll;" > 
<?php require 'wpscripts/updateyougames.php'?>
</div> 
   </div>

  </body>
</html>