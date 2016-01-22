<?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
          $placeholder = "Empty!";
        $rows = $db->query("select name,username,rank, email from player where rank is not null order by rank;");
        if($rows->rowCount() > 0) 
        {                              
            echo "<table class='playerlists scrollable'>
                    <tr>
						  <th class='title1'><div>Complete</div></th>
                          <th class='title1'><div>view of</div></th>
                          <th class='title1'><div>the </div></th>
                          <th class='title1'><div>current</div></th>
                          <th class='title1'><div>players</div></th>
                          <th class='title1'><div>playing</div></th>
				       </tr>
							<tr>
						  <th class='name'><div>Name</div></th>
						  <th class='rank'><div>Player's #</div></th>
						  <th class='username'><div>username</div></th>
						  <th class='email'><div>email</div></th>
                           <th class='space'><div>space</div></th>
                            <th class='space'><div>space</div></th>
							</tr>
						<tbody>";
            foreach($rows as $row)
            {
                echo '<tr>'.'<td class="name"><div>'.$row['name'].'</div></td>'.'<td class="rank"><div>'.$row['rank'].'</div></td>'.'<td class="username"><div>'.$row['username'].'</div></td>'.'<td class="email"><div>'.$row['email'].'</div></td>'.'<td class="space"><div>'.$placeholder.'</div></td>'.'<td class="space"><div>'.$placeholder.'</div></td>'.'</tr>'; 
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