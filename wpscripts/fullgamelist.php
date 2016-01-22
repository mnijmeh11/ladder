<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select winner,loser,played,number,winner_score, loser_score from game;");
        if($rows->rowCount() > 0) 
        {                              
            echo '<table class="playerlists scrollable">
                          <tr>
						  <th class="title1"><div>Complete</div></th>
                          <th class="title1"><div>view of</div></th>
                          <th class="title1"><div>the </div></th>
                          <th class="title1"><div>current</div></th>
                          <th class="title1"><div>players</div></th>
                          <th class="title1"><div>playing<games!/div></th>
				       </tr>
							<tr>
						  <th class="winner"><div>Winner</div></th>
						  <th class="loser"><div>Loser</div></th>
						  <th class="played"><div>Played Date</div></th>
						  <th class="number"><div>Number</div></th>
						  <th class="winner_score"><div>Winner_s Score</div></th>
						  <th class="loser_score"><div>Loser_s Score</div></th>
							</tr
						<tbody>';
            foreach($rows as $row)
            {
                echo '<tr>'.'<td class="winner"><div>'.$row['winner'].'</div></td>'.'<td class="loser"><div>'.$row['loser'].'</div></td>'.'</div></td>'.'<td class="number"><div>'.$row['number'].'<td class="played"><div>'.$row['played'].'</div></td>'.'<td class="winner_score"><div>'.$row['winner_score'].'</div></td>'.'<td class="loser_score"><div>'.$row['loser_score'].'</div></td>'.'</tr>'; 
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