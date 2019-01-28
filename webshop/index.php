<!DOCTYPE html>
<html>
<head>
	<title>Mijn website</title>
	<link href="style1.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <style>

        * {
  box-sizing: border-box;
}

        .half-page-image {
            margin-left: auto;
    margin-right: auto;
    no-repeat center center;

}
.row {
  margin-top: 65px;
  display: flex;
}

.column {
  flex: 33.33%;
  padding: 5px;
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
    
    <section>
    	<div class="welkom">
    	  <h1> Welkom bij Harwig Kleding!!<h1>
    	  <h2> Vind hier de kleding die bij u past!!<h2>
        <div class="row">
  <div class="column">
  <img class="half-page-image" src="shirts/22.png" style="width:50%">
  </div>
  <div class="column">
  <img class="half-page-image" src="shirts/polo1.png" style="width:50%">
  </div>
  <div class="column">
  <img class="half-page-image" src="shirts/vrouws1.png" style="width:50%">
  </div>
</div>
         	 	
    </section>

    <div class="footer">
    <br>
  <p>Contact information: <a href="sam.harwig@gmail.com">
  sam.harwig@gmail.com</a>.</p>
  <br>
</div>

</body>
</html>