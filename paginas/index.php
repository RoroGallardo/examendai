<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      
       <title>BIENVENIDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/validarut.js" type="text/javascript" ></script>
        <script src="js/validalogin.js" type="text/javascript" ></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/Secundario.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body id="fondo-inse">
        <?php
        
        
    
    include_once './inc/nav.php';
    
    ?>
        <br><br><br>
                <div class="container" >
    <div class="row">
        <br><br>
        <div class="col-md-6 zoomInLeft animated" >
            <div class="well well-sm" style="background-color: rgba(255, 0, 0, 0.7);  ">
                <div class="text-center header" style="background-color:  rgba(255, 0, 0, 0.5); " ><h3>SOLICITE SU CREDITO</h3></div>
                  <br>   
                  <a href="formularioPreAprovacion.php">
                 <input class="btn btn-block" type="submit" value="SOLICITAR AHORA" name="btnCredito" />
                  </a>
                  <br><br><br>
            </div>
        </div>
        <div class="col-md-6 zoomInRight  animated">
            <div>
                <div class="panel panel-default" style="background-color: rgba(255, 0, 0, 0.7);  ">
                    <div class="text-center header" style="background-color: rgba(255, 0, 0, 0.7); " ><h3>BUSQUE EL ESTADO DE SU SOLICITUD:</h3></div>
                    <div class="panel-body text-center">
                        <form name="frm" action="mostrarEstado.php" method="GET">
                            <div class="form-group">
                            <div class="col-md-10 col-md-offset-1" >
                                <input id="" name="rut" type="text" placeholder="INGRESE SU RUT" onchange="validarut(document.frm.rut.value);" style="text-align: center" class="form-control" >
                                <br>
                                <input class="btn btn-block " onclick="" type="submit" value="BUSCAR"  name="btnBuscar" />
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php include_once './inc/footer.php'; ?>
    </body>
</html>
