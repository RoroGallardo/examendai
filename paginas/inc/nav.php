
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
      <a class="navbar-brand" style="padding: 7px" href="index.php" title="">
          <img src="images/logo.png" border="0" class="im" style="vertical-align: middle;">
     </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">INICIO</a></li>
        <li><a href="formularioPreAprovacion.php">SOLICITAR CREDITO</a></li>
        <li><a href="quienesSomos.php">¿QUIENES SOMOS?</a></li>
      </ul>
        
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">ADMINISTRACION   </p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>ENTRAR</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								 <form class="form" role="form" method="POST" action="validarLog.php" name="loginform" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="">Ingrese Rut</label>
                                                                                         <input type="text" class="form-control" name="rutl"  onchange="validalogin(document.frm.rutl.value);" placeholder="XX.XXX.XXX-X" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                                                         <input type="password" name="pass" class="form-control" id="" placeholder="Password" required>
                                          
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">INICIAR SESION</button>
										</div>
										
								 </form>
							</div>
							<div class="bottom text-center">
                                                            CREAR NUEVA CUENTA PARA ADMINISTRACION <a href="    registrarUsuario.php"><b>CREAR</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>