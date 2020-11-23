<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animales</title>
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
                    <a class="nav-link" href="<?php echo(base_url("public/"))?>">Inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo(base_url("public/animales"))?>">Registrar</a>
                </li>
            </ul>
        </div>
        </nav>

</header>
<main>
<div>
    <br>

<h1>Animales Registrados</h1>

<br><br><br>


<div class="container"> 
<!--   

<?php 
print_r($usuarios); 
?> 

-->


<?php if(session('mensaje')):?>

           

<div class="alert alert-warning alert-dismissible fade show" role="alert">

    <?php echo(session('mensaje'))?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true">&times;</span>

    </button>

</div>



<?php endif ?>

<div class="row row-cols-1 row-cols-md-3"> 
<?php foreach($usuarios as $usuario):?> 

    <div class="col mb-4">
        <div class="card h-100">
            <img src="<?= $usuario["foto"]?>" class="card-img-top" alt="IMAGEN">
            <div class="card-body">
                <p class="card-title"><?= "Nombre=".$usuario ["nombre"]?></p>
                <p class="card-text"><?= "Descripción=".$usuario ["descripcion"]?></p>
                
                <p class="card-text"><?= "Comida=".$usuario ["cedula"]?></p>
                <p class="card-text">
                <?php  echo("Población=");
               if ($usuario ["poblacion"]==0){
                    echo("Animal Domestico");
               }else if ($usuario ["poblacion"]==1){
                echo("Animal de Fauna Silvestre");
               }
               ?>
               </p>
               <a href="<?php echo(base_url("public/animales/eliminar/".$usuario["id"]))?>" class="btn btn-danger">Eliminar</a>
               <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["id"])?>">
                   Editar
               </button>
           </div>



       </div>

       <div class="modal fade" id="editar<?php echo($usuario["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Edición de usuario</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form action="<?php echo(base_url("public/animales/editar/".$usuario["id"])) ?>" method="POST">
                           <div class="form-group">
                               <label>Nombre:</label>
                               <input type="text" class="form-control" name="nombreEditar" value="<?= $usuario["nombre"]?>">
                           </div>
                           <div class="form-group">
                               <label>Descripcion:</label>
                                   <textarea class="form-control" rows="3" name="descripcionEditar"><?= $usuario["descripcion"]?></textarea>
                           </div>
                           <div class="form-group">
                               <label>Nombre:</label>
                               <input type="text" class="form-control" name="cedula" value="<?= $usuario["cedula"]?>">
                           </div>
                           <div class="form-group">
                        <select class="form-control"  name="poblacion">
                            <option value="0">DOMESTICO</option>
                            <option value="1">FAUNA SILVESTRE</option>
                        </select>
                    </div>
                           
                           <button type="submit" class="btn btn-warning">Enviar</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>




   </div>

<?php endforeach?>
</div>

</div>
</div>

</main>


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