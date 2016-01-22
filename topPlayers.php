<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select name,username,rank from player where rank <= 10 order by rank;");
        if($rows->rowCount() > 0) 
        {   
            echo '<tbody>';
            echo '<th>Rank</th>'.'<th>Name</th>'.'<th>User Name</th>';
            foreach($rows as $row)
            {
                echo '<tr>'.'<Td>'.$row['rank'].': '.'</Td>'.'<Td>'.$row['name'].'</Td>'.'<td>'.$row['username'].'</td>'.'</tr>'; 
            }
            echo '</tbody>';
            echo '</table>';
            echo 'Found '. $rows->rowCount() . ' players:<br />';
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>