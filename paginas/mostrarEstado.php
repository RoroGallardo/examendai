
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
    <body>
        <?php
        include_once '../controlador/SolicitudDao.php';
        $estado = SolicitudDao::buscarEstado($_GET["rut"]);
        ?>
    <div class="container slideInLeft animated " style="background-color: rgba(146, 123, 204, 0.50); ">
    <div class="row">
        <div class="">
             <div class="form-group col-md-4" style="text-align: center">
                  
                    <div class="input-group">
                        <label class="">Estado Solicitud : </label>  
                  <?php  echo '    <h1 class="">'.$estado.'</h1>'; ?>
                    </div>
             </div>
    
            
            
        </div>
    </div>
        
        
     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
        
    </body>
</html>
