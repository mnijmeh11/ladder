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
  <body  style="height:1800px;background:#ddf3f6 url('wpimages/wp48090e4b_06.png') repeat-x scroll center top;background-size:auto;">
    <div  style="height:inherit;width:100%;min-width:960px;margin:0;position:absolute;background:transparent url('wpimages/wp1bf6e529_06.png') repeat-x scroll center bottom;background-size:auto;"></div>
    <!--outer div used to help tell browser where to place images that are placed all over the place-->
	
<div  id="divMain" style="margin-left:auto; margin-right:auto; position:relative; width:960px; height:1800px; margin-left:auto; margin-right:auto" >
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
      <img  alt="Moses' Ladder Game"  src="wpimages/wp4a650d0c_06.png"  style="position:absolute;left:77px;top:32px;width:283px;height:79px;">
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
 <div class="underwater" style="text-align:center;position:absolute;top:150px;width:700px;height:40px;overflow:show;">
            <pclass="Heading-1 P-4"><span  class="C-5">All Player Match Views and Games Played</span></p></div> 
                    <?php require  'wpscripts/fullranking.php';  ?>
                    <?php require  'wpscripts/fullplayerlist.php';  ?> 
                    <?php require  'wpscripts/fullgamelist.php';  ?> 
                    <?php require  'wpscripts/fullchallenge.php';  ?> 
                    <?php require  'wpscripts/fullmatchview.php';  ?>    
      </div>
       
      <div style="position:absolute;left:15px;top:516px;width:945px;height:771px;overflow:hidden;">
     
      <img alt="" src="wpimages/wpe3d36d69_05_06.jpg" style="position:absolute;left:13px;top:1374px;width:121px;height:55px;">
    </div>
  </body>
</html>
