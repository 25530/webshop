<!DOCTYPE html>
<html>
<head>
	<title>Mijn website</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <style>
    
    body
        {
    background-image: url("images/grey.png");
    height: 100vh;
    background-size: cover;
    background-position: center;
}
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

.column {
  flex: 33.33%;
  padding:105px;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #323232;
  color: white;
  text-align: center;
}

        </style>
</head>
<body>
    <header>
       <div id="container">
          	<img class="logo" src="images/logo.png"/>
             <nav>
               <ul id="navbar">
       	         <li class="Home"><a href="index.php"> Home </a></li>
       	         <li><a class="mannen"><a href="mannen.php"> Mannen </a></li>
       	         <li><a class="vrouw"><a href="vrouw.php"> Vrouwen </a></li>
       	         <li><a class="merk"><a href="merk.php"> Merk-kleding </a></li>

               </ul>
             </nav>
       </div>


    </header>

    <div class="row">
  <div class="column">
    <img src="shirts/vr1t.png" alt="shirt" style="width:80%" >
    <a href="shirtsvr1.php"><img src="shirts/button.png" alt="button" style="width:80%"></a>
  </div>
  <div class="column">
    <img src="shirts/aet.png" alt="shirt2" style="width:80%">
    <a href="shirtsvr2.php"><img src="shirts/button.png" alt="button" style="width:80%"></a>
  </div>
  <div class="column">
    <img src="shirts/vrouws3t.png" alt="shirt2" style="width:80%">
    <a href="shirtsvr3.php"><img src="shirts/button.png" alt="button" style="width:80%"></a>
  </div>
</div>

<div class="footer">
    <br>
  <p>Contact information: <a href="sam.harwig@gmail.com">
  sam.harwig@gmail.com</a>.</p>
  <br>
</div>

    

</body>
</html>

