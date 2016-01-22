<?php   
#-#############################################
# desc: creates an <select> box
# param: name, array['val']="display" of data, default selected, extra parameters
# returns a form to update the games....
###############################################
$_SESSION['userName'];
$username = $_SESSION['userName'];
$valueforusername = $username; 
ini_set('display_errors','on');
error_reporting(E_ALL); 
    try {
        include 'db.php';   
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db -> query (" select * from challenge where challenger ='$valueforusername' and accepted is null;");
        if($rows->rowCount() > 0) { 
		    echo '<table class="mytext"  >'; 
            echo '<tbody style="border-style: solid;  border-width: 3px;" >'; 
            foreach($rows as $row) {
echo '<form name="updatemygame" id="updatemygame" class = "mytext" action="displayupdatedgamesandmatch.php" method="post">';
echo '<tr>'.'<th>Winner</th>'.'<th>Losser</th>'.'<th>Game #</th>'.'<th>Won</th>'. '<th>Lost</th>'.'<th>Winner</th>'.'<th>Losser</th>'.'<th>Game #</th>'.'<th>Won</th>'.'<th>Lost</th>'.'<th>Winner</th>'.'<th>Losser</th>'.'<th>Game #</th>'.'<th>Won</th>'.'<th>Lost</th>'.'</tr>';

echo'<!--first game address -->';
echo'<tr><td><select class="mytext" id="winner1" name="winner1">';
echo '<option value="'.$row['challenger'].'">'.$row['challenger'].'</option>';
echo '<option value="'.$row['challengee'].'">'.$row['challengee'].'</option> </td>'; 
echo'<td><select class="mytext" name="loser1" id="loser1" >';
echo'<option value="'. $row['challenger'].'">'. $row['challenger'].'</option>';
echo'<option value="'. $row['challengee'].'">'. $row['challengee']. '</option> </td>';   
echo'<td><label for="number1"></label><input class="css-input" type="number" name="number1" required id="number1" value ="1" readonly /></td>';
echo'<td><label for="winner_score1"></label><input class ="css-input" type="number" name="winner_score1" required id="winner_score1" value="" maxlength="1" min="1" max="10"/></td>';
echo'<td><label for="loser_score1"></label><input class ="css-input" type="number"  name="loser_score1" required id="loser_score1" value="" maxlength="1" min="1" max="10"/></td>';
                
echo'<!--second game address -->';
echo'<td><select class ="mytext" name="winner2" id="winner2">';
echo'<option value="'. $row['challenger'].'">'. $row['challenger']. '</option>';
echo'<option value="'. $row['challengee'].'">'. $row['challengee']. '</option> </td>'; 
echo'<td><select class ="mytext" name="loser2" id="loser2">';
echo'<option value="'.$row['challenger'].'">'.$row['challenger']. '</option>';
echo'<option value="'.$row['challengee'].'">'.$row['challengee']. '</option> </td>';   
echo'<td><label for="number2"></label><input class="css-input" id="number2" type="number" name="number2" required value ="2" readonly /></td>';
echo'<td><label for="winner_score2"></label><input class="css-input" type="number" name="winner_score2" required id="winner_score2" value="" maxlength="1" min="1" max="10"/></td>';
echo'<td><label for="loser_score2"></label><input class ="css-input" type="number" name="loser_score2" required id="loser_score2" value ="" maxlength="1" min="1" max="10"/></td>';
                
echo'<!--3rd game address -->';
echo'<td><select class="mytext" name="winner3" id="winner3">';
echo'<option value="'.$row['challenger'].'">'. $row['challenger'].'</option>';
echo'<option value="'.$row['challengee'].'">'.$row['challengee']. '</option></td>'; 
echo'<td><select class="mytext" name="loser3" id="loser3">';
echo'<option value="'.$row['challenger'].'">'.$row['challenger'].'</option>';
echo'<option value="'.$row['challengee'].'">'. $row['challengee'].'</option></td>';   
echo'<td><label for="number3"></label><input class="css-input" type="number" name="number3" required id="number3" value ="3" readonly /></td>';
echo'<td><label for="winner_score3"></label><input class="css-input" type="number" name="winner_score3" required id="winner_score3" value ="" maxlength="1" min="1" max="10"/></td>';
echo'<td><label for="loser_score3"></label><input class="css-input" type="number" name="loser_score3" required id="loser_score3" value ="" maxlength="1" min="1" max="10"/></td></tr>';
                
echo'<!--Getting his match_view -->';
echo'<tr><td><label for="winner">Winner of Match</label>';
echo'<select class ="mytext" id="winner" name="winner" >';
echo'<option value="'. $row['challenger'].'">'. $row['challenger'].'</option>';
echo'<option value="'. $row['challengee'].'">'. $row['challengee'].'</option></td>'; 
echo'<td><label for="winner">Loser of Match</label>';
echo'<select class ="mytext" id="loser" name="loser" >';
echo'<option value="'. $row['challenger'].'">'. $row['challenger']. '</option>';
echo'<option value="'.$row['challengee'].'">'.$row['challengee'].'</option> </td>';           
echo'<td><label for="played">Played</label><input class="mytext2" type="date-local" name="played" required id="played" value ="'.$row['scheduled'].'" readonly /></td>';
echo'<td><label for="won">Wins</label><input class="css-input" type="number" id="won"  name="won" required  value="" maxlength="2" min="1" max="3"/></td>';
echo'<td><label for="lost">Losses</label><input class="css-input" type="number" name="lost" required id="lost" value="" maxlength="2" min="0" max="2"/></td>';
echo '<td colspan="1"></td><td colspan="2"> <input class="button" name="submit" type="submit" value="Update" ;return true;"/></td>
			 <td colspan="2"><button  onclick="resetValidationStatus(this.form);"  class="button" id="rest" type="reset">Reset</button>
             </td>   
             <td><input type="hidden" name="currentuser" id="currentuser"  value="'.$valueforusername.'"><td>
			  </tr></form> ';  
			}      
            echo '</tbody>';
            echo '</table>'; 
            echo '<hr />';
        } 
        else
        {
            echo '<img src="wpimages/error.png" alt="Smiley face" width="42" height="42" align="left"><textarea class ="displayerror" readonly >No New Challenges to display for you to accept.</textarea></p>';
        }
    } catch(PDOException $e) {
        echo '<strong>Database connection failed!</strong>';
    }
    $db = null;   
?>