function verifyEmail(inputText)  
{  
var mailformat =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     //trying to use color to display happy or bad
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
if(inputText.value.match(mailformat))  
{  
document.register.email.focus(); 
email.style.backgroundColor = goodColor;
return true;
}  
else  
{  
alert("You have entered an invalid email address!");  
document.register.email.focus();  
email.style.backgroundColor = badColor; 
return false;  
}  
}  


    /*    function verifyEmail(this,event)
       {
var status = false;
var emailRegEx =/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
     if (document.myform.email.value.search(emailRegEx) == -1)
     {
          alert("Please Check the Email address myaddress@myserver.com");
     }

     else {
          alert("thanks you");
          status = true;
     }
     return status;
}
function checkTextField(this,event) {
    if (field.value == '') {
        alert("Field is empty");
    }
} */