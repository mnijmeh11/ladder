 <?php
    include 'db.php';
    try {
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db->query("select rank, name as player_name,
(select sum(public.match_view.won) 
--1.here I am trying to find matches won by player( only match won)
FROM public.match_view 
WHERE public.player.username = public.match_view.winner and public.player.rank is not null
GROUP BY public.player.username) as match_won,
(select sum(public.match_view.lost) 
--2.here I am trying to find matches lost by player( only match lost)
FROM public.match_view 
WHERE public.player.username = public.match_view.loser and public.player.rank is not null
GROUP BY public.player.username) as match_lost,
(select round(100.0*(sum(public.match_view.lost)/sum(public.match_view.lost + public.match_view.won)),2)
--3.here I am trying to find matches lost percentage by player (only lost match)
FROM public.match_view
WHERE public.player.username = public.match_view.loser and public.player.rank is not null
GROUP BY public.player.username) as match_lost_percentage,
(select round (100.0 *(sum(public.match_view.won)/sum(public.match_view.lost + public.match_view.won)),2)
---4.here I am finding total percentage won from total games 
FROM public.match_view
WHERE public.player.username = public.match_view.winner and public.player.rank is not null
GROUP BY public.player.username) as match_win_percentage,
(select (avg(public.game.loser_score) - avg(public.game.winner_score))
from public.game
where public.player.username = public.game.winner  or 
public.player.username = public.game.loser and public.player.rank is not null
GROUP BY public.player.username) as Diff_avg_lost,
(select (avg(public.game.winner_score) - avg(public.game.loser_score))
from public.game
where public.player.username = public.game.winner  or 
public.player.username = public.game.loser and public.player.rank is not null
GROUP BY public.player.username) as Diff_avg_won
FROM public.player
	JOIN public.match_view 
	     on public.player.username = public.match_view.winner or 
	     public.player.username = public.match_view.loser and public.player.rank is not null
	JOIN public.game
	     on public.player.username = public.game.loser or  
	     public.player.username = public.game.winner and public.player.rank is not null
	     GROUP BY public.player.username
ORDER BY public.player.rank;
");
        if($rows->rowCount() > 0) 
        {   
            echo '<tbody><tr>'.
            "<th>Player's #</th>".
            "<th>Player's Name</th>".
            '<th>Winning Percent</th>'.
            "<th>Margin Loss</th>".
            '<th>Games Won</th>'.
            "<th>Games Lost</th>".
            '</tr>';

			
            foreach($rows as $row)
            {
                echo 
                '<tr>'.
                '<Td>'.$row['rank'].': ' . '</Td>' .
                '<Td>'.$row['player_name'].'</Td>'. 
                '<td>'.$row['match_won'].'</td>'.
                '<td>'.$row['match_lost'].'</td>'.
                '<td>'.$row['match_win_percentage'].'</td>'.
                '<td>'.$row['match_lost_percentage'].'</td>'.
                '</tr>'; 
            }
        } else {
            echo 'No players found.';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null; 
    ?>