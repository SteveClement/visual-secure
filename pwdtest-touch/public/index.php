<?php
	require_once "../include/conf.php";
	require_once "../translations/translations.php";
	require_once "../include/functions.php";
	//start display
	require_once "../header.php";
?>
<form action="eval.php" method="post" id="f">

	<input type="hidden" name="lang" id="lang" value="<?=$currentLang?>">

	<fieldset id="step1" class="this">
		<legend><label for="length"><?=$trans["Combien de caractères composent le mot de passe ?"]?></label></legend>

		<p><?=$trans["Le mot de passe est composé de"]?> 
			<output for="length" id="current-length"><?=LONG_DEFAUT?></output>
			<?=$trans["caractères."]?>
			<input id="length" name="longueur_MdP" type="range" min="<?=LONG_MIN?>" max="<?=LONG_MAX?>" value="<?=LONG_DEFAUT?>">
			<div id="slider-out"></div>
		</p>
	</fieldset>

	<fieldset id="step2">
		<legend><span><?=$trans["Quels sont les caractères utilisés dans le mot de passe ?"]?></span></legend>

		<ul>
			<li><label><input type="checkbox" id="chrmin" name="set_chars_minuscules" value="1"> <span><?=$trans["Minuscules - a..z"]?></span></label>
			<li><label><input type="checkbox" id="chrmaj" name="set_chars_majuscules" value="1"> <span><?=$trans["Majuscules - A..Z"]?></span></label>
			<li><label><input type="checkbox" id="chrchf" name="set_chars_chiffres" value="1"> <span><?=$trans["Chiffres - 0..9"]?></span></label>
			<li><label><input type="checkbox" id="chrspc" name="set_chars_speciaux" value="1"> <span><?=$trans["Caractères spéciaux et signes de ponctuation - [](){}@#*.;-_!?, etc."]?></span></label>
		</ul>

		<img src="images/loading.gif" id="loading">
	</fieldset>

	<section id="step3">
	</section>
</form>

<?php require_once "../footer.php";
