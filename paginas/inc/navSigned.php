
<nav class="navbar navbar-default navbar-inverse fadeInDown animated" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navegacion De Pagina</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding: 7px; " href="indexAdmin.php" title="" >
          <img src="images/logo.png" border="0" style="vertical-align: middle; ">
     </a>
    </div>                                      

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav">
        <li class="active"><a href="indexAdmin.php">INICIO</a></li>
        <li><a href="listarSolicitudes.php">LISTA DE SOLICITUDES</a></li>
        <li><a href="buscarSolicitudes.php">BUSQUEDA DE SOLICITUDES</a></li>
      </ul>
        <li><p class="navbar-text">NAVEGANDO COMO: <b>    <?php  echo $_SESSION["nombre"]; ?> </b> </p></li>
        
        <li><a href="logOut.php">CERRAR SESION</a></li>
         <ul class="nav navbar-nav navbar-right">
        
         
         </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>