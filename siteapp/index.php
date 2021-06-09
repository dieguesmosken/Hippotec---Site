<!DOCTYPE html>
<html lang="en">
<title>APP HIPPOTEC</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-ambulance,.fa-laptop {font-size:150px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-#00BFFF" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="comofunciona.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">COMO FUNCIONA</a>
    <a href="cadastro/index_cdst.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">CADASTRE - SE</a>
    <a href="../../hpt_V2.0/View/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"> BAIXAR APLICATIVO</a>
    <a href="https://coronavirus.saude.gov.br/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">COVID-19</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-blue w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">BEM VINDO!</h1>
  <p class="w3-xlarge">O FUTURO DA SAÚDE </p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" onclick="href='../../hpt_V2.0/View/'">BAIXE O APP</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>O APLICATIVO HIPPOTEC</h1>
      <h3 class="w3-padding-32"> Hippotec é um aplicativo de pré-diagnostico, 
	  onde o usuário vai colocar os seus sintomas que vai gerar uma pesquisa e irá mostrar pro usuário quais possíveis doenças e sua gravidade. Esse nosso projeto irá ajudar a dar diagnósticos mais rápidos, 
	  assim ajudando os médicos nas consultas e diminuindo as filas nos hospitais.</h3>

  
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-ambulance  w3-padding-64 w3-text-blue" ></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-laptop w3-padding-64 w3-text-blue w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>QUAL O INTUITO DO APLICATIVO ?</h1>
      <h3 class="w3-padding-32">Percebendo as dificuldades enfrentadas entre os médicos e pacientes
	  em diagnosticar doenças, desenvolvemos um aplicativo de pré-diagnostico, onde o usuário  insere os seus sintomas e 
	     uma pesquisa   mostra para o usuário quais possíveis doenças e sua gravidade</h3>

      <p class="w3-text-grey"> HIPPOTEC PROCURA APROXIMAR A INFORMAÇÃO PARA O CIDADÃO E O DISTANCIAR DOS RISCOS. </p>
    </div>
  </div>
</div>

<div class="w3-container w3-blue w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">HIPPOTEC: + SAÚDE PARA VOCÊ</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="#" target="_blank">@AntonyTheTenshi</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>