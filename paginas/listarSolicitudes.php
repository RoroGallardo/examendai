<!DOCTYPE html>
<!--
Rodrigo Gallardo++
-->

<html>
    <head>
<meta charset="UTF-8">
        <title>Lista De Solicitudes</title>
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/font-awesome.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <?php
        include_once '../controlador/SolicitudDao.php';
        $solicitudes = SolicitudDao::listar();
        ?>
        
        
<form name="frm" action="addReserva.php" method="POST">
     <div class="container slideInLeft animated " style="background-color: rgba(146, 123, 204, 0.50); ">
        <form role="form">
            <div class="">
                <h1 class=" " style="text-align: center" >LISTADO DE SOLICITUDES</h1>
                <br>
                
                <div class="table-responsive" >
                    <table   class="table  table-bordered table-hover" style="background-color: rgba(146, 123, 204, 0.7);">
                        <thead>
                            <tr>
                                <th>RUT </th>
                                <th>NOMBRE</th>
                                <th>ESTADO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                             foreach ($solicitudes as $value) {
                                 echo '   <tr>';
                    
                    echo    "<td>".$value['rut']."</td>";
                    echo    "<td>".$value['nombre']."</td>";
                    echo    "<td>".$value['estado']."</td>";
                    
                    //aca vienen las opciones con formulario c/u
                    echo    '<td> 
                    <form action="VerSolicitud.php" method="POST">
                    <input type="submit" class="btn btn-success hidden pull-left" value="VER" name="btnVer" />
                    </form>  
                    <form action="VerSolicitud.php" method="POST">
                    <input type="text" hidden name="rut" value="'.$value["rut"].'" />
                    <input type="submit" class="btn btn-success pull-left" value="VER" name="btnVer" />
                    </form>  
                    
                    <form action="modificarSolicitud.php" method="POST">
                    <input type="text" hidden name="txtRutMod" value="'.$value["rut"].'" />
                    <input type="submit" value="MODIFICAR" class="btn btn-warning pull-left" name="btnVer" />
                    </form> 
                    
                    <form action="elimSolicitud.php" method="POST">
                    <input type="text" hidden name="txtRutElim" value="'.$value["rut"].'" />
                    <input type="submit" value="ELIMINAR" class="btn btn-danger pull-left" name="btnELIM" />
                    </form>   
                    


                </td>';
                    echo '  </tr>'; 
                             }
                            ?>
                        </tbody>
                    </table>   
                </div>
                
                
            </div>
        </form>
</form> 
</div>
<br>
 <br>
<br>
<script src="bootstrap/js/jquery.js" ></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>