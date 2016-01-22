<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select challenger,challengee,issued,accepted, scheduled from challenge where scheduled >= current_date order by scheduled;");
        if($rows->rowCount() > 0) 
        {   
            echo '<tbody> <thead> ';
            echo '<tr>'.'<th>challenger</th>'.'<th>challengee</th>'.'<th>issued</th>'. '<th>accepted</th>'. '<th>scheduled</th>'.'</tr> </thead>';
			echo '<tfoot> ';
            echo '<tr>'.'<th>challenger</th>'.'<th>challengee</th>'.'<th>issued</th>'. '<th>accepted</th>'. '<th>scheduled</th>'.'</tr> </tfoot>';
            foreach($rows as $row)
            {
            echo '<tr>'.'<Td>'.$row['challenger']. '</Td>'. '<Td>'. $row['challengee']. '</Td>'. '<td>'. $row['issued']. '</td>'. '<td>'. $row['accepted']. '</td>'. '<td>'. $row['scheduled']. '</td>'. '</tr>'; 
            }
            echo '</tbody>';
            echo '</table>';  
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>