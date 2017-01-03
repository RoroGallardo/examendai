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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="css/Secundario.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    </head>
    <body style="background-image: url(images/administracionfondo.png); background-size: cover">
        <?php
        include_once '../controlador/PostulanteDao.php';
        include_once './inc/comlog.php';
        include_once './inc/navSigned.php';
        $dto = PostulanteDao::buscarPorRut($_POST["txtRutMod"]);
        ?>
        
        
        <div class="container slideInLeft animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="row">
        <form action="modificarPostulante.php" method="POST" name="frm">
            <div class="">
                <br><br>
                
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">RUT</label>
                    <div class="input-group">
                    <?php  echo '<input type="text" readonly class="form-control" id="InputId" name="rut" value="'.$dto->getRut().'" required> ';?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">TELEFONO</label>
                    <div class="input-group">
                    <?php echo ' <input type="number" class="form-control" name="txtTele" id="inputTel" placeholder="TELEFONO" value="'.$dto->getTelefono().'" required> ';?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    </div>
                </div>
                </div>


                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">NOMBRE</label>
                    <div class="input-group">
                     <?php echo '<input type="text" class="form-control" name="txtNombre" id="InputName" values="'.$dto->getNombre().'" placeholder="Nombre" required>'; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">E@MAIL</label>
                    <div class="input-group">
                    <?php echo   '<input type="email" class="form-control" id="InputEmail" name="txtEmail" value="'.$dto->getEmail().'" placeholder="E@MAIL.COM" required>' ;?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                </div>
                
                
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                        
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">APELLIDO PATERNO</label>
                    <div class="input-group">
                   <?php echo  '   <input type="text" class="form-control" id="" name="txtApPaterno" value="'.$dto->getApellidoPaterno().'"  placeholder="APELLIDO PATERNO" required> '; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">DIRECCIÓN</label>
                    <div class="input-group">
                    <?php echo    ' <input type="text" class="form-control" value="'.$dto->getDireccion().'" name="txtDireccion" id="" placeholder="DIRECCIÓN" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    </div>
                </div>
                
                
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">APELLIDO MATERNO</label>
                    <div class="input-group">
                   <?php echo      '<input type="text" class="form-control" name="txtApMaterno" id="" placeholder="APELLIDO MATERNO" value="'.$dto->getApellidoMaterno().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">COMUNA</label>
                    <div class="input-group">
                        <select name="cmbComu" class="form-control" required>
                        <?php echo '<option>'.$dto->getComuna().'</option>' ;
//                                foreach ($comunas as $value) {
//                                    echo " <option>".$value."</option>";
//                                }
                        ?>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">FECHA NACIMIENTO</label>
                    <div class="input-group">
                   <?php echo  '    <input type="date" class="form-control" name="calFecha" id="" placeholder="Fecha Nacimiento" value="'.$dto->getFechaNacimiesnto().'" required>' ; ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">NIVEL EDUCATIVO</label>
                    <div class="input-group">
                       <select name="cmbEducacion" class="form-control" required>
                      <?php echo  '<option>'.$dto->getEducacion().'</option>'; ?>
                           <option>PROFESIONAL</option>
                           <option>TÉCNICO SUPERIOR</option>
                           <option>SECUNDARIA COMPLETA</option>
                           <option>PRIMARIA COMPLETA</option>
                           <option>NO POSEE</option>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4" >
                         <label for="InputMessage"  style="text-align: center">SEXO</label>
                    <div class="input-group"  style="background-color: white">
                        <label class="radio-inline">SEXO</label>
                        <label class="radio-inline"><input  type="radio" name="optradio" value="Femenino" selected>Femenino</label>
                        <label class="radio-inline"><input type="radio" name="optradio" value="Masculino" >Masculino</label>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">RENTA</label>
                    <div class="input-group">
                       <select name="cmbRenta" class="form-control" required>
                      <?php echo '<option>'.$dto->getRenta().'</option>' ; ?>
                           <option>FIJA</option>
                           <option>VARIABLE</option>
                           <option>BOLETA DE HONORARIOS</option>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                
                        
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">ESTADO CIVIL</label>
                    <div class="input-group">
                       <select name="cmbEstado" class="form-control" required>
                     <?php echo '      <option>'.$dto->getEstadoCivil().'</option>' ; ?>
                           <option>SOLTERO</option>
                           <option>CASADO</option>
                           <option>VIUDO</option>
                           <option>DIVORCIADO</option>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                        <div class="form-group col-md-4" >
                                 <label for="InputMessage"  style="text-align: center">SUELDO LIQUIDO</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="" name="txtSueldo" placeholder="SUELDO LIQUIDO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                         <label for="InputMessage"  style="text-align: center">HIJOS</label>
                    <div class="input-group "  style="background-color: white">
                        <label class="checkbox-inline ">HIJOS </label> 
                        <label class="checkbox-inline"><input type="checkbox" name="chkHijos" value="si">SI</label>
                <?php    echo '    <input type="number" class="col-md-pull-1 form-control-static" id="" name="'.$dto->getHijos().'" placeholder="Cantidad de Hijos" >';  ?>
                        <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    
                </div>
                
                <div class="form-group col-md-4">
                         <label for="InputMessage"  style="text-align: center">ENFERMEDAD CRONICA</label>
                    <div class="input-group "style="background-color: white">
                        <label class="checkbox-inline ">ALGUNA ENFERMEDAD CRÓNICA </label> 
                        <label class="checkbox-inline"><input type="checkbox" name="chkEnfermedad" value="si">SI</label>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                        
                
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-8">
                    <div class="input-group "style="background-color: rgba(255, 0, 0, 0.1);  ">
                        <label class="checkbox-inline " >ESTADO SOLICITUD </label>
                        <label class="radio-inline"><input  type="radio" name="rdSoli" value="pendiente" checked="">PENDIENTE</label>
                          <label class="radio-inline"><input  type="radio" name="rdSoli" value="aprovado" selected>APROVADO</label>
                           <label class="radio-inline"><input  type="radio" name="rdSoli" value="rechazado" selected>RECHAZADO</label>
                    </div>
                </div> 
                <div class="col-md-2"></div>
                 
                <input type="submit" name="submit" id="submit" value="MODIFICAR" onclick="pregunta()" class="btn btn-warning     center-block"> 
            </div>
        </form>
        
        </div>
    </div>
</div>  
        
        
     <script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>   
        <?php include_once './inc/footer.php'; ?>
    </body>
</html>
