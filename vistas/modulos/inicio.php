

<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                </ol>
            </nav>


            <!-- =================================================
            CONTENIDO
            ===================================================== -->

            <?php

            include "inicio/cajas-superiores.php";

            ?>
            

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
    </section>




</div>