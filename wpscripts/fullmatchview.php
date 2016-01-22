<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
         $placeholder = "Empty!";
        $rows = $db->query("select * from match_view;");
        if($rows->rowCount() > 0) 
        {                              
            echo '<table class="playerlists scrollable">
                      <tr>
						  <th class="title1"><div>Complete</div></th>
                          <th class="title1"><div>view of</div></th>
                          <th class="title1"><div>the </div></th>
                          <th class="title1"><div>View</div></th>
                          <th class="title1"><div>of </div></th>
                          <th class="title1"><div>Matches</div></th>
				       </tr>';
            echo '
				          <tr>
						  <th class="winner"><div>Winner</div></th>
						  <th class="loser"><div>Loser</div></th>
						  <th class="played"><div>Played Date</div></th>
						  <th class="won"><div>won</div></th>
						  <th class="lost"><div>lost</div></th>
                          <th class="space"><div>space</div></th>
							</tr>
						<tbody>';
            foreach($rows as $row)
            {
                echo '<tr>'.'<td class="winner"><div>'.$row['winner'].'</div></td>'.'<td class="loser"><div>'.$row['loser'].'</div></td>'.'<td class="played"><div>'.$row['played'].'</div></td>'.'<td class="won"><div>'.$row['won']. '</div></td>'.'<td class="lost"><div>'.$row['lost']. '</div></td>'.'<td class="space"><div>'.$placeholder.'</div></td>'.'</tr>'; 
            }
            echo '</tbody>';
            echo '</table>';
            echo '	</div>
				</div>
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
				<script type="text/javascript">
				  $(document).ready(function() {
					$(".scrollingArea").height( $(window).height()-200 );
					$(window).resize(function() { $(".scrollingArea").height( $(window).height()-200 ); } );
                  });
				</script>';
            //echo 'Found '. $rows->rowCount() . ' players:<br />';
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;
?>