<!doctype html>
<html lang="<?=$currentLang?>">
<head>
<meta charset="utf-8">
<title><?=$trans["Tester la résistance d'un mot de passe"]?></title>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script>
var motDePasseMin=<?=LONG_MIN?>;
var motDePasseMax=<?=LONG_MAX?>;
var motDePasseDefaut=<?=LONG_DEFAUT?>;
var errorMsg='<?=$trans["Vous devez choisir au moins un jeu de caractères!"]?>';
</script>
<link media="screen" rel="stylesheet" href="css/style.css">
<link media="screen" rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.1.css">
</head>
<body>
<header role="banner">
	<hgroup>
		<h1><img src="images/bee.png" alt="BeeSecure" width="343" height="78"></h1>
		<h2><img src="images/tester-<?=$currentLang?>.png" alt="<?=$trans["Tester la résistance d'un mot de passe"]?>" height="42"></h2>
	</hgroup>
</header>
