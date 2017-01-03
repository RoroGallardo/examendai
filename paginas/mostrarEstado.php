
<!DOCTYPE html>

<html>
    <head>
        <title>MODIFICAR SOLICITUD  </title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body style="background-image:  url(images/fondorespuesta.jpg)">
        <br><br>
        <?php
        include_once '../controlador/SolicitudDao.php';
        $estado = SolicitudDao::buscarEstado($_GET["rut"]);
        ?>
          <div class="col-md-4"></div> 
        <div class="col-md-12">
              <div class="col-md-4"></div> 
    <div class="container slideInLeft animated " style="text-align: center; background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="row">
        <div class="">
     
             <div class="form-group col-md-4" style="text-align: center">
                  
                    <div class="input-group">
                        <label style="text-align: center" class="">Estado Solicitud : </label>  
                  <?php  echo '    <h1 class="">'.$estado.'</h1>';
                  if($estado=="aprobado"){
                      
                       echo '    <h3 class="Un ejecutivo se comunicara con usted dentro de 7 dias habiles"></h3>';
                  } ?>
                    </div>
                 
             </div>
    
          
        </div>
    </div>  <input type="submit" class="btn btn-warning center-block    " onclick="history.go(-1);" value="VOLVER" />
            
        
    </div>
     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
        
    </body>
</html>
