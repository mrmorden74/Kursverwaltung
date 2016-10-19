<?php
declare(strict_types=1); // Muss die erste Anweisung in einer Datei sein
require_once 'inc/db-connect.inc.php';
require_once 'inc/utilities.inc.php';
// zur DB verbinden
$db = connectDB('root', '', 'localhost', 'kurse');

// neu in PHP 7: non coallescing operator: wenn $_GET != NULL ist und Wert hat, sonst ...

	// Validierung, vorläufig ist alles OK
	$sql = 'INSERT INTO kunden SET ' ;
	
	$sql .= ' kunden_kundennummer="' . $_POST['kdnr'] . '"' .
			', kunden_vorname="' . $_POST['kdvn'] . '"' .
			', kunden_nachname="' . $_POST['kdnn'] . '"' .
			', kunden_adresse="' . $_POST['kdadr'] . '"' .
			', kunden_plz="' . $_POST['kdplz'] . '"' .
			', kunden_ort="' . $_POST['kdort'] . '"' . 
			', kunden_tel="' . $_POST['kdtel'] . '"' . 
			', kunden_email="' . $_POST['kdmail'] . '";';
	// echo $sql;			
	$updRes = $db->query($sql);
	// echo $updRes."-erfolg?";
	// wurde etwas geändert, geben wir eine Meldung aus und setze hasUpdated auf true
	if ($db->affected_rows === 1) {
		$isAdded = true;

	} elseif ($db->error != '') {
		$errorMsg = $db->error;
	}
?>	
