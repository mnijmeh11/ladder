<!DOCTYPE html>
<html  lang="en">
<!--#######################################
#*This is the actual page that people will be able to see their dates for a games and match completetion
#-#######################################-->
   <head>
    <meta  content="text/html; charset=UTF-8"  http-equiv="content-type">
    <title>Ladder Game</title>
    <meta  name="Description"  content="I am learning postgres server administration">
    <meta  name="author"  content="Moses Mike Nijmeh">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/wpstyles.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/underwater.css">
           <script type="text/javascript" src="wpscripts/css-fireworks.js"></script>
    <link rel="stylesheet" type="text/css" href="wpscripts/css-fireworks.css">
    <link  rel="stylesheet"  type="text/css"  href="wpscripts/hints.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
  </head>
  <!--I wanted to make it really look good, i might not be keeping all of the images as we move to the database sight -->
  <!--lines all over the page and some are here coded but positioned all over the place -->
  <body  style="height:1650px;background:#ddf3f6 url('wpimages/wp48090e4b_06.png') repeat-x scroll center top;background-size:auto;">
    <div  style="height:inherit;width:100%;min-width:960px;margin:0;position:absolute;background:transparent url('wpimages/wp1bf6e529_06.png') repeat-x scroll center bottom;background-size:auto;"></div>
    <div  id="stage"   style="background:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:1650px;">
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

         <!--this=""  is=""  the=""  code=""  that=""  assist=""  me=""  with=""  banner=""  at=""  top=""  of=""  page--="">
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
        <p>
  <a href="#" onclick="snowStorm.randomizeWind();return false"></a> | <a href="#" onclick="snowStorm.stop();return false"></a><a href="lights/" onclick="if (document.location.protocol != 'http') this.href=this.href+'index.html'"></a>
 </p>
 <p id="special" class="special"></p>
                        <div id="lights">
 <!-- lights go here -->
                            		<!-- bonus christmas light stuff, not required for snowstorm -->
        <link type="text/css" rel="stylesheet" href="demo/demo_default.css" />
<script src="http://yui.yahooapis.com/combo?2.6.0/build/yahoo-dom-event/yahoo-dom-event.js&2.6.0/build/animation/animation-min.js"></script>

<!-- for the Snowstorm homepage, allow the demo to run on iPhone and mobile devices. -->
<script>snowStorm.excludeMobile = false;</script>
<script src="snowstorm.js"></script>
</div>

<div id="container">
      
      </div>
      <div style="position:absolute;left:75px;top:216px;width:300px;height:auto;overflow:show;">
            <div  style="text-align:center;position:absolute;top:300px;width:800px;height:40px;overflow:show;left:150px;">                      <h1>
                        <span id="char1">Here</span>
                        <span id="char2">is</span>
                        <span id="char3">your</span>
                        <span id="char4">data</span>
                        <span id="char5">!</span>
                        <span id="char6">congrats</span>
                        <span id="char7">lets</span>
                        <span id="char8">play</span>
                        <span id="char1">again</span>
                        <span id="char2">by</span>
                        <span id="char3">asking</span>
                        <span id="char4">a</span>
                        <span id="char5">friend</span>
                        <span id="char6">to</span>
                        <span id="char7">play</span>
                        <span id="char8">!</span>
                        </h1>    
                
                
          '<a  value="Redirect Me" style="display:block;position:absolute; left:172px; top:360px; width:150px; height:42px;"  class="button" href="/playladder.php">Redirect Me</a>';
    <div style="position:absolute;left:200px;top:390px;width:500px;height:300px;overflow:show;">
 <?php require  'wpscripts/updatedmatchandgame.php';  ?>

<!--So I have to really mark up the whole page or I forget where I place what-->

       <img  style="position:absolute;left:0px;top:713px;width:913px;height:11px;" src="wpimages/wpfb491e60_06.png"  alt="" />
       <img  style="position:absolute;left:15px;top:946px;width:913px;height:11px;" src="wpimages/wpfb491e60_06.png"  alt="" />
    </div>
  </body>
</html>
