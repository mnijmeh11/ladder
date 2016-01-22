<?php
/*******************************
*Here i am taking the data from the register php and I am sending it to the system
*I am also displaying the data to the user at the bottom of the php code
*
*********************************/
global $db;
include 'db.php';
ini_set('display_errors','on');
error_reporting(E_ALL);
 // define variables and set to empty values

         $challengerErr = $challengeeErr = $scheduledErr = $issuedErr ="";
         $challenger = $challengee = $issued = $scheduled = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["challenger"])) {
               $challengerErr = "challenger is required";
            }
            else
            {
               $challenger = test_input($_POST["challenger"]);   
            }
            
            if (empty($_POST["challengee"])) {
               $challengeeErr = "challengee is required";
            }
            else
            {
               $challengee = test_input($_POST["challengee"]);
               
            }
            if (empty($_POST["issued"])) {  
               $issuedErr = "Please enter a valid issued date!";
            }
            else
            {
               $issued = test_input($_POST["issued"]);
            }
            if (ctype_alnum($_POST["issued"])) {  
               $issuedErr = "Please Enter a User issued";
            }
            else
            {
               $issued = test_input($_POST["issued"]);
            }
            }
            if (empty($_POST["scheduled"])) {
               $scheduledErr = "PLease enter a scheduled date!";
            }
            else
            {
               $scheduled = test_input($_POST["scheduled"]);
            }
         function test_input($data) {
            $data = htmlspecialchars($data);
            return $data;
         }  

$challenger = pg_escape_string($_POST['challenger']);
$challengee = pg_escape_string($_POST['challengee']);
$issued = pg_escape_string($_POST['issued']);
$accepted = pg_escape_string($_POST['accepted']);
$scheduled = pg_escape_string($_POST['scheduled']);

  if (!get_magic_quotes_gpc()) {
      $challenger = pg_escape_string($_POST['challenger']);
      $challengee = pg_escape_string($_POST['challengee']);
      $issued = pg_escape_string($_POST['issued']);
      $accepted = pg_escape_string($_POST['accepted']);
      $scheduled = pg_escape_string($_POST['scheduled']);
  }

$db = new PDO($dsn, $username, $password,array(PDO::ATTR_PERSISTENT => true));

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

$query = "insert into challenge (challenger, challengee, issued, scheduled) values  ('".$challenger."','".$challengee."','".$issued."','".$scheduled."')";


$result = $db->query($query);

echo  "<table   class='MyUpdate'> <tbody>";
echo  "<tr><th>Your Name: &nbsp;</th>";
echo  "<td>";
echo "$challenger" .'</td>'.'</tr>';
echo '<tr><th>Your challengee</th>';
echo "<td>";
echo "$challengee" .'</td>'.'</tr>';

echo '<tr><th>Date Issued Challenge!</th>';
echo  '<td>';
echo "$issued".'</td>'.'</tr>';

echo '<tr> <th>Their acceptance date</th>';
echo  '<td>';
echo "$accepted".'</td>'.'</tr>';

echo '<tr> <th> Your scheduled date</th>';
echo  '<td>';
echo "$scheduled".'</td>'.'</tr>';

echo  "</tbody> <table> ";
 $db= null;
?>