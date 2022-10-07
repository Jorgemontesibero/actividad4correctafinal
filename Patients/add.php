
<?php
include('../config/config.php');
include('Patient.php');

if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $data= new Patient(); /* LLAMO A MI LIBRO DE RECETAS */
  
  
    $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
    if($save){
      $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div>' ;
    }else{
      $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
    }
  }
  ?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Crear paciente </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php include('../menu.php') ?>
    <div class="container">
        <?php
            if (isset($mensaje)){
                echo $mensaje;
            }
        ?>
        <h2 class="text-center mb-5" > creacion de clientes </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="name" name="firstName" id="firstName" placeholder="Nombre (s)" require class="form-control" />
                </div>
                <div class="col">
                    <input type="text" name="lastName" id="lastName" placeholder="Apellido (s)" require class="form-control" />
                </div>
             </div>

             <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email" require class="form-control" />
                </div>
                <div class="col">
                    <input type="number" name="Telefono" id="Telefono" placeholder="Numero celular" require class="form-control" />
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <textarea name="Tipodepedido" id="Tipodepedido" placeholder="Torta, cupcake, galletas, etc.." require class="form-control"></textarea>
                    <b> Debes separar los pedidos con una coma </b>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <input type="date" name="Fechadeentrega" id="Fecha de tu pedido" require class="form-control" />
                </div>
                <div class="col">
                    <input type="text" name="Observaciones" id="Observaciones" placeholder="Detalles adicionales a tu pedido" require class="form-control" />
                </div>
            </div>

           
            
            <button class="btn btn-success"> Registrar </button>
        </form>
    </div>
</body>

</html>