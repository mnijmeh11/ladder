<?php
/*******************************
*Here i am taking the data from the playladder php and I am sending it to the system 
*I am also displaying the data to the user at the bottom of the php code
*I am updating the games and the matchview tables and delete a old challenge all at once...
*********************************/
global $db;
include 'db.php';
ini_set('display_errors','on');
error_reporting(E_ALL);
$currentuser=$winner= $winner1= $winner2=  $winner3= $loser= $loser1= $loser2= $loser3= $number1= $number2= $number3= $winner_score1= $winner_score2= $winner_score3= $played = $won= $lost = "";
$currentuserErr=$winnerErr= $winner1Err= $winner2Err=  $winner3Err= $loserErr= $loser1Err= $loser2Err= $loser3Err= $number1Err= $number2Err= $number3Err= $winner_score1Err= $winner_score2Err= $winner_score3Err= $playedErr = $wonErr= $lostErr = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
            if (empty($_POST["winner"])) 
			{
               $winnerErr = "winner is required";
            }
            else
            {
               $winner =($_POST["winner"]);   
            }
            if (empty($_POST["currentuser"])) 
			{
               $currentuserErr = "currentuser is required";
            }
            else
            {
               $currentuser =($_POST["currentuser"]);   
            }
            if (empty($_POST["winner1"])) 
			{
               $winner1Err = "winner is required";
            }
            else
            {
               $winner1 = ($_POST["winner1"]);
               
            }
            if (empty($_POST["winner2"])) 
			{  
               $winner2Err = "winner is required!";
            }
            else
            {
               $winner2 =($_POST["winner2"]);
            }
            if (empty($_POST["winner3"]))
			{  
               $winner3Err = "Winner is required";
            }
            else
            {  
               $winner3 =($_POST["winner3"]);
            }
            if (empty($_POST["loser"])) 
            {
               $loserErr = "loser is required!";
            }
            else
            {
               $loser = ($_POST["loser"]);
            }
            if (empty($_POST["loser2"])) 
			{
               $loser2Err = "loser is required!";
            }
            else
            {
               $loser2 = ($_POST["loser2"]);
            }
            if (empty($_POST["loser3"])) 
			{
               $loser3Err = "loser is required!";
            }
            else
            {
               $loser3=($_POST["loser3"]);
            }
            if (empty($_POST["number1"])) 
			{
               $number1Err = "number1 is required!";
            }
            else
            {
               $number1 =($_POST["number1"]);
            }
            if (empty($_POST["number2"])) 
			{
               $number2Err = "number2 is required!";
            }
            else
            {
               $number2=($_POST["number2"]);
            }
            if (empty($_POST["number3"]))
			{
               $number3Err = "number3 is required!";
            }
            else
            {
               $number3 =($_POST["number3"]);
            }
           if (empty($_POST["winner_score1"])) 
		   {
               $winner_score1Err = "winner_score1 is required!";
           }
            else
           {
               $winner_score1 =($_POST["winner_score1"]);
           }
            if (empty($_POST["winner_score2"]))
           {
               $winner_score2Err = "winner_score2 is required!";
           }
            else
           {
               $winner_score2 = ($_POST["winner_score2"]);
           }
			if (empty($_POST["winner_score3"])) 
		   {
               $playedErr = "winner_score3 is required!";
           }
            else
           {
               $winner_score3 =($_POST["winner_score3"]);
           }
			if (empty($_POST["played"])) 
		   {
               $playedErr = "played is required!";
           }
            else
           {
               $played = ($_POST["played"]);
           }
			if (empty($_POST["won"])) 
		   {
               $wonErr = "won is required!";
           }
            else
           {
               $won = ($_POST["won"]);
           }
			if (empty($_POST["lost"])) 
		   {
               $lostErr = "lost is required!";
           }
            else
           {
               $lost = ($_POST["lost"]);
           }

         function test_input($data) 
		 {
            $data = htmlspecialchars($data);
            return $data;
         } 
	}

$currentuser = pg_escape_string($_POST['currentuser']);
$winner= pg_escape_string($_POST['winner']);
$winner1 = pg_escape_string($_POST['winner1']);
$winner2 = pg_escape_string($_POST['winner2']);
$winner3 = pg_escape_string($_POST['winner3']);
$loser= pg_escape_string($_POST['loser']);
$loser1 = pg_escape_string($_POST['loser1']);
$loser2 = pg_escape_string($_POST['loser2']);
$loser3 = pg_escape_string($_POST['loser3']);
$number1 = pg_escape_string($_POST['number1']);
$number2 = pg_escape_string($_POST['number2']);
$number3 = pg_escape_string($_POST['number3']);
$winner_score1 = pg_escape_string($_POST['winner_score1']);
$winner_score2 = pg_escape_string($_POST['winner_score2']);
$winner_score3 = pg_escape_string($_POST['winner_score3']);
$loser_score1 = pg_escape_string($_POST['loser_score1']);
$loser_score2 = pg_escape_string($_POST['loser_score2']);
$loser_score3 = pg_escape_string($_POST['loser_score3']);
$played = pg_escape_string($_POST['played']);
$won = pg_escape_string($_POST['won']);
$lost = pg_escape_string($_POST['lost']);






try {

 $db = new PDO($dsn, $username, $password);
  //echo "Connected\n";
} 
catch (Exception $e) 
{
  die("Unable to connect: " . $e->getMessage());
}

try {  
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->beginTransaction();
$db->exec("delete from challenge where challenger='$winner1' and scheduled ='$played';");
$db->exec("insert into game(winner, loser, played, number, winner_score, loser_score) values ('$winner1','$loser1','$played','$number1', '$winner_score1','$loser_score1');");
$db->exec("insert into game(winner, loser, played, number, winner_score, loser_score) values ('$winner2','$loser2','$played','$number2',$winner_score2,$loser_score2);");
$db->exec("insert into game(winner, loser, played, number, winner_score, loser_score) values ('$winner3','$loser3','$played',$number3,$winner_score3,$loser_score3);");
$db->exec(" DROP VIEW match_view;");
$db->exec('create view match_view as 
select distinct g.winner, g.loser, g.played, 
   (select count(*) from game as w where g.winner = w.winner and
                                         g.loser = w.loser and
                                         g.played = w.played) as won, 
   (select count(*) from game as l where g.loser = l.winner and
                                         g.winner = l.loser and
                                         g.played = l.played) as lost
   from game as g where
      (select count(*) from game as w where g.winner = w.winner and
                                         g.loser = w.loser and
                                         g.played = w.played) >
      (select count(*) from game as l where g.loser = l.winner and
                                         g.winner = l.loser and
                                         g.played = l.played);');
$db->commit();
}   
  catch (Exception $e) 
{
  $db->rollBack();
  echo "Failed: " . $e->getMessage();
}
 

echo  '<table   class="MyUpdate"> <tbody>';
echo  '<tr><th colspan="10" >updated games and matches</td></tr>';
echo  '<tr><th>Winner #1: &nbsp;</th>';
echo  '<td>'."$winner1" .'</td>';
echo '<th>loser #1</th>';
echo '<td>'."$loser1" .'</td>';
echo '<th>Winner Score!</th>';
echo  '<td>'."$winner_score1".'</td>';
echo '<th>Loser Score</th>';
echo  '<td>'. "$loser_score1".'</td>';
echo '<td colspan="2"><td></tr>';

echo  '<tr><th>Winner #2: &nbsp;</th>';
echo  '<td>'."$winner2" .'</td>';
echo '<th>loser #2</th>';
echo '<td>'. "$loser2" .'</td>';
echo '<th>Winner Score!</th>';
echo  '<td>'."$winner_score2".'</td>';
echo '<th>Loser Score!</th>';
echo  '<td>'."$loser_score2".'</td>';
echo '<td colspan="2"><td></tr>';

echo '<tr><th>Winner #3: &nbsp;</th>';
echo '<td>'."$winner3" .'</td>';
echo '<th>loser #3</th>';
echo '<td>'."$loser3" .'</td>';
echo '<th>Winner Score!</th>';
echo '<td>'."$winner_score3".'</td>';
echo '<th>Loser Score</th>';
echo '<td>'."$loser_score3".'</td>';
echo '<td colspan="2"><td></tr>';

echo '<tr><th>Winner of Match: &nbsp;</th>';
echo '<td>'."$winner" .'</td>';
echo '<th>loser of Match</th>';
echo '<td>'."$loser".'</td>';
echo '<th>Date Played</th>';
echo '<td>'."$played".'</td>';
echo '<th>Won</th>';
echo '<td>'."$won".'</td>';
echo '<th>Lost</th>';
echo '<td>'. "$lost".'</td>'.'</tr>';
echo  '</tbody> <table>';


 $db= null;
?>