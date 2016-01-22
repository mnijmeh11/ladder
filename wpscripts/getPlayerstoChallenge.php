<?php   
#-#############################################
# desc: creates an <select> box
# param: name, array['val']="display" of data, default selected, extra parameters
# returns: html of box and options
$_SESSION['userName'];
$username = $_SESSION['userName'];
$valueforusername = $username; 
ini_set('display_errors','on');
error_reporting(E_ALL);

    try {
        include 'db.php';   
        $db = new PDO($dsn, $username, $password);

         $rows = $db -> query ("select username from player where rank  < (select rank from player where username = '$valueforusername') order by rank desc limit 3;");

      	   if($rows->rowCount() > 0) { 
            echo '<select class ="mytext" id="challengee" name="challengee" >';
            foreach($rows as $row) {
                	echo  '<option value="'. $row['username'].'">'. $row['username']. '</option>';
            }
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;   
?>