include (php/line-bot.php');

$channelSecret = 'a074204015f62d9298bca81a9ab2d2ec';
$access_token  = 'nIdKs7N1DNhUa/nyZbZzvaRaoAlmlkAEldsVsL4Rwx3WBmuyvG9wnwRdapwxyRVSIHA1KVuXY0IWMESF1F8Vz0tGq51A2hnqoIgStjxOgobkJJqktObiab0T2UpP6f1GwtfW1z7T9v8YGHGRC+2faAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}else{
	echo 'no event';
	exit();
}