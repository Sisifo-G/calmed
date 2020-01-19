<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>CM System - Control de ventas e inventario</title>
  
  <!-- General CSS Files -->
  <link rel="stylesheet" href="vistas/assets/css/app.min.css">
  <link rel="stylesheet" href="vistas/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="vistas/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="vistas/assets/css/style.css">
  <link rel="stylesheet" href="vistas/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="vistas/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='vistas/assets/img/favicon.ico' />
  <!--------------------------------- 
    PLUGINS
  --------------------------------->
  <!-- General JS Scripts -->
  <script src="vistas/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="vistas/assets/bundles/datatables/datatables.min.js"></script>
  <script src="vistas/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="vistas/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="vistas/assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="vistas/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="vistas/assets/js/custom.js"></script>
  <script src="vistas/assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="vistas/assets/js/page/sweetalert.js"></script>
  

  

</head>

<!--------------------------------- 
    CUERPO DEL DOCUMENTO
  --------------------------------->
  
<body>
  <div class="loader"></div>
  <div id="app">
    
      
        <?php
        
          if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"]=="ok"){

            echo '<div class="main-wrapper main-wrapper-1">';
            include "modulos/cabezote.php";
            include "modulos/menu.php";
  
            if(isset($_GET["ruta"])){
  
              if($_GET["ruta"]=="inicio" || 
                $_GET["ruta"]=="usuarios"||
                $_GET["ruta"]=="categorias" ||
                $_GET["ruta"]=="productos" ||
                $_GET["ruta"]=="empleados" ||
                $_GET["ruta"]=="clientes" ||
                $_GET["ruta"]=="proveedores" ||
                $_GET["ruta"]=="ventas" ||
                $_GET["ruta"]=="crear-venta" ||
                $_GET["ruta"]=="reporte-ventas" ||
                $_GET["ruta"]=="pago-prov" ||
                $_GET["ruta"]=="pago-emp"  ||
                $_GET["ruta"]=="salir"){

                include "modulos/".$_GET["ruta"].".php";

              }else{
                include "modulos/404.php";
              }
  
            }else{
              include "modulos/inicio.php";
            }
            include "modulos/settingbar.php";
            include "modulos/footer.php";
            echo '</div>';

          }else{
            include "modulos/login.php";
          }
         
        ?>
      
    <!--------------------------------- 
      End Wrapper
    --------------------------------->
  </div>
  
  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>

</body>

</html>