<!DOCTYPE html>
<html lang="en">
<head>
	<title>newspaper CF</title>
	<meta name="Newspaper" content="website for the newspaper CF company">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<div class="body_wrapper">
		<header class="header_top">
			<img class="img_left" src="css/img/logo-newspaper-cf.png" alt="Sorry, but your browser doesn't support that pic">
			
			<a href="https://www.codefactory.wien" title="codefactory.wien">
				<img class="img_right" id="hide_header_pic" src="css/img/banner-1.png" alt="Sorry, but your browser doesn't support that pic">
			</a>
		</header>

		<nav class="nav_top">
			<ul>
				<li><a href="#" title="Back to where you started">Home</a></li>
				<li><a id="BBC" href="#" title="BBC News just for you!">BBC</a></li>
				<li><a href="culture.html" title="You like culture, click me">Culture</a></li>
				<li><a href="video.html" title="Youtube substitute">Video</a></li>
			</ul>
		</nav>

		<main>
			<h5 id="clock-wrapper"></h5>
			<div class="wrapper_2row bg-info rounded p-2 text-white text-center my-3 mx-auto">
				<button id="serri" class="btn btn-sm btn-danger joke_button">Serri gimme Jokes!</button>
				<button id="chuck" class="btn btn-sm btn-danger joke_button">Chuck gimme Jokes!</button>
				<h3 id="jokes" class="m-3">
					<!-- HERE GOES THE JOKE -->
				</h3>
			</div>

			<div id="news_container">	
				<!-- HERE GOES THE AJAX RESPONSE -->
			</div>
		
		</main>
	
	<footer>
		<nav class="nav_bottom">
			<ul>
				<li><a href="#" title="Back to where you started">Home</a></li>
				<li><a href="article.html" title="Tech News, just for you">Tech</a></li>
				<li><a href="culture.html" title="You like culture, click me">Culture</a></li>
				<li><a href="video.html" title="Youtube substitute">Video</a></li>
			</ul>
		</nav>
		<img class="img_footer" src="css/img/logo-newspaper-cf.png" alt="">
		<h3>Marco Häfner - CodeFactory 2018</h3>
	</footer>
	<script
 	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
	<script src="index.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>