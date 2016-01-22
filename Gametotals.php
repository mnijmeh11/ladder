   <?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        echo '<tbody>';
	    echo '<th>Played Games</th>'.'<th>Total Players</th>'.'<th>Challenges open</th>';
        $count = $db->query("select count(number) from game;");
		$count = $db->query( "select count(player) from player;");
		$count = $db->query("select count(challenger) from challenge;");
        if($count->count() > 0) 
        {   
              foreach($count as $count)
            {
                echo '<tr>'.'<Td>'.$count['count(number)'].'</Td>'; 
				 echo '<Td>'.$count['count(player)'].'</Td>'; 
				echo '<Td>'.$count['count(challenger)'].'</Td>'.'</tr>'; 
            }
 
        } 
		else 
		{
            echo 'No players found.';
        }
		
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
			echo '</tbody>';
            echo '</table>'; 

    $db = null; 
    ?>