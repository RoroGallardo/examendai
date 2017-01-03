<?php
        session_start();
        $user = $_SESSION['nombre'];
	unset ($_SESSION['username']);
	session_destroy();
	  echo "<script type=\"text/javascript\""
    . ">alert(\"Hasta Luego ".$user.", ten un buen dia. \");</script>"; 
    echo'<script>window.location="index.php";</script>';   
	 