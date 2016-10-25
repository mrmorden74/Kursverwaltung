<?php
/** 
*	Verbindet sich zu mysql und gibt ein mysqli Objekt zurück
*	@param $user string 	Username
*	@param $pw string 		Username
*	@param $host string 	Username
*	@param $db string 		Username
*
*/
function connectDB(string $user, string $pw, string $host, string $db)  {
	// connect to db
	$mysqli = new mysqli($host, $user, $pw, $db);
	// Meldung bei Verbindungsfehler
	if ($mysqli->connect_errno) {
		// TODO: Function erstellen?
		error_log('EIGENE FEHLERMELDUNG'. $mysqli->connect_errno);
		echo '<h1>Fehler beim Verbinden zur Datenbank!</h1>';
		exit;
	}
	// damit die Daten auch in phpmyadmin korrekt eingetragen werden
	// mysqli verwendet nicht die Kollation der Datenbank, sondern italian
	// TODO Kollation der DB holen und verwenden
	// $mysqli->query( 'SET NAMES utf8' );
	// var_dump($mysqli->get_charset()); // vor dem Umsetzen
	$mysqli->set_charset("utf8");
	// var_dump($mysqli->get_charset()); // nach dem Umsetzen 
	return $mysqli;
}
?>
