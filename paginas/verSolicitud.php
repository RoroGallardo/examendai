<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>VER SOLICITUD  </title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="css/Secundario.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body style="background-image: url(images/administracionfondo.png); background-size: cover   ">
        <?php
        include_once '../controlador/PostulanteDao.php';
        include_once '../controlador/SolicitudDao.php';
        include_once './inc/comlog.php';
        include_once './inc/navSigned.php';
        $dto = PostulanteDao::buscarPorRut($_POST["rut"]);
        ?>
        
        
        <div class="container slideInLeft animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="row">
 
            <div class="">
 <?php echo '<h1 class="bgn" style="text-align=center background-color: rgba(0, 0, 0, 0.5); font-color: #ffffff" >ESTADO DE SOLICITUD '.SolicitudDao::buscarEstado($_POST["rut"]).'</h1>'; ?>
                <br><br>
                
                <div class="col-md-12">
                        <div class="col-md-2" ></div>
                <div class="form-group col-md-4">
                         <label for="InputMessage" style="text-align: center">RUT</label>
                    <div class="input-group">
                    <?php  echo '<input type="text" readonly class="form-control" id="InputId" name="rut" value="'.$dto->getRut().'" required> ';?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">NOMBRE</label>
                    <div class="input-group">
                    <?php echo ' <input type="number" readonly class="form-control" name="txtTel" id="inputTel" placeholder="TELEFONO" value="'.$dto->getTelefono().'" required> ';?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    </div>
                </div>
                </div>


                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage" class="col-xs-12 " >NOMBRE</label>
                    <div class="input-group">
                     <?php echo '<input type="text" readonly class="form-control" name="txtNombre" id="InputName" values="'.$dto->getNombre().'" placeholder="Nombre" required>'; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                        <label for="InputMessage"  style="text-align: center">E@MAIL</label>
                    <div class="input-group">
                    <?php echo   '<input type="email" readonly class="form-control" id="InputEmail" name="txtEmail" value="'.$dto->getEmail().'" placeholder="E@MAIL.COM" required>' ;?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                </div>
                
                
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                        
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">APELLIDO PATERNO</label>
                    <div class="input-group">
                   <?php echo  '   <input type="text" readonly class="form-control" id="" name="txtApPaterno" value="'.$dto->getApellidoPaterno().'"  placeholder="APELLIDO PATERNO" required> '; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage" style="text-align: center">DIRECCIÓN</label>
                    <div class="input-group">
                    <?php echo    ' <input type="text" readonly class="form-control" value="'.$dto->getDireccion().'" name="txtDireccion" id="" placeholder="DIRECCIÓN" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    </div>
                </div>
                
                
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">APELLIDO MATERNO</label>
                    <div class="input-group">
                   <?php echo      '<input type="text" readonly class="form-control" name="txtApMaterno" id="" placeholder="APELLIDO MATERNO" value="'.$dto->getApellidoMaterno().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="InputMessage"  style="text-align: center">COMUNA</label>
                    <div class="input-group">
                         <?php echo      '<input type="text" readonly class="form-control" name="txtComuna" id="" placeholder="COMUNA" value="'.$dto->getComuna().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <label for="InputMessage"  style="text-align: center">FECHA NACIMIENTO</label>
                    <div class="input-group">
                   <?php echo  '    <input type="date" readonly class="form-control" name="calFecha" id="" placeholder="Fecha Nacimiento" value="'.$dto->getFechaNacimiesnto().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="InputMessage"  style="text-align: center">NIVEL DE EDUCACIÓN</label>
                    <div class="input-group">
                        <?php echo      '<input type="text" readonly class="form-control" name="txtEducacion" id="" placeholder="EDUCACION" value="'.$dto->getEducacion().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4" >
                    <label for="InputMessage"  style="text-align: center">SEXO</label>
                    <div class="input-group"  style="background-color: white">
                        <?php echo      '<input type="text" readonly class="form-control" name="txtSexo" id="" placeholder="SEXO" value="'.$dto->getSexo()  .'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="InputMessage"  style="text-align: center">RENTA</label>
                    <div class="input-group">
                        <?php echo      '<input type="text" readonly class="form-control" name="txtRenta" id="" placeholder="TIPO RENTA" value="'.$dto->getRenta().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                
                        
                <div class="form-group col-md-4">
                    <label for="InputMessage"  style="text-align: center">ESTADO CIVIL</label>
                    <div class="input-group">
                    <?php echo      '<input type="text" readonly class="form-control" name="txtEstadoCivil" id="" placeholder="ESTADO CIVIL" value="'.$dto->getEstadoCivil().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                        <div class="form-group col-md-4" >
                            <label for="InputMessage"  style="text-align: center">SUELDO LIQUIDO</label>
                    <div class="input-group">
                         <?php echo      '<input type="text" readonly class="form-control" name="txtSueldo" id="" placeholder="SUELDO LIQUIDO" value="'.$dto->getSueldoLiquido().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <label for="InputMessage"  style="text-align: center">HIJOS</label>
                    <div class="input-group "  style="background-color: white">
                         <?php if($dto->getHijos()==0){
                             echo      '<input type="text" readonly class="form-control" name="txtHijos" id="" placeholder="HIJOS" value="SIN HIJOS" required>' ; 
                         }else{
                             echo      '<input type="text" readonly class="form-control" name="txtHijos" id="" placeholder="HIJOS" value="'.$dto->getHijos().'" required>' ; 
                         }
                         ?>
                        <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    
                </div>
                
                <div class="form-group col-md-4">
                    <label for="InputMessage"  style="text-align: center">ENFERMEDAD CRÓNICA</label>
                    <div class="input-group "style="background-color: white">
                        
                  <?php 
                  
                  if($dto->getEnfermedadCronica()=="si"){
                      echo      '<input type="text" readonly class="form-control" name="txt"  value="SI" required>' ; 
                  }elseif ($dto->getEnfermedadCronica()=="no") {
                         echo      '<input type="text" readonly class="form-control" name="txt"  value="NO" required>' ; 
                  }
                  
                  
                  ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                </div>
                
                 
                <input type="button" name="submit" id=""  value="VOLVER" onclick="history.go(-1);" class="btn btn-warning     center-block">
            </div>
        
        </div>
    </div>
</div>  
        
        
     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>
