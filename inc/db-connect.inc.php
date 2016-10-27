<?php
/** 
*	Holt sich die mySqli Zugangsdaten aus einem Array und liefert es an connectDb()
*	@param $connect Array mit 'user' 'pw' 'host' 'db'
*	@return Object mysqli
*/
function getDbConnect($connect) {
	return connectDB($connect['user'], $connect['pw'], $connect['host'], $connect['db']);
}

/** 
*	Verbindet sich zu mysql und gibt ein mysqli Objekt zurück
*	@param $user string 	Username
*	@param $pw string 		Password
*	@param $host string 	Host
*	@param $db string 		Database
*	@return Object mysqli
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
