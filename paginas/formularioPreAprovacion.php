<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" type="text/css" href="css/animate.css">
         <link rel="stylesheet" type="text/css" href="css/Secundario.css">
         <script src="js/validarut.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

        
        <script type="text/javascript" > 
function pregunta(){ 
    if (confirm('AL CONFIRMAR ESTARAS ACEPTANDO LOS TERMINOS Y CONDICIONES, ¿CONTINUAR?')){ 
       document.frm.submit() ;
    } 
} 
</script> 


    </head>
    <body style="background-image: url(images/oficinaoficina.jpg)">
        <?php
   include './inc/nav.php';     
       include '../controlador/ComunasDao.php';
       $comunas = ComunasDao::cargarNombresComunas();
        

        ?>
<div class="container slideInLeft animated " style="background-color: rgba(255, 0, 0, 0.7);  ">
    <div class="row">
        <form action="agregarPostulante.php" method="POST" name="frm">
            <div class="">
                <br><br>
                
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputId" name="rut" onchange="validarut(document.frm.rut.value);" placeholder="RUT 99.999.999-9" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group">
                        <input type="number" class="form-control" name="txtTele" id="inputTel" placeholder="TELEFONO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    </div>
                </div>
                </div>


                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="txtNombre" id="InputName" placeholder="Nombre" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="txtEmail" placeholder="E@MAIL.COM" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                </div>
                
                
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                        
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="" name="txtApPaterno" placeholder="APELLIDO PATERNO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="txtDireccion" id="" placeholder="DIRECCIÓN" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    </div>
                </div>
                
                
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" name="txtApMaterno" id="" placeholder="APELLIDO MATERNO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <div class="input-group">
                        <select name="cmbComu" class="form-control" required>
                            <option>SELECCIONE COMUNA</option>
                            <?php
                                foreach ($comunas as $value) {
                                    echo " <option>".$value."</option>";
                                }
                        ?>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group">
                        <input type="date" class="form-control" name="calFecha" id="" placeholder="Fecha Nacimiento" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <div class="input-group">
                       <select name="cmbEducacion" class="form-control" required>
                           <option>SELECCIONE NIVEL DE EDUCACIÓN</option>
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
                    <div class="input-group"  style="background-color: white">
                        <label class="radio-inline">SEXO</label>
                        <label class="radio-inline"><input  type="radio" name="optradio" value="Femenino" selected>Femenino</label>
                        <label class="radio-inline"><input type="radio" name="optradio" value="Masculino" >Masculino</label>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group col-md-4">
                    <div class="input-group">
                       <select name="cmbRenta" class="form-control" required>
                           <option>SELECCIONE TIPO DE RENTA</option>
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
                    <div class="input-group">
                       <select name="cmbEstado" class="form-control" required>
                           <option>SELECCIONE ESTADO CIVIL</option>
                           <option>SOLTERO</option>
                           <option>CASADO</option>
                           <option>VIUDO</option>
                           <option>DIVORCIADO</option>
                        </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                </div>
                
                        <div class="form-group col-md-4" >
                    <div class="input-group">
                        <input type="number" class="form-control" id="" name="txtSueldo" placeholder="SUELDO LIQUIDO" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
                    </div>
                </div>
                </div>
                <div class="col-md-12">
                        <div class="col-md-2"></div>
                <div class="form-group col-xs-12 col-md-4">
                    <div class="input-group "  style="background-color: white">
                        <label class="checkbox-inline ">HIJOS </label> 
                        <label class="checkbox-inline"><input type="checkbox" name="chkHijos" value="si">SI</label>
                        <input type="number" class="col-md-pull-1 form-control-static" id="" name="txtHijos" placeholder="Cantidad de Hijos" >
                        <span class="input-group-addon "><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                    
                </div>
                
                <div class="form-group col-md-4">
                    <div class="input-group "style="background-color: white">
                        <label class="checkbox-inline ">ALGUNA ENFERMEDAD CRÓNICA </label> 
                        <label class="checkbox-inline"><input type="checkbox" name="chkEnfermedad" value="si">SI</label>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                </div>
                
                 
                <input type="submit" name="submit" id="submit" value="SOLICITAR CREDITO" onclick="" class="btn btn-success center-block">
            </div>
        </form>
        <br><br>
        </div>
    </div>
</div>  
        
        
        
<script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>    
<?php include_once './inc/footer.php'; ?>
    </body>
</html>
