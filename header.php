<?php 
if (isset($_COOKIE[city])) {
	if (strtolower('Санкт-Петербург')==strtolower($_COOKIE[city])) {$phone="+7 (921) 956-48-56";$region="Санкт-Петербург";}
	elseif (strtolower('Нижний Новгород')==strtolower($_COOKIE[city])) {$phone="+7 (903) 100-00-37";$region="Нижний Новгород";}
	elseif (strtolower('Тамбов')==strtolower($_COOKIE[city])) {$phone="+7 (4752) 641-771";$region="Тамбов";}
	elseif (strtolower('Симферополь')==strtolower($_COOKIE[city])) {$phone="+7 (978) 763-32-82";$region="Симферополь";}
	else {$phone="+7 (800) 100-14-09";$region="Москва";}
} else {
	$client  = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote  = @$_SERVER['REMOTE_ADDR'];
	 
	if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
	elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
	else $ip = $remote;
	 
	$ip_data = json_decode(file_get_contents("http://api.sypexgeo.net/json/".$ip), true);
	setcookie("city", $ip_data[city][name_ru], time()+360000);

	if (strtolower('Санкт-Петербург')==strtolower($ip_data[city][name_ru])) {$phone="+7 (921) 956-48-56";$region="Санкт-Петербург";}
	elseif (strtolower('Нижний Новгород')==strtolower($ip_data[city][name_ru])) {$phone="+7 (903) 100-00-37";$region="Нижний Новгород";}
	elseif (strtolower('Тамбов')==strtolower($ip_data[city][name_ru])) {$phone="+7 (4752) 641-771";$region="Тамбов";}
	elseif (strtolower('Симферополь')==strtolower($ip_data[city][name_ru])) {$phone="+7 (978) 763-32-82";$region="Симферополь";}
	else {$phone="+7 (800) 100-14-09";$region="Москва";}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DomeDom</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/style-xl.css" media="only screen and (max-width:1200px)">
	<link rel="stylesheet" href="/css/style-lg.css" media="only screen and (max-width:992px)">
	<link rel="stylesheet" href="/css/style-md.css" media="only screen and (max-width:768px)">
	<link rel="stylesheet" href="/css/style-xs.css" media="only screen and (max-width:576px)">
</head>
<body>
	<section id="head-shield"></section>
	<header id="header-top" class="header-top">
	<nav class="navbar navbar-expand-lg navbar-light">
  		<a class="navbar-brand" href="http://pod-domen.smart-perm.com/"><img src="/img/logo.png" alt=""></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="http://pod-domen.smart-perm.com/">Главная</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="http://pod-domen.smart-perm.com/cooperation.php">Сотрудничество</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="http://pod-domen.smart-perm.com/franchaise.php">Франшиза производства</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="http://pod-domen.smart-perm.com/cases.php">Бизнес-кейсы</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="http://pod-domen.smart-perm.com/special_projects.php">Спецпроекты</a>
	      </li>	      
	    </ul>	
	  </div>
	</nav>
		<div class="wrap-top-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top-menu fx-cnt-right">
							<a id="menu-phone"><?=$phone;?></a>
							<audio src="/audio/domedomdemo3.wav"></audio>
							<button class="btn-audio"></button>
							<a href="/region-all.php"><?=$_COOKIE[city];?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap-header">
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="logo-shield"></div>
						<a href="http://pod-domen.smart-perm.com/">
							<div class="wrap-logo">
								<div class="logo">
									<img src="/img/logo.png" alt="">
									<p>теплые дома за 7 дней</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col">
						<div class="menu fx-cnt-between">
							<ul class="nav-menu">
								<li><a href="http://pod-domen.smart-perm.com">Главная</a></li>
								<li><a href="http://pod-domen.smart-perm.com/cooperation.php">Сотрудничество</a></li>
								<li><a href="http://pod-domen.smart-perm.com/franchaise.php">Франшиза производства</a></li>
								<li><a href="http://pod-domen.smart-perm.com/cases.php">Бизнес-кейсы</a></li>
								<li><a href="http://pod-domen.smart-perm.com/special_projects.php">Спецпроекты</a></li>
							</ul>
							<button id="menu-cback" data-fancybox="" data-src="#popup-form">Обратный звонок</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>