<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MODIFICAR SOLICITUD  </title>
         <meta charset="UTF-8">
         <link rel="stylesheet" type="text/css" href="css/animate.css">
          <link rel="stylesheet" type="text/css" href="css/Secundario.css">
          <script src="js/validarut.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body style="background-image: url(images/administracionfondo.png); background-size: cover">
        <?php        
        include_once './inc/comlog.php';
        include_once './inc/navSigned.php'; ?>
        <br><br>
       
<div class="container slideInLeft animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="">
        <form action="verSolicitud.php" method="POST" name="frm">
            <div class="">
                <div class="col-md-4" ></div>
                <div class="form-group col-md-4">
                    <label for="InputMessage" class="col-xs-12 " style="text-align: center">BUSCAR POR RUT</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="rut" onchange="validarut(document.frm.rut.value);" placeholder="RUT 99.999.999-9" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success center-block" value="BUSCAR" name="" />
                </form>
                </div>    
                  
            </div>
    </div>
    <br>
</div>  
    
        <br><br>
        
<div class="container slideInRight animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="">
        <form action="listarPorFechas.php" method="POST" name="fr">
            <div class="">
                <div class="col-md-12">
                    <label for="InputMessage" class="col-xs-12 " style="text-align: center">BUSQUEDA POR FECHAS</label>
                        <div class="col-md-2"></div>
                <div class="form-group col-md-4">
                    <label for="InputMessage" class="col-xs-12 " style="text-align: center">DESDE</label>
                    <div class="input-group">
                    <input type="date" class="form-control" id="InputId" name="calDesde" value="" required> 
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <label for="InputMessage" class="col-xs-12 " style="text-align: center">HASTA</label>
                    <div class="input-group">
                  <input type="date" class="form-control" name="calHasta" id="inputTel" placeholder="" value="01-01-2016" required> 
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                </div>   
                
            </div>
            
            <input type="submit" class="btn btn-success center-block" value="BUSCAR" name="txtBusFe" />
        </form><br>
    </div>
</div> 
        
     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>  
<?php include_once './inc/footer.php'; ?>
        
    </body>
</html>
