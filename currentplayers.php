  <?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select name from player order by rank");
        if($rows->rowCount() > 0) {
            echo 'Found ' . $rows->rowCount() . ' players:<br />';
            echo '<ol>';
            foreach($rows as $row) {
                echo '<li>'.$row['name'] . '</li>';
            }
            echo '</ol>';
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>