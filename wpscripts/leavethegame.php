
<?php
 include 'db.php';   
global $db;
        $db = new PDO($dsn, $username, $password);
$username1=$_POST['username1'];
$username1 = stripslashes($username1);
$_SESSION['username1'] = $username1;
$valueforusername = $username1; 
try {

 $db = new PDO($dsn, $username, $password);
  echo "Connected\n";
} catch (Exception $e) {
  die("Unable to connect: " . $e->getMessage());
}

try {  
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $db->beginTransaction();
  $db->exec("delete from game where exists (select * from game where winner='".$valueforusername."');");
  $db->exec("delete from game where exists (select * from game where loser='".$valueforusername."')");
  $db->exec("delete from challenge where exists (select * from challenge where challengee='".$valueforusername."');");
  $db->exec("delete from challenge where exists (select * from challenge where challenger='".$valueforusername."')");
  $db->exec("delete from player where username='".$valueforusername."';");
  $db->commit();
      echo $valueforusername;
	unset($_SESSION);
	session_write_close();

header("Location: ../thankyou.php"); 
die;

} catch (Exception $e) {
  $db->rollBack();
  echo "Failed: " . $e->getMessage();
}
?>