<html>
<head>
<title>pokedex</title>
<!--<link rel="stylesheet" type="text/css" href="/css/w3.css">!-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<!--<footer id='footer'>
<div class='w3-container w3-dark'>
<h1>pokedex</h1>
</div>
!-->

<div class="w3-container w3-red w3-center w3-padding-16">
  <h1>POKEDEX</h1>
  <!--<div class="w3-card">
  <p>w3-card</p>
 --
  
</div>
!-->
    
</div>
<div class='w3-content w3-row-padding'>

<div class='w3-quarter'>
<div class='w3-card-4 w3-padding-16'>
	 <img src="/img/pikachu.jpg" style="width:80%">
	 <div class="w3-text-white w3-panel w3-yellow">
	 <h4>Pikachu</h4>
	 <p>Ataque: impactrueno</p>
	 </div>
	 <img src="/img/trueno.gif">
	 </div>

</div>

   <!--  <div class='w3-card-4 w3-padding-16'>
	 <img src="/img/pikachu.jpg" style="width:30%">
	 <div class="w3-text-orange">
	 <h4>Pikachu</h4>
	 <p>Ataque: impactrueno</p>
	 </div>
	 <img src="/img/trueno.gif">
	 </div>
!-->
<div class='w3-quarter'>
<div class='w3-card-4 w3-padding-16'>
	 <img src="/img/charmander.jpg" style="width:65%">
	 <div class="w3-text-white w3-panel w3-red">
	 <h4>Charmander</h4>
	 <p>Ataque:Llamarada</p>
	 </div>
	 <img src="/img/fuego.gif">
	 </div>

</div>

<div class='w3-quarter'>
<div class='w3-card-4 w3-padding-16'>
	 <img src="/img/oruga.jpg" style="width:70%">
	 <div class="w3-text-white w3-panel w3-green">
	 <h4>Caterpie</h4>
	 <p>Ataque:Picadura</p>
	 </div>
	 <img src="/img/bicho.gif">
	 </div>

</div>



<div class='w3-quarter'>
<div class='w3-card-4 w3-padding-16'>
	 <img src="/img/bolbasor.jpg" style="width:83%">
	 <div class="w3-text-white w3-panel w3-blue">
	 <h4>Bulbasaur</h4>
	 <p>Ataque: Rayo solar</p>
	 </div>
	 <img src="/img/planta.gif">
	 </div>

</div>





  </div>
 
<?php 

$whoisthatpokemon=$_GET['whoisthatpokemon'];
if ($whoisthatpokemon =='pikachu'){
print("el pokemon es :".$whoisthatpokemon);

}else if($whoisthatpokemon =='charmander'){
print("el pokemon es :".$whoisthatpokemon);

}else if($whoisthatpokemon =='bulbasaur'){
print("el pokemon es :".$whoisthatpokemon);

 }else if($whoisthatpokemon =='caterpie'){
print("el pokemon es :".$whoisthatpokemon);

 }else if($whoisthatpokemon == ''){
print("No ingreso ningun pokemon");
}else{
(print"<br>El pokemon solicitado no existe en la pokedex actual");}
return $whoisthatpokemon;


?>


<!--<header class="w3-container w3-yellow">
  <h1>PIKACHU</h1>
</header>

<div class="w3-container">
  <p>Lorem ipsum...</p>
</div>

<footer class="w3-container w3-yellow">
  <h5>Footer</h5>
</footer>
!-->

</body>
</html>