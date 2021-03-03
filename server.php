<?php

header("Content-Type: application/json");
$data = json_decode(stripslashes(file_get_contents("php://input")));
// $v = json_decode(stripslashes($_POST["data"]));
// var_dump($v);
$obj = null;
$error = null;

$url = 'https://api.openweathermap.org/data/2.5/forecast?q=' . $data->city . '&appid=b2af191bb679ff73acfe40453bbc31cd&units=metric'; 

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

// var_dump($result);
$result = json_decode($result);
echo json_encode($result);

// if($result->cod === "400") {
//     $error = $result;
// } else {
//     $obj = $result;
    // var_dump($obj);
    // echo (int)$obj->list[0]->main->temp;
// }

?>