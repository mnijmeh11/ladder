<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        $placeholder = "Empty!";
		 $rows = $db->query("select challenger,challengee,issued,accepted, scheduled from challenge;");
        if($rows->rowCount() > 0) 
        {                              
            echo '<table class="playerlists scrollable">
                        <tr>
						  <th class="title1"><div>Complete</div></th>
                          <th class="title1"><div>view of</div></th>
                          <th class="title1"><div>the </div></th>
                          <th class="title1"><div>current</div></th>
                          <th class="title1"><div>players</div></th>
                          <th class="title1"><div>challenges</div></th>
				       </tr>
					  	<tr>
						  <th class="challenger"><div>challenger</div></th>
						  <th class="challengee"><div>challengee</div></th>
						  <th class="issued"><div>issued</div></th>
						  <th class="accepted"><div>accepted</div></th>
						  <th class="scheduled"><div>scheduled</div></th>
						   <th class="space"><div>space</div></th>
							</tr>
						<tbody>';
            foreach($rows as $row)
            {
            echo '<tr>'.'<td class="challenger"><div>'.$row['challenger'].'</div></td>'.'<td class="challengee"><div>'.$row['challengee'].'</div></td>'.'<td class="issued"><div>'.$row['issued'].'</div></td>'.'<td class="accepted"><div>'.$row['accepted']. '</div></td>'.'<td class="scheduled"><div>'.$row['scheduled'].'</div></td>'.'<td class="space"><div>'.$placeholder.'</div></td>'.'</tr>'; 
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