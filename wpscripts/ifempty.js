   <script  type="text/javascript">
    function checkpassword()
{
    //variables
    var password1 = document.getElementById('password1');
    var password2 = document.getElementById('password2');
    //trying to use color to display happy or bad
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    //trying to match not check if they are equal Confusing here
     if ( password1.value == null ||  password1.value == "" )
     {
        //give the user a color and word display of error
        password1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
       //trying to match not check if they are equal Confusing here
     if ( password2.value == null ||  password2	.value == "" )
     {
        //give the user a color and word display of error
        $('#register').attr('disabled', 'disabled');
        password1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
   else if (password1.value == password2.value)
    {
        //gives the user color message of good passwordword
        password1.style.backgroundColor = goodColor;
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Match!"
             $('#register').prop("disabled", false);
    }
    else {
        //give the user a color and word display of error
        $('#register').attr('disabled', 'disabled');
        password1.style.backgroundColor = badColor;
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Do Not Match!"
    }
}
</script>