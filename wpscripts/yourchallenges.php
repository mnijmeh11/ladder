<?php   
#-#############################################
# desc: creates an <select> box
# param: name, array['val']="display" of data, default selected, extra parameters
# returns: html of box and options
################################################################
$_SESSION['userName'];
$username = $_SESSION['userName'];
$valueforusername = $username; 
ini_set('display_errors','on');
error_reporting(E_ALL); 
$currentdate = date('Y-m-d');
    try {
        include 'db.php';   
        $db = new PDO($dsn, $username, $password);
        
        $rows = $db -> query (" select * from challenge where challengee ='$valueforusername' and accepted is null;");
        if($rows->rowCount() > 0) { 
		    echo '<table class="mytext" >'; 
            echo '<tbody >'; 
            echo '<tr>'.'<th>Player</th>'.'<th>Player</th>'.'<th>Date</th>'. '<th>Current Date</th>'. '<th>Dated</th>'.'</tr>';
            foreach($rows as $row) {
echo '<form name="acceptorreject" id="acceptorreject" class = "mytext" action="displayacceptedchallenge.php" method="post">';
echo'<tr><td><label for="challenger" class= "css-label">Challenger:</label><input class ="mytext" for="challenger"  name="challenger" required id="challenger" value ="'.$row['challenger'].'" readonly maxlength="30" /></td>';
echo'<!--Getting his challengee address -->';
echo'<td><label for="challengee" class= "css-label" >challengee</label><input class ="mytext" type="text"  id="challengee"  name="challengee" required  value ="'.$row['challengee'].'" readonly/></td>	<td><label for="issued" class= "css-label" >issued</label><input class ="mytext" type="text"  id="issued"  name="issued" required  value ="'.$row['issued'].'" readonly/></td>';
echo '<td><label for="accepted" class= "css-label" >accepted rejected time</label><input class ="mytext" type="text"  id="accepted"  name="accepted" required  value ="'.$currentdate.'" readonly/></td><td><label for="scheduled" class= "css-label" >Scheduled</label><input class ="mytext" type="text"  id="scheduled"  name="scheduled" required  value ="'.$row['scheduled'].'"/></td>';
echo '<tr><td colspan="1"></td><td colspan="2"> <input class="button" name="submit" type="submit" value="Accept" formaction="displayacceptedchallenge.php";return true;"/></td>
<td colspan="2"><input class="button" name="deleted" type="submit" value="Delete" formaction="displayrejectedchallenge.php"; return true;"/>
             </td>
			  </tr></form> ';  
			}      
            echo '</tbody>';
            echo '</table>';             
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
