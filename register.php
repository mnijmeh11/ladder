<!DOCTYPE html>
  <head>
    <meta  http-equiv="content-type"  content="text/html; charset=UTF-8" />
    <title>Ladder Website Access</title>
    <meta  content="I am learning postgres server administration"  name="Description" />
    <meta  content="Moses Mike Nijmeh"  name="author" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
       <link rel="stylesheet" type="text/css" href="wpscripts/wpstyles.css">
     <link  rel="stylesheet"  type="text/css"  href="wpscripts/underwater.css">
          <link  rel="stylesheet"  type="text/css"  href="wpscripts/hints.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
   <script  type="text/javascript">
    function checkpassword()
{
    //variables 
    var psswd1 = document.getElementById('psswd1');
    var password2 = document.getElementById('password2');
    var message = document.getElementById('goodpassword');
     //trying to use color to display happy or bad
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //trying to match not check if they are equal Confusing here
     if ( psswd1.value == null ||  psswd1.value == "" )
     {
        //give the user a color and word display of error
        psswd1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
       //trying to match not check if they are equal Confusing here
     if ( password2.value == null ||  password2	.value == "" )
     {
        //give the user a color and word display of error
        $('#register').attr('disabled', 'disabled');
        psswd1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
   else if (psswd1.value == password2.value)
    {
        //gives the user color message of good passwordword
        psswd1.style.backgroundColor = goodColor;
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Match!"
             $('#register').prop("disabled", false);
    }
    else {
        //give the user a color and word display of error
        $('#register').attr('disabled', 'disabled');
        psswd1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
}
</script>
      <script type="text/javascript">
    function alphaOnly(evt) {

  evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
    ((evt.which) ? evt.which : 0));
    if (charCode > 32 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
            return false;
        }
    return true;
}
function ValidateFullNamePaste (obj) 
{
            var totalCharacterCount = window.clipboardData.getData('Text');
            var strValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            var strChar;
            var FilteredChars = "";
            for (i = 0; i < totalCharacterCount.length; i++) {
                strChar = totalCharacterCount.charAt(i);
                if (strValidChars.indexOf(strChar) != -1) {
                    FilteredChars = FilteredChars + strChar;
                }
            }
            obj.value = FilteredChars;
            return false;
}  
      </script>
 <script type="text/javascript">
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}
function prepareInputsForHints() {
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i < inputs.length; i++){
		// test to see if the hint span exists first
		if (inputs[i].parentNode.getElementsByTagName("span")[0]){inputs[i].onfocus = function()
		{this.parentNode.getElementsByTagName("span")[0].style.display="inline";}
			// when the cursor moves away from the field, hide the hint
			inputs[i].onblur = function(){
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";	}
				}
	}
	// repeat the same tests as above for selects
	var selects = document.getElementsByTagName("select");
	for (var k=0; k<selects.length; k++){
		if (selects[k].parentNode.getElementsByTagName("span")[0]) {
			selects[k].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			selects[k].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}
	}
}
addLoadEvent(prepareInputsForHints);
</script>
<script type="text/javascript">
$(document).ready(function (phone) 
{
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) 
  {
     //prevernt keypress from working
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57))
	{
        //display error message
        $("#errmsg").html("Please enter numbers only!").show().fadeOut("slow");
               return false;
    }
   });
});
</script>  
      
<style type="text/css">	   
    #errmsg
{
color: red;
}
.p-0 
{
    background:#edf1f4 url(bg.jpg);
    font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans serif;
    font-size:16px;
    color:#444;
	}
      .P-1
      { text-align:center;
      line-height:1px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;font-weight:700;
      color:##003669f;background-color:transparent;
      font-variant:normal;
      font-size:15.0px;
      vertical-align:0;
      }
      .C-1
      { line-height:22.40px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;
      font-weight:700;
      color:##003669f;
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
      vertical-align:0;
      }
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
      .OBJ-1,.OBJ-1:link,.OBJ-1:visited 
      {
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
      .OBJ-1:active,a:link.OBJ-1.Activated,a:link.OBJ-1.Down,a:visited.OBJ-1.Activated,a:visited.OBJ-1.Down,.OBJ-1.Activated,.OBJ-1.Down 
      {
       background-position:0px -42px;
       }
      .OBJ-1.Disabled,a:link.OBJ-1.Disabled,a:visited.OBJ-1.Disabled,a:hover.OBJ-1.Disabled,a:active.OBJ-1.Disabled
       {
      background-position:0px -126px;
      }
      .OBJ-1:focus
       {
      outline-style:none;
      }
      button.OBJ-1
       {
      background-color:transparent;border:none 0px;padding:0;
      display:inline-block;cursor:pointer;
      }
      button.OBJ-1:disabled
      {
      pointer-events:none;
       }
      .OBJ-1.Inline 
      {
      display:inline-block;
      position:relative;
      line-height:normal;
       }
      .OBJ-1 DIV,.OBJ-1:link DIV,.OBJ-1:visited span
      { color:#693200;
font-family:Verdana,sans-serif;
font-weight:normal;
text-decoration:none;
text-align:center;
text-transform:uppercase;
font-style:normal;
left:20px;top:13px;
width:83px;
height:13px;
line-height:13px;
font-size:10px;display:block;
position:absolute;cursor:pointer;
}
      .OBJ-1:hover span
      {
      color:#333333;
       }
      .OBJ-1:active span,a:link.OBJ-1.Activated span,a:link.OBJ-1.Down DIV,a:visited.OBJ-1.Activated DIV,a:visited.OBJ-1.Down DIV,.OBJ-1.Activated DIV,.OBJ-1.Down DIV {
color:#b72122;
}
      .OBJ-1.Disabled DIV,a:link.OBJ-1.Disabled DIV,a:visited.OBJ-1.Disabled DIV,a:hover.OBJ-1.Disabled DIV,a:active.OBJ-1.Disabled DIV {
      color:#003669;
      }
      .OBJ-2 {
      text-align:center;
      line-height:42px;
	 font-style:normal;
     font-weight:700;
		color:#693200;}
      .P-3 {
		text-align:center;
		line-height:1px;
		font-family:"Arial Black", sans-serif;
		font-style:normal;
		font-weight:700;
		color:RED;
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
		color:#E0FFFF;
		background-color:transparent;
		text-decoration:underline;font-variant:normal;
		font-size:18.7px;vertical-align:0;
		}
      a.C-3:link, a:link .C-3, a.C-3:visited, a:visited .C-3, a.C-3:hover, a:hover .C-3, a.C-3:active, a:active .C-3 {
      color:#E0FFFF;text-decoration:underline;
       }
      .C-4 {
      line-height:44.20px;
      font-family:"Arial Black", sans-serif;
      font-style:normal;
      font-weight:700;
      color:#E0FFFF;
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
      { line-height:45.47px;
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
      
      .P-6
       {
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
      .P-7
       {
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
      .C-8
       {
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
      .C-9
       {
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
h4 
{
display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;
z-index: auto;
width: auto;
height: auto;
position: static;
cursor: default;
opacity: 1;
margin: 0;
padding: 10px 20px;
overflow: visible;
border: 1px solid #b7b7b7;
-webkit-border-radius: 3px 38px;
border-radius: 3px 38px;
font: normal 16px/normal "Times New Roman", Times, serif;
color: rgba(0,142,198,1);
-o-text-overflow: clip;
text-overflow: clip;
background: rgba(252,252,252,1);
-webkit-box-shadow: 7px 6px 2px 0 rgba(0,0,0,0.2) ;
box-shadow: 7px 6px 2px 0 rgba(0,0,0,0.2) ;
text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}
 </style>
    <!-- So very_mydata is the script for my phone number  -->	
    <!-- So email is the script for my email checking   -->
     <link  href="wpscripts/wpstyles.css"  type="text/css"  rel="stylesheet" />   
     <script type="text/javascript" src="wpscripts/jquery.js"></script>
     <script type="text/javascript" src="wpscripts/jquery.event.move.js"></script>
     <script type="text/javascript" src="wpscripts/jquery.event.swipe.js"></script>
     <script type="text/javascript" src="wpscripts/jquery.wpslider.js"></script>
     <script type="text/javascript" src="wpscripts/verify_mydata.js"></script>
     <script type="text/javascript" src="wpscripts/email.js"></script>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    	<!-- Latest compiled and minified CSS -->

    <!--THis html has a master document that connected both index.php and about us so I can load the top and buttom frame on both-->
    <script  type="text/javascript">
      $(document).ready(function() {
      $('#slider_1').data('wpslider', new $.fn.wpslider( { g_nDivId:'#slider_1', g_nTransitStyle:2, g_nLoopTime:5000, g_nAnimationTime:500, g_strEasing: "swing" } ) );
      var btnState = [];
      $('#slider_1').data('wpslider').restrictSlides();
      $("a.ActiveButton").bind({ mousedown:function(){if ( $(this).attr('disabled') === undefined ) $(this).addClass('Activated');}, mouseleave:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}, mouseup:function(){ if ( $(this).attr('disabled') === undefined ) $(this).removeClass('Activated');}});
      });
     </script>
<script>
$(document).ready(function(){
$('#username1').keyup(username_check);
});
	
function username_check(){	
var username = $('#username1').val();
if(username1 == "" || username1.length < 4){
$('#username1').css('border', '3px #CCC solid');
$('#tick').hide();
}else
{

jQuery.ajax({
   type: "POST",
   url: "wpscripts/check.php",
   data: 'username='+ username1,
   cache: false,
   success: function(response){
if(response == 1){
	$('#username1').css('border', '3px #C33 solid');	
	$('#tick').hide();
	$('#cross').fadeIn();
	}else
    {
	$('#username1').css('border', '3px #090 solid');
	$('#cross').hide();
	$('#tick').fadeIn();
	     }

}
});
}



}

</script>

<style>
#username{
	padding:3px;
	font-size:18px;
	border:3px #CCC solid;
}

#tick{display:none}
#cross{display:none}
</style>
 </head>
  <!--I wanted to make it really look good, i might not be keeping all of the images as we move to the database sight -->
  <body  style="height:1650px;background:#ddf3f6 url('wpimages/wp48090e4b_06.png') repeat-x scroll center top;background-size:auto;"  >
    <div  style="height:inherit;width:100%;min-width:960px;margin:0;position:absolute;background:transparent url('wpimages/wp1bf6e529_06.png') repeat-x scroll center bottom;background-size:auto;"></div>
    <div  style="background:transparent;margin-left:auto;margin-right:auto;position:relative;width:960px;height:1650px;" id="divMain">
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
      <img  alt=""  src="wpimages/wp573566bc_06.png"   style="position:absolute;left:42px;top:171px;width:877px;height:242px;" height="242px"  width="877">
      <div  style="position:absolute;left:55px;top:184px;width:850px;height:242px;overflow:hidden;" id="slider_1">
     
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
      <div   class="C-4" class="Footer P-1" style="position:absolute;left:570px;top:1486px;width:340px;height:129px;overflow:hidden;">
        <p>Ladder Sports Playing LLC
              200 Ford Road #245
             San Jose Ca. 95138
            408-<wbr />444-<wbr />4433
           Email: mosesnijmeh@yahoo.com
        </p>
      </div>
      <div style="position:absolute; left:353px; top:33px; width:600px; height:79px;">
      <div>
        <!--So here I am trying to setup the buttons for the index.php and I will copy it to the other htmls-->
        <a  style="display:block;position:absolute; left:172px; top:18px; width:103px; height:42px;" class="OBJ-1  ActiveButton Down OBJ-2"  id="nav_12_B1"  href="index.php">Home</a>
        <a  style="display:block;position:absolute; left:270px; top:18px; width:103px; height:42px;"  class="OBJ-1 ActiveButton OBJ-2"  id="nav_12_B2"  href="aboutus.html">Project_Info </a>
        <a  style="display:block;position:absolute; left:370px; top:18px; width:103px; height:42px;"  class="OBJ-1 ActiveButton OBJ-2"  id="nav_12_B3"  href="loggin.php">Log_Inn</a>
        <a  style="display:block;position:absolute; left:468px; top:18px; width:103px; height:42px;"  class="OBJ-1 ActiveButton OBJ-2"  id="nav_12_B4"  href="register.php">Register</a>
        <!--end of the code for the buttons for the index.php and I will copy it to the other htmls-->
        <!--I have added a set of complex lines all over the page to try to make it look good-->
      </div>
      </div>
      <img  style="position:absolute;left:270px;top:1491px;width:8px;height:122px;" src="wpimages/wpf596c6a7_06.png"  alt="" />
      <img  style="position:absolute;left:527px;top:1491px;width:8px;height:122px;" src="wpimages/wpf596c6a7_06.png"  alt="" />
      <img  style="position:absolute;left:223px;top:24px;width:260px;height:18px;"  src="wpimages/wp17603ca7_06.png"  alt="" />
      <img  style="position:absolute;left:103px;top:108px;width:413px;height:8px;" src="wpimages/wp17ccc5ee_06.png"  alt="" />
      <img  style="position:absolute;left:516px;top:116px;width:425px;height:18px;" src="wpimages/wp500ecd80_06.png"  alt="" />
      <img  style="position:absolute;left:471px;top:6px;width:471px;height:18px;"  src="wpimages/wp6918070c_06.png"  alt="" />
      <img  style="position:absolute;left:931px;top:15px;width:22px;height:137px;" src="wpimages/wp8a909793_06.png"  alt="" />
      <img  style="position: absolute;left:857px;top:143px;width:103px;height:314px;" src="wpimages/wp7054713c_06.png"  alt="" />
      <img  style="position: absolute;left:0px;top:137px;width:94px;height:324px;" src="wpimages/wp4400045f_06.png"  alt="" />
      <!--lower left of page-->
      <div  style="position:absolute;left:50px;top:1491px;width:205px;height:122px;overflow:hidden;" id="txt_20">
        <p  class="Normal P-3"><a  class="C-3"  href="index.php">HOME</a></p>
        <p  class="Normal P-3"><a  class="C-3"  href="loggin.php">Log_In</a></p>
        <p  class="Normal P-3"><a  class="C-3"  href="register.php">Register</a></p>
        <p  class="Normal P-3"><a  class="C-3"  href="aboutus.html">About_Us</a></p>
        <!--end of the area for the index at the lower left of the page-->
	  </div>
      <img  style="position:absolute;left:255px;top:1471px;width:33px;height:160px;" src="wpimages/wp5fa067e3_06.png"  alt="" />
       <img  style="position:absolute;left:519px;top:1472px;width:33px;height:160px;"  src="wpimages/wp5fa067e3_06.png"  alt="" />
      <div  align="center"  class="underwater"  style="position: absolute; top: 429px; width: 457px; height: 45px; overflow: hidden; left: 226px; margin-top: 6px;">
        <b>Ladder Game Registration Form</b>
        <div  style="height: 69px;"> <b> (See Example Ladder Game Registration Form Filled)</b></div>
      </div>
          <!--So I have to really mark up the whole page or I forget where I place what-->
        <!--Here is my actual form location within the code and css is in a different file and it is the start of the registration form-->
      <div>
     <form  class = "mytext"  name="register" method="post" onload= 'document.register.email.focus();' action="addperson.php"  style="position: absolute; top: 506px; left: 200px; width: 600px;">
           <!--getting user name from him-->    
           <div>

             </rb><label for="name" class= "css-label" >Full Name:</label><input class ="mytext" for="name"  name="name" required id="name"  maxlength="25" onkeypress="return alphaOnly(event)" />
            <span class="hint">Please Your First and last name only Between 4-30 characters.<span class="hint-pointer"> </span></span>&nbsp;&nbsp;&nbsp;&nbsp;
            <!--Getting his email address -->
            <label for="email" class= "css-label" >Email Address</label><input class ="mytext" type="email"  id="email"  name="email" required  maxlength="30"/>
             <span  class="hints" >Include Youremail@someserver.com <span  class="hints-pointer"></span></span>
             </div>     
            <!--checking username if it exists-->
		         <div>Username:<input class = "mytext" type="text"  id="username1"   name="username1" required maxlength="12"/>
				 <img id="tick" src="wpimages/tick.png" width="16" height="16"/><img id="cross" src="wpimages/cross.png" width="16" height="16"/>
              <span  class="hint">Between 4-12 characters. It will be used to refer to you in the games.<span  class="hint-pointer"></span></span>&nbsp;&nbsp;&nbsp;&nbsp;
               <label for="phone" class= "css-label" >Phone Number</label>
               <input type="text"  maxlength="13" required  class = "mytext" id="phone"  onkeyup="javascript:moving2(this,event);" onkeydown="javascript:movingnow(this,event);" class="numberinput"  name="phone"  required /> 
               <span  class="hints" >Enter Your ten digit phone number.<span  class="hint-pointer" ></span></span>&nbsp;&nbsp;&nbsp;&nbsp;
               <Label for = "goodpassword" class= "css-label" >Password Matching</label>
                </div>
              <div><label for="psswd1" class= "css-label" >Password</label>
              <input class = "mytext" type="password"  id="psswd1"   name="psswd1" required maxlength="12"  onkeyup="checkpassword(); return false;"/>
              <span  class="hint">See ideas for passwords! You want to be able to remember it! <span  class="hints-pointer" ></span></span>&nbsp;&nbsp;&nbsp;&nbsp;
              <label for="password2" class= "css-label"  >Confirm Password</label>&nbsp;&nbsp;&nbsp;&nbsp;
              <input  type="password"  id="password2"  name="password2" required maxlength="12" class = "mytext"  onkeyup="checkpassword(); return false;"/>
             <span  class="hints" >See ideas for passwords! You want to be able to remember it! <span  class="hints-pointer"></span>
             </span><span id="goodpassword" class= "css-label"  name ="goodpassword"></div>
             <div> 
               <label for = "rank" class= "css-label" >Possible Rank</label>
                 <!--Here I am showing the possible rank to get it to the php to set it for the user out of his control -->
              <?php require  'wpscripts/findmaxrank.php'; ?>    &nbsp;&nbsp;&nbsp;&nbsp;   
                 
                 <!--buttons for the registration form-->
              <button  method="post"  class="button" type="submit" id = "register" onclick="verifyEmail(document.register.email);" disabled="disabled">Submit</button>
               &nbsp;&nbsp;&nbsp;&nbsp;   
              <button  onclick="resetValidationStatus(this.form);"  class="button" id="rest" type="reset">Reset</button>
              </div>
      </div>

<!--end of the registration form-->

<div  style="position: absolute; top: 425px; left: 27px; height: 122px; "  class="bubble">
        <div>
        </br>
              "Password Ideas"</br>
    	      At least: one letter </br>
              At least: one capital letter</br>
	          At least: one number </br>
    	      Between: 8 characters</br>
           </div>
</div>

         <!--Here is my code for the example table so people can see an example within the site -->
  <div  class="underwater"  style="position: absolute; top: 810px; height: 44px; width: 350px; margin-top: -44px; left: 300px;"><pclass="heading-1 p-4"="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span  class="C-5"> Example form filled </span>
        </pclass="heading-1></div>
      <div  class="MyUpdate" style="position: absolute; top: 830px; width: 600px; height: auto; overflow: hidden; left: 178px;">
	        <table>
          <tbody>
            <tr><th>Full Name:</th><th>Email Address</th><th>User Name </th><th>Phone Number</th></tr>
            <tr><td>John Smith</td><td>johnsmith@yahoo.com</td><td>User Name</td><td>(503) 456-4566</td></tr>
            <tr><td> Password</td><td  colspan="1">"Ihate12?"</td><td  colspan="1">"Ihate12?"</td><td> </br></td></tr>
          </tbody>
        </table>
      </div>
    </hr>
      <div  align="center"   class="underwater"style="position: absolute; top: 983px; width: 422px; height: 40px; left: 278px;"  align="center"><pclass="Heading-1 P-4">
      <span  class="C-5">Rules for filling the form</span></p></div>
      <div  class="MyUpdate"  style="position: absolute; top: 1041px; width: auto; height: auto; overflow: hidden; left: 174px;">
        <table>
          <tbody>
            <tr><th>Full Name:</th></tr>
            <tr><td>First and Last name only, limited to 30 character!</td></tr>
            <tr><th> Email Address</th></tr>
            <tr><td>Full email address with username1 @ server name. </td></tr>
            <tr><th> User Name </th></tr>
            <tr><td>User Name is what you will be referred to in game</td></tr>
            <tr><th>Phone Number</th></tr>
            <tr><td  colspan="3">Please provide a ten digit phone number. Does not support International memmbership at this time</td></tr>
            <tr><td  colspan="3"> Password</td></tr>
            <tr><td  colspan="3">Is limited to 8 character long without any space.</td></tr>
          </tbody>
        </table>
      </div>
      <div>
      <img  style="position: absolute; left: -46px; top: 490px; width: 989px; height: 11px;" src="/wpimages/wpfb491e60_06.png" alt="" />
      <img  style="position:absolute;left:0px;top:713px;width:913px;height:11px;" src="wpimages/wpfb491e60_06.png"  alt="" />
       <img  style="position:absolute;left:15px;top:946px;width:913px;height:11px;" src="wpimages/wpfb491e60_06.png"  alt="" />
       </div>
      </div>
  </body>
</html>