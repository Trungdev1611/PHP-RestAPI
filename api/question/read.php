<?php 
header('Access-Control-Allow-Origin:*');
header('ConTent-Type:application/json');
include('../../config/databse.php');
include ('../../Model/question.php');

// readphp ---- doc du lieu tu database - phuong thuc GET
$db = new db;
$conn = $db->Connect_db();

//truyen $conn du lieu sang constructor ben Question
$question = new Question($conn);

//chay phuong thuc read trong question
$read = $question->read();

// kiem tra du lieu tra ve (neu co du lieu so hang >0)
if($read->num_rows > 0 ) {
  $myarr = []; //khoi tao 1 array trong - support tu php 5.4
    while($row = $read->fetch_assoc()) {
      array_push($myarr, $row);
    };
    
  echo(json_encode($myarr));
}
else {
    echo ('0 result');
}
?>