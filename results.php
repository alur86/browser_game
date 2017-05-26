 <!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Rock, Paper, Scissors game">
<meta name="author" content="">
<title>Simple game for browsers:Rock, Paper, Scissors:Score</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">
  <div class="row">
  <div class="col-sm-4 col-md-6">
<div class="panel panel-default">
  <div class="panel-heading"><h2>Our game area</h2></div>
  <div class="form-group">
 <?php 

session_start();

$choice_t2000=$_SESSION['sess_t2000'];   
$user= $_SESSION['sess_user'] ; 
$choiced = $_SESSION['sess_choiced'];  

    

      echo "<label for='results'>Game results:</label><br>
    <label for=you>You $user:</label><br>
    <img src='images/jconor.jpeg' width='100' height='100' alt='human' class='img-thumbnail'> <h5>Selected: <br> <i>$choiced </i></h5><br>
      <label for='t2000'>T2000:</label><br>
      <img src='images/t2000.jpeg' alt='t2000'  width='100' height='100' class='img-thumbnail'><br> <h5>Selected:<br>
     <i> $choice_t2000 </i></h5>";

if ($choice_t2000 == $choiced) {

echo "Draw, nobody win or loose";

}




if($choice_t2000 == "rock" && $choiced == "scissors") {

echo "T2000 now win";


}


if($choice_t2000 == "papper" && $choiced == "scissors") {

echo "$user now win";


}



if($choice_t2000 == "scissors" && $choiced == "rock") {

echo "$user now win";


}



 ?>

 
  </div>


</div>
 </div>
</div>

</body>
</html>