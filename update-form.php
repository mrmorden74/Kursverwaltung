<form action="" class="pure-form pure-form-stacked" method="post">
	<!-- Niemals die Feld- oder Tabellennamen im HTML angeben, wir verwenden immer ein Alias -->
	<input type="hidden" name="id" value="<?php echo $employeeNumber; ?>">
	
	<label for="vorname">Vorname</label>
	<input type="text" name="vorname" id="vorname" value="<?php echo $line['firstName']; ?>">
	
	<label for="nachname">Nachnamexte</label>
	<input type="text" name="nachname" id="nachname" value="<?php echo $line['lastName']; ?>">
	
	<label for="ext">Erweiterung</label>
	<input type="text" name="ext" id="ext" value="<?php echo $line['extension']; ?>">
	
	<label for="mail">Vorname</label>
	<input type="text" name="mail" id="mail" value="<?php echo $line['email']; ?>">
	
	<label for="ocode">Office Code</label>
	<input type="text" name="ocode" id="ocode" value="<?php echo $line['officeCode']; ?>">
	
	<label for="boss">Vorgesetzter</label>
	<input type="text" name="boss" id="boss" value="<?php echo $line['reportsTo']; ?>">
	
	<label for="job">Bezeichnung</label>
	<input type="text" name="job" id="job" value="<?php echo $line['jobTitle']; ?>">

	<input type="submit" value="Aktualisieren" class="pure-button">
</form>