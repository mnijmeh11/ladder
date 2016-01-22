<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
          $placeholder = "Empty!";
        $rows = $db->query("select (select count(winner)from game where public.player.username = public.game.winner group by winner), username, name, email from player where username in (select username from player intersect select winner from game) and rank is not null order by count desc;");
        if($rows->rowCount() > 0) 
        {                            
            echo '<div class="scrollableContainer" style="top:200px;left:middle;">
				  <div class="scrollingArea">
					<table class="playerlists scrollable">
                    <thead>
                    <tr>
						  <th class="title1" >Complete view of the current players stats</th>
				       </tr>
                    </thead>
                    <tr>
						  <th class="title1"><div>Complete</div></th>
                          <th class="title1"><div>view of</div></th>
                          <th class="title1"><div>the </div></th>
                          <th class="title1"><div>current</div></th>
                          <th class="title1"><div>players</div></th>
                          <th class="title1"><div>ranking</div></th>
				       </tr>
							<tr>
						  <th class="rank"><div>Rank</div></th>
						  <th class="rank"><div>Wins</div></th>
						  <th class="username"><div>username</div></th>
						  <th class="email"><div>email</div></th>
                           <th class="name"><div>Player</div></th>
                            <th class="space"><div>space</div></th>
							</tr>
						<tbody>';
					 $i = 0;
            foreach($rows as $row)
            {
			   $i++;
                echo '<tr>'.'<td class="Rank"><div>'.$i.'</div></td>'.'<td class="rank"><div>'.$row['count'].'</div></td>'.'<td class="username"><div>'.$row['username'].'</div></td>'.'<td class="email"><div>'.$row['email'].'</div></td>'.'<td class="name"><div>'.$row['name'].'</div></td>'.'<td class="space"><div>'.$placeholder.'</div></td>'.'</tr>'; 
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