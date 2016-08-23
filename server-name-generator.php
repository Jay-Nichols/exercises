<?php

$adjectiveArray = ['pale', 'sickly', 'verbose', 'orange', 'tiresome', 'annoying', 'amateur', 'exciting', 'spicy', 'taciturn'];
$nounArray = ['horse', 'Reebok', 'Florida', 'brick', 'stationery', 'Volkswagon', 'mattress', 'guitar', 'air-conditioner', 'kettle bell'];

function shuffleAdjective($adjective) {
	shuffle($adjective);
	return $adjective[0];
}

function shuffleNoun($noun) {
	shuffle($noun);
	return $adjective[0];
}

$randomAdjective = shuffleAdjective($adjectiveArray);
$randomNoun = shuffleNoun($nounArray);

$serverName = echo "$randomAdjective . $randomNoun";

?>

<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
	<h1><?php echo $serverName; ?></h1> 

</body>
</html>