<?php
/*******************************
*Here i am taking the data from the register php and I am sending it to the system
*I am also displaying the data to the user at the bottom of the php code
*
*********************************/
global $db;
   $dsn ='pgsql:host=localhost;dbname=ladder';
    $username = 'postgres';
    $password = 'iw72SqCG';
ini_set('display_errors','on');
error_reporting(E_ALL);
 // define variables and set to empty values

         $nameErr = $emailErr = $phoneErr = $username1Err = $psswd1err = $password2 = "";
         $name = $email = $phone = $username1 = $psswd1 = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }
            else
            {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }
            else
            {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["username1"])) {  
               $usernameErr = "Please enter a valid User name!";
            }
            else
            {
               $username1 = test_input($_POST["username1"]);
            }
            if (ctype_alnum($_POST["username1"])) {  
               $usernameErr = "Please Enter a User Name";
            }
            else
            {
               $username1 = test_input($_POST["username1"]);
            }
            
            if (empty($_POST["psswd1"])) {
               $psswd1Err = "PLease enter a password!";
            }
            else
            {
               $psswd1 = test_input($_POST["psswd1"]);
            }
            if (empty($_POST["password2"])) {
               $password2Err = "PLease enter a password!";
            }
            else
            {
               $password2 = test_input($_POST["password2"]);
            }
            if (empty($_POST["phone"])) {
               $phoneErr = "Please enter a valid phone number!";
            }
            else
            {
               $phone = test_input($_POST["phone"]);
            }
         }
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

$name = pg_escape_string($_POST['name']);
$email = pg_escape_string($_POST['email']);
$rank = pg_escape_string($_POST['rank']);
$phone = pg_escape_string($_POST['phone']);
$username1 = pg_escape_string($_POST['username1']);
$psswd1 = pg_escape_string($_POST['psswd1']);

  if (!get_magic_quotes_gpc()) {
      $name = pg_escape_string($_POST['name']);
      $email = pg_escape_string($_POST['email']);
      $rank = pg_escape_string($_POST['rank']);
      $phone = pg_escape_string($_POST['phone']);
      $username1 = pg_escape_string($_POST['username1']);
      $psswd1 = pg_escape_string($_POST['psswd1']);
  }

$db = new PDO($dsn, $username, $password,array(PDO::ATTR_PERSISTENT => true));

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

$query = "insert into player values ('".$name."','".$email."','".$rank."','".$phone."','".$username1."',  
'".$psswd1."')";
$result = $db->query($query);

echo  "<table   class='MyUpdate'> <tbody>";
echo  "<tr><th>Your Name: &nbsp;</th>";
echo  "<td>";
echo "$name" .'</td>'.'</tr>';
echo '<tr><th>Your Email</th>';
echo "<td>";
echo "$email" .'</td>'.'</tr>';
echo '<tr><th>Your New Rank!</th>';
echo  '<td>';
echo "$rank".'</td>'.'</tr>';
echo '<tr> <th> Your Phone</th>';
echo  '<td>';
echo "$phone".'</td>'.'</tr>';
echo '<tr> <th> Your Username</th>';
echo  '<td>';
echo "$username1".'</td>'.'</tr>';
echo '<tr> <th> Your Phone</th>';
echo  '<td>';
echo "$psswd1" .'</td>'.'</tr>';
echo  "</tbody> <table> ";
 $db= null;
?>