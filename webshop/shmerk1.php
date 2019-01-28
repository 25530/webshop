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
<h2><h2>Nike Shirt</h2></h2>
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
   <option> Rood
   <option> Wit
   <option> Blauw
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
   <td>Bestel voor €65,00.</td>
   <td><input id="submit" type="submit" value="Bestel"></td>
   </tr>
   </table>
   </form>
<div id="content">
<br>
<button class="button" onclick="document.getElementById('myImage').src='shirts/nike1.png'">Zwart</button>
<button class="button" onclick="document.getElementById('myImage').src='shirts/nike2.png'">Rood</button>

<img id="myImage" src="shirts/niket.png" style="width:350px">

<button class="button" onclick="document.getElementById('myImage').src='shirts/nike3.png'">Wit</button>
<button class="button" onclick="document.getElementById('myImage').src='shirts/nike4.png'">Blauw</button>
</div>
</body>
</html>
