<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit'])) {
	require "config.php";
	require "common.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array(
			"Kleur" => $_POST['Kleur'],
			"Maat"  => $_POST['Maat'],
			"Hoeveel"     => $_POST['Hoeveel'],
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"webshop",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);
		
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>