<?php

require_once 'RESTful.php';

$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$xml = file_get_contents($url); //Reads entire file into a string

$response = curl_get($url);
$xml = simplexml_load_string($response);

$cnt = count($xml->channel->item);

$count = $_POST['count'];

if ($count > $cnt) {
	$count = $cnt;
}

//var_dump($xml);
$output = '
	<div class="grey_bar">
		BBC News <button id="bbc_chuck" type="button" class="btn btn-sm btn-danger">Gimme more Chuck!</button>
	</div>
		<div class="wrapper_2columns">
			<div class="wrapper_6image_bar">
				<div class="top_news_img">
';

$images = '';

for($i=0; $i < $count; $i++){
    $url = $xml->channel->item[$i]->link;
    $title = $xml->channel->item[$i]->title;
    $image = $xml->channel->item[$i]->children('media', true)->thumbnail->attributes()->url;

	$output .= '
			<div class="mini_flex">
													
			<a href="'.$url.'" title="Link me to BBC!" target="_blank">
			 	<img src="'.$image.'" alt="">
			</a>
		
			<div class="img_p">
				<p>'.$title.'</p>
			</div>
		</div>
		';
}

$output .= '
							</div>
							</div>
					</div>
				</div>
			</div>
';

echo $output;

?>
