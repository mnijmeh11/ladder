<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select rank from player order by rank;");
        if($rows->rowCount() > 0)
        {
          //  echo  $rows->rowCount() + 1;
            $sendme = $rows->rowCount() + 1;
            echo '<input  class="mytext" value="'.$sendme.'"   type="text" id="rank" name="rank" readonly />';
        }
        else        
        {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>