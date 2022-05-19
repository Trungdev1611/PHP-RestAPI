<?php 
// readphp ---- doc du lieu tu database - phuong thuc GET:id
header('Access-Control-Allow-Origin:*');
header('ConTent-Type:application/json');
include('../../config/databse.php');
include ('../../Model/question.php');

$db = new db;
$conn = $db->Connect_db();

//truyen $conn du lieu sang constructor ben Question
$question = new Question($conn);


// echo('idfind ben show.php    '.$_GET['id']);
if(isset($_GET['id'])) {
    
   $resul1 =  $question->show(($_GET['id']));
}
else {
    die();
}

if($resul1->num_rows > 0 ) {
    $myarr = []; //khoi tao 1 array trong - support tu php 5.4
      while($row = $resul1->fetch_assoc()) {
        array_push($myarr, $row);
      };
      
    echo(json_encode($myarr));
  }
  else {
      echo ('0 result');
  }





?>