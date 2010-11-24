<?php
require_once "../include/conf.php";
require_once "../include/php_serial.class.php";
require_once "../translations/translations.php";
require_once "../include/functions.php";
if (STORE_SESSION)
{
	session_start();
	$sessionId=session_id();
}
else
{
	$sessionId="NO_SESSION";
}

if (!((isset($_POST['longueur_MdP']))))
	$longueur_MdP_ = 8;
else
{
	$longueur_MdP_ = securiser_input($_POST['longueur_MdP']);
	if ($longueur_MdP_>LONG_MAX)
	{
		$longueur_MdP_=LONG_MAX;
	}
	elseif ($longueur_MdP_<LONG_MIN)
	{
		$longueur_MdP_=LONG_MIN;
	}
}

if (!((isset($_POST['set_chars_minuscules']))))
	$set_chars_minuscules_ = 0;
else
	$set_chars_minuscules_ = 1;

if (!((isset($_POST['set_chars_majuscules']))))
	$set_chars_majuscules_ = 0;
else
	$set_chars_majuscules_ = 1;

if (!((isset($_POST['set_chars_chiffres']))))
	$set_chars_chiffres_ = 0;
else
{
	$set_chars_chiffres_ = 1;
}
if (!((isset($_POST['set_chars_speciaux']))))
	$set_chars_speciaux_ = 0;
else
	$set_chars_speciaux_ = 1;

$nbr_caracteres_utilises = 0;
$nbr_familles_caracteres_utilisees = 0;

if ($set_chars_minuscules_)
{
	$nbr_caracteres_utilises += 26;
	$nbr_familles_caracteres_utilisees++;
}

if ($set_chars_majuscules_)
{
	$nbr_caracteres_utilises += 26;
	$nbr_familles_caracteres_utilisees++;
}

if ($set_chars_chiffres_)
{
	$nbr_caracteres_utilises += 10;
	$nbr_familles_caracteres_utilisees++;
}

if ($set_chars_speciaux_)
{
	$nbr_caracteres_utilises += 30;
	$nbr_familles_caracteres_utilisees++;
}

if ($nbr_familles_caracteres_utilisees > 0):

	if (USE_DB)
	{
		$timestamp=date('U');

		$db=new SQLite3("../data/db.sqlite");

		$stmt = $db->prepare('INSERT INTO stats VALUES(:session_id,:timestamp,:length,:lcase,:ucase,:numbers,:special);');

		$stmt->bindValue(':lcase', $set_chars_minuscules_, SQLITE3_INTEGER);
		$stmt->bindValue(':ucase', $set_chars_majuscules_, SQLITE3_INTEGER);
		$stmt->bindValue(':numbers', $set_chars_chiffres_, SQLITE3_INTEGER);
		$stmt->bindValue(':special', $set_chars_speciaux_, SQLITE3_INTEGER);
		$stmt->bindValue(':length', $longueur_MdP_, SQLITE3_INTEGER);
		$stmt->bindValue(':session_id', $sessionId, SQLITE3_TEXT);
		$stmt->bindValue(':timestamp', $timestamp, SQLITE3_TEXT);

		$result = $stmt->execute();

		$db->close();
	}

	//calcul des combinaisons possibles
	$nbr_combinaisons_possibles_du_MdP=0;
	for($t=1;$t<$longueur_MdP_;$t++)
	{
		$nbr_combinaisons_possibles_du_MdP += bcpow($nbr_caracteres_utilises,$t);
	}
	$nbr_combinaisons_possibles_du_MdP += bcpow($nbr_caracteres_utilises,$longueur_MdP_)*$facteur_chance;

	$nbr_jours_standard = (($nbr_combinaisons_possibles_du_MdP*$flopsParMD5)/$puissance_standard)/(3600*24);
	$nbr_jours_distribuee = (($nbr_combinaisons_possibles_du_MdP*$flopsParMD5)/$puissance_distribuee)/(3600*24);
	$nbr_jours_top500_number_one = (($nbr_combinaisons_possibles_du_MdP*$flopsParMD5)/$puissance_top500_number_one)/(3600*24);
	$nbr_jours_totalcomputing = (($nbr_combinaisons_possibles_du_MdP*$flopsParMD5)/$puissance_totalecomputing)/(3600*24);

	//calcul d'un force arbitraire du mot de passe
	if(SERIAL)
	{
		$scale=array(array(1,0),array(10,1),array(30,2),array(60,3),array(90,4),array(300,5),array(600,6),array(1200,7),array(4000,8));
		$scaledStrength=false;
		foreach($scale as $level)
		{
			if ($nbr_jours_standard<$level[0])
			{
				$scaledStrength=$level[1];
				break;
			}
		}
		if ($scaledStrength===false)
		{
			$scaledStrength=9;
		}

		#$strength=log($nbr_combinaisons_possibles_du_MdP,2)+5;
		#$facteur=($strength*2)/1;
		#//$facteur=($strength-0)/1;
		#$strength*=1/(1+exp(-$facteur));
		#if ($strength<0) $strength=0;
		#if ($strength>100) $strength=100;
		#$scale=SCALE_MAX-SCALE_MIN;
		#$scaledStrength=($strength/100)*$scale;
		#$scaledStrength+=SCALE_MIN;
		#$scaledStrength=round($scaledStrength);

		$setting=ini_get('display_errors');
		if (!SERIAL_DEBUG)
		{
			ini_set('display_errors',false);
		}
		else
		{
			ini_set('display_errors',true);
		}
		#$serial=new phpSerial();
		#$serial->deviceSet(SERIAL_DEVICE);
		#$serial->deviceOpen();
		#sleep(SERIAL_DELAY);
		#$serial->sendMessage($scaledStrength,2);
		#$serial->deviceClose();
		$handle=fopen('../data/output.txt','w');
		//$handle2=fopen('../data/serial.txt','a');
		fwrite($handle,"$scaledStrength\n");
		//fwrite($handle2,"$scaledStrength\n");
		fclose($handle);
		//fclose($handle2);
		ini_set('display_errors',$setting);
	}
?>
<h1><?=$trans["Evaluation de la résistance du mot de passe à différentes attaques brute-force"]?></h1>

<table>
	<thead>
	<tr>
		<th scope="col"><?=$trans["Résistance à une"]?>&hellip;
		<th scope="col"><?=$trans["Temps requis"]?>
	<tbody>
	<tr>
		<th scope="row"><a href="#standard-attack" class="legend-callout">&hellip; <?=$trans["attaque standard"]?></a>
			<div class="legend" id="standard-attack">
				<p><?=$trans["Attaque de type brute-force exécutée sur un PC familial récent utilisant des outils de cassage de mot de passe disponibles gratuitement sur internet."]?></p>
				<p><?=$trans["Puissance estimée :"]?> <?=separer_les_milliers($puissance_standard/$flopsParMD5)?> <?=$trans["combinaisons testées par seconde."]?></p>
			</div>
		<td><?php $affichage=affiche_temps($nbr_jours_standard); ?>
			<?=$affichage[0].$trans[$affichage[1]].$affichage[2].$trans[$affichage[3]]?>
	<tr>
		<th scope="row"><a href="#distributed-attack" class="legend-callout">&hellip; <?=$trans["attaque distribuée"]?></a>
			<div class="legend" id="distributed-attack">
				<p><?=$trans["Mise en parallèle d'un réseau de"]?> <?=$nombre_machines_dans_botnet?> <?=$trans["ordinateurs zombies au sein d'un même botnet (estimation) pour se répartir la tâche de casser un mot de passe."]?></p>
				<p><?=$trans["Puissance estimée :"]?> <?=separer_les_milliers($puissance_distribuee/$flopsParMD5);?> <?=$trans["combinaisons testées par seconde."]?></p>
			</div>
		<td><?php $affichage=affiche_temps($nbr_jours_distribuee); ?>
			<?=$affichage[0].$trans[$affichage[1]].$affichage[2].$trans[$affichage[3]]?>
	<tr>
		<th scope="row">&hellip; <?=$trans["attaque avec l'ordinateur le plus puissant de la planète"]?>
		<td><?php $affichage=affiche_temps($nbr_jours_top500_number_one); ?>
			<?=$affichage[0].$trans[$affichage[1]].$affichage[2].$trans[$affichage[3]]?>
<?php /*
	<tr>
		<th scope=row>&hellip; <?=$trans["attaque utilisant les 500 plus puissants ordinateurs de la planète"]?>
		<td><?php $affichage=affiche_temps($nbr_jours_totalcomputing); ?>
			<?=$affichage[0].$trans[$affichage[1]].$affichage[2].$trans[$affichage[3]]?>
*/ ?>
</table>

<?php endif; /* $nbr_familles_caracteres_utilisees > 0 */ ?>