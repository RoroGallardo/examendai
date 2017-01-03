<!DOCTYPE html>

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

        include_once './inc/nav.php'; ?>
        <br><br>
       
<div class="container slideInLeft animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <br><br><br>
    <div class="">
        <form action="confirmarRegistro.php" method="POST" name="frm">
            <div class="">
        
                <div class="form-group col-md-4">
               
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="rut" onchange="validarut(document.frm.rut.value);" placeholder="RUT" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>
             
                </div>    
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="txtNombre"  placeholder="NOMBRE" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>

                </div>    
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="txtApPaterno"  placeholder="APELLIDO PATERNO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>
             
                </div>    
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="txtApMaterno" placeholder="APELLIDO MATERNO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>
             
                </div>    
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="password" class="form-control" id="" name="txtPass"  placeholder="CONTRASEÑA" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <br>
             
                </div>    
                    <div class="form-group col-md-4">
                        <div class="input-group">
                            <input type="password" class="form-control" id="" name="txtConfirm"  placeholder="CONFIRMAR CONTRASEÑA" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        </div>
                        <br>
                    </div>   
                
                <div >
                    <div class="col-md-2"></div> 
                                            <label for="InputMessage" class="col-xs-12 " style="text-align: center">CREDENCIALE DEL ADMINISTRADOR DE SISTEMA</label>

                              <div class="form-group col-md-4">
                        <label for="InputMessage" class="col-xs-12 " style="text-align: center">USUARIO</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="" name="txtAdmin"  placeholder="USER" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        </div>
                        <br>
                    </div>   
                              <div class="form-group col-md-4">
                        <label for="InputMessage" class="col-xs-12 " style="text-align: center">CONTRASEÑA</label>
                        <div class="input-group">
                            <input type="password   " class="form-control" id="" name="txtAdminPass"  placeholder="PASS" required>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        </div>
                        <br>
                    </div>  
                </div>          
                

          
            </div>
                           
    </div>
          <input type="submit" class="btn btn-success center-block" value="REGISTRAR" name="" />
   </form>
    <br>
</div>  
    
        <br><br>
        

     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>  
<?php include_once './inc/footer.php'; ?>
        
    </body>
</html>
