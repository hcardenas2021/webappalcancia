
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Mi alcancia</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="vistas/images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="vistas/css/bootstrap.css">
    <link rel="stylesheet" href="vistas/css/fonts.css">
    <link rel="stylesheet" href="vistas/css/style.css">
     <script src="vistas/js/jquery.min.js" type="text/javascript"></script>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>

	<?php 

	/*=============================================
	Módulos fijos superiores
	=============================================*/	

	include "paginas/modulos/cabecera.php";
  

	

	/*=============================================
	Navegar entre páginas
	=============================================*/	

	 

                #ISSET: isset() Determina si una variable está definida y no es NULL

                if(isset($_GET["pagina"])){

                    if($_GET["pagina"] == "inicio" ||
                       $_GET["pagina"] == "misahorros" ||
                       $_GET["pagina"] == "resumenahorros" ||
                       $_GET["pagina"] == "editar" ||
                       $_GET["pagina"] == "salir"){

                        include "paginas/".$_GET["pagina"].".php";

                    }else{

                        include "paginas/error404.php";
                    }


                }else{

                    include "paginas/inicio.php";

                }

                

            







    

	/*=============================================
	Módulos fijos inferiores
	=============================================*/	

	include "paginas/modulos/footer.php";


	?>

	<div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="vistas/js/core.min.js"></script>
    <script src="vistas/js/script.js"></script>

</body>
</html>