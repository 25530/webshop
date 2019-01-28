<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */


if (isset($_POST['submit'])) {
	require "../config.php";
	require "../common.php";

	try {
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array(
			"firstname" => $_POST['firstname'],
			"lastname"  => $_POST['lastname'],
			"email"     => $_POST['email'],
			"age"       => $_POST['age'],
			"location"  => $_POST['location']
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"users",
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
<!DOCTYPE html>
<html>
<head>
</head>
<style>
 *{margin:0px; padding: 0px;}

body
        {
    background-image: url("images/grey.png");
    height: 100vh;
    background-size: cover;
    background-position: center;
        }
 #terug {
 }       

#content {
  background: grey;
  border-style: solid;
  border-color: red;
  width: 643px ;
  margin-left: auto ;
  margin-right: auto ;
}
.button {
  display: inline-block;
  padding: 5px 5px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #404040;
  border: none;
  border-radius: 15px;
}

.button:hover {background-color: #B4B4B4}

.button:active {
  background-color: #181818;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
h2
{
	color: black;
	font-family: cursive;
	font-size: 30px;
    margin-left: 8px;
}
p
{
	color: black;
	font-family: cursive;
	font-size: 15px;
    margin-left: 8px;
}
#Kleur{
margin-left: 8px;

}
#Hoeveel{
margin-left: 8px;

}
#submit{
margin-left: 8px;

}
  </style>
<body>
<a href="vrouw.php"><img id="terug" src="shirts/terug.png" style="width:250px"></a>
<br>
<br>
<h2><h2>Tommy Hilfinger Shirt</h2></h2>
<br>

<p>Selecteer hier uw maat, Kleur en de hoeveelheid.</p>
<br>
<form id="Kne" action="insert.php" method="POST">
 <table>
   <tr>
    <td>Kleur:</td>
   <td>
   <select id="Kleur" name="Kleur">
   <option selected> Zwart
   <option> Blauw
   <option> Rood
   <option> Wit
   </select>
   </td>
   </tr>

   <tr>
    <td>Maat:</td>
   <td>
   <select id="Kleur" name="Maat">
   <option selected> XS
   <option> S
   <option> M
   <option> L
   <option> XL
   </select>
   </td>
   </tr>
   <tr>
  <td>Hoeveelheid:</td> 
  <td><input id="Hoeveel" name="Hoeveel" type="text"></td>
   </td>
   </tr>
   <tr>
   <td>Bestel voor €85,00.</td>
   <td><input id="submit" type="submit" value="Bestel"></td>
   </tr>
   </table>
   </form>
<div id="content">
<br>
<button class="button" onclick="document.getElementById('myImage').src='shirts/tommy1.png'">Zwart</button>
<button class="button" onclick="document.getElementById('myImage').src='shirts/tommy2.png'">Blauw</button>

<img id="myImage" src="shirts/tommyt.png" style="width:350px">

<button class="button" onclick="document.getElementById('myImage').src='shirts/tommy3.png'">Rood</button>
<button class="button" onclick="document.getElementById('myImage').src='shirts/tommy4.png'">Wit</button>
</div>

</body>
</html>
