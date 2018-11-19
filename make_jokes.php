<?php
require_once 'RESTful.php';

$type = strtolower($_POST['type']);

if ($type == 'serri'){
	$url = 'http://api.serri.codefactory.live/random/';
	$xml = file_get_contents($url); //Reads entire file into a string

	$response = curl_get($url);
	$arr = json_decode($response,true);

	echo($arr['joke']);
} else if ($type == 'chuck') {
	$url = 'https://api.chucknorris.io/jokes/random';
	$xml = file_get_contents($url); //Reads entire file into a string

	$response = curl_get($url);
	$arr = json_decode($response,true);

	echo($arr['value']);
} else {
	echo "No jokes for today!";
}


?>
