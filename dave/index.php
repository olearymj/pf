<!DOCTYPE html>
<?php

require_once('geoplugin.class.php');
    $geoplugin = new geoPlugin();
    $geoplugin->locate();

    $txt = $_SERVER['REMOTE_ADDR'];

$to = "jolmcn@gmail.com";
$subject = "Someone Visited Dave's Page!";
$headers = "From: jolmcn@gmail.com";


if( $txt != '89.101.74.26' && $txt != '127.0.0.1' ){
	$txt = $_SERVER['REMOTE_ADDR']."Geolocation results for {$geoplugin->ip}: <br />\n".
        "City: {$geoplugin->city}\n".
        "Region: {$geoplugin->region}\n".
        "Area Code: {$geoplugin->areaCode}\n".
        "DMA Code: {$geoplugin->dmaCode}\n".
        "Country Name: {$geoplugin->countryName}\n".
        "Country Code: {$geoplugin->countryCode}\n".
        "Longitude: {$geoplugin->longitude}\n".
        "Latitude: {$geoplugin->latitude}\n".
    	"Currency Code: {$geoplugin->currencyCode}\n".
    	"Currency Symbol: {$geoplugin->currencySymbol}\n".
    	"Exchange Rate: {$geoplugin->currencyConverter}\n";
		mail($to,$subject,$txt,$headers);
}
?>
<html>
	<head>
		<title>happy birthday dave</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src='dave.js'></script>
		<link rel="stylesheet" type="text/css" href="dave.css">
	</head>
<body>
	<div class="tabler">
		<div class="tease tease_one"></div>
		<div class="tease tease_two hidden"></div>
		<div class="tease tease_three hidden"></div>
		<div class="tease tease_roll tease_roll_one hidden">
			<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"></a>
		</div>
		<div class="tease tease_roll tease_roll_two hidden">
			<a href="https://www.youtube.com/watch?v=IDfLETGv28g"></a>
		</div>
		<div class="tease tease_roll tease_roll_three hidden">
			<a href="https://www.youtube.com/watch?v=GmZ2ICOZ8mo"></a>
		</div>
		<div class="tease tease_roll tease_roll_four hidden">
			<a href="https://www.youtube.com/watch?v=xorVOdMWrkU"></a>
		</div>
		<div class="tease tease_roll tease_roll_five hidden">
			<a href="https://www.youtube.com/watch?v=XHFy3YWpRx8"></a>
		</div>
		<div class="tease tease_roll tease_roll_six hidden">
			<a href="https://www.youtube.com/watch?v=xEkIou3WFnM"></a>
		</div>
		<div class="tease tease_roll tease_roll_seven hidden">
			<a href="https://www.youtube.com/watch?v=dmInI1o9OPE"></a>
		</div>
		<div class="tease tease_roll tease_roll_eight hidden">
			<a href="https://www.youtube.com/watch?v=q-9kPks0IfE"></a>
		</div>
		<div class="congrats hidden next">
			<p>
				Congratulations dave!!! You've solved the code and reached your special birthday message.
				<span class="birthday">Happy Birthday Dave my old friend.</span>
				I hope you have a wonderful time in New York and a fantastic year throughout and that things only get better from there.
			</p>
		</div>
		<div class="quote hidden">
			<p>
				<span class="quotation">It takes a long time to become young.</span>
				<span class="author">Pablo Picasso</span>
				<span class="quotation">And you have two days on me.</span>
				<span class="author">Jack O'Leary McNeice</span>
			</p>
		</div>
		<div class="spinning_dave hidden">
			<img src="dave.gif" alt="spinning dave">
		</div>
		
	</div>
</body>
</html>