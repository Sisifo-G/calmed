
<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            
                    <div class="text-center"><h3>Reporte de ventas</h3></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reporte de ventas</li>
                        </ol>
                        
                    </nav>
                    
                
            
            


            <!-- =================================================
            CONTENIDO
            ===================================================== -->
            


            <!-- =================================================
                                    TABLA
            ===================================================== -->
            
            <div class="form-row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="input-group">
                                <button type="button" class="btn btn-info" id="daterange-btn2">                           
                                    <span>
                                        <i class="fa fa-calendar"></i> 

                                        <?php

                                        if(isset($_GET["fechaInicial"])){

                                            echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
                                        
                                        }else{
                                        
                                            echo 'Rango de fecha';

                                        }

                                        ?>
                                    </span>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                            </div>
                                            
                        
                            <div class="box-tools pull-right">
                                <?php

                                if(isset($_GET["fechaInicial"])){

                                echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';

                                }else{

                                echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';

                                }         

                                ?>
                                
                                <button class="btn btn-success btn-lg" style="margin-top:5px">Descargar</button>

                                </a>

                            </div>
                        </div>



                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    
                                    <?php

                                    include "reportes/grafico-ventas.php";

                                    ?>

                                </div>

                                <div class="col-md-6 col-xs-12">
                                    
                                    <?php

                                    include "reportes/compradores.php";

                                    ?>

                                </div>

                                

                                
                                
                            </div>
                        
                        
                        
                        
                        </div>
                        

                        

                    </div>
                </div>
            </div>


        </div>
    </section>



</div>
