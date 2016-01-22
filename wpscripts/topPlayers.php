<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select (select count(winner)from game where public.player.username = public.game.winner group by winner), username, name from player where username in (select username from player intersect select winner from game) and rank is not null order by count desc limit 5;");
        if($rows->rowCount() > 0) 
        {    
            $i = 0;
            echo '<tbody>';
            echo '<tr><th>Rank</th><th>Wins</th> <th>username</th> <th>Player</th> </tr>';
            foreach($rows as $row)
            {
             $i++;
                echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.$row['count'].': '.'</td>'.'<td>'.$row['username'].'</td>'.'<td>'.$row['name'].'</td>'.'</tr>'; 
            }
            echo '</tbody>';
            echo '</table>';
            //echo 'Found '. $rows->rowCount() . ' players:<br />';
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>