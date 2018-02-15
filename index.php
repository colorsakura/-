<?php
require_once 'AipOcr.php';

// 我的 APPID AK SK
const APP_ID = '10656763';
const API_KEY = 'urNeeZmhwz07UIRUIeFGKtgW';
const SECRET_KEY = 'jKYfkVbc91HjLaG2mNExR7dcaZ9inTPh';

$client = new AipOcr(APP_ID, API_KEY, SECRET_KEY);

// $image = file_get_contents('2.png');

// 调用通用文字识别, 图片参数为本地图片
// $client->basicGeneral($image);

// $result = $client;
// echo json_encode($result);

$result= json_encode($client->basicAccurate(file_get_contents('2.png')), JSON_PRETTY_PRINT);
$words = json_decode($result);
print_r($words->words_result);
//echo $result;


?>
