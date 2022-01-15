<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta   name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daily Crypto Price Tracker</title>
</head>
<header><h1>Daily Crypto Market Price Tracker:</h1> </header>
<div>
<ol>
<li><h2>Bitcoin:</h2></li>
{{"$".number_format(Cryptocap::getSingleAsset('bitcoin')->data->priceUsd,2)}}
<li><h2>Ethereum:</h2></li>
<li><h2>Cordana:</h2></li>
<li><h2>Theta:</h2></li>
</ol>
</div>
</html>
