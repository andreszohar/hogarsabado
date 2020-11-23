<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
</head>
<body>

<header>

        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
        <a class="navbar-brand" href="#">Nuevo Porvenir</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo(base_url("public/animales"))?>">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo(base_url("public/animales/listado"))?>">Animales Registrados</a>
                </li>
            </ul>
        </div>
        </nav>

</header>
<br>
<br>


<main>

<h1>BIENVENIDOS A NUEVO PORVENIR</h1>


<div class="container">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo(base_url("public/img/logo1.jpg")) ?>" class="d-block w-100 imageness" alt="banner1">
                </div>
                <div class="carousel-item">
                <img src="<?php echo(base_url("public/img/logo2.jpg")) ?>" class="d-block w-100 imageness" alt="banner2">
                </div>
                <div class="carousel-item">
                <img src="<?php echo(base_url("public/img/logo3.jpg")) ?>" class="d-block w-100 imageness" alt="banner3">
                </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br>
<br>

<P>"Cuidemos y Valoremos Nuestra Fauna Silvestre"

¡Es necesario proteger la fauna nativa!. Nuestra fauna cumple una función irreemplazable al mantener los ecosistemas en equilibrio: -

Si desapareciera la fauna, lo haría también toda la flora, cuya polinización y diseminación de frutos es efectuada por los animales. - Si desaparecieran los animales desintegradores, se produciría una gran acumulación de materia orgánica que incluiría una enorme cantidad de minerales que no podrían ser utilizados como nutrientes de las plantas. - Se modificarían las condiciones del suelo por falta de especies cavadoras. - Faltarían los animales que consumen las plantas acuáticas, con lo cual se alterarían los cursos de agua. - Cambiarían la productividad estaría reducida por el lentísimo proceso de transformación de la materia orgánica.</P>



</main>

<br>
<br>




<footer id="piepag"  class="text-center text-white bg-dark font-white" >
            <div id="RedesSociales">
                
                <div>
                    <ul>
                        <li>
                            <a href="www.facebook.com">
                            <img class="iconoReddSoc" src="<?php echo(base_url("public/Icons/facebook.png")) ?>" title="Facebook" >
                            </a>
                        </li>
                        <li>
                             <a href="www.twitter.com">
                            <img class="iconoReddSoc" src="<?php echo(base_url("public/Icons/gorjeo.png")) ?>" title="Twitter">
                             </a>
                        </li>
                        <li>
                             <a href="www.instagram.com">
                            <img class="iconoReddSoc" src="<?php echo(base_url("public/Icons/icons8-instagram-23.png")) ?>" title="Instagram" >
                             </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        
            <div>   
                &copy; Create By, Andres Felipe Castelblanco Benitez - 2020
            </div>
        </footer>
                



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>    
</body>
</html>