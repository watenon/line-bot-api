<?php
$API_URL = 'https://api.line.me/v2/bot/message/push';
$ACCESS_TOKEN = 'nIdKs7N1DNhUa/nyZbZzvaRaoAlmlkAEldsVsL4Rwx3WBmuyvG9wnwRdapwxyRVSIHA1KVuXY0IWMESF1F8Vz0tGq51A2hnqoIgStjxOgobkJJqktObiab0T2UpP6f1GwtfW1z7T9v8YGHGRC+2faAdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
//$reply_message = iconv("tis-620","utf-8",$reply_message);
$data = [
 'to' => 'Ud796015c2b694f1be88f5f7de063e9c9',
 'messages' => [['type' => 'text', 'text' => 'ส่งข้อความจาก bot']]
];
$post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
$send_result = send_message($API_URL, $POST_HEADER, $post_body);
echo "Result: ".$send_result."\r\n";

function send_message($url, $post_header, $post_body)
{
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 $result = curl_exec($ch);
 curl_close($ch);
 return $result;
}
?>