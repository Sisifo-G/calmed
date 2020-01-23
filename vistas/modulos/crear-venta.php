<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="text-center"><h3>Crear venta</h3></div>
        
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear venta</li>
                </ol>
            </nav>


            <!-- =================================================
            CONTENIDO
            ===================================================== -->

            


            <div class="row">
                <!-- FORM CARD -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4>Detalles de la venta</h4>
                        </div>

                        <form role="form" method="post" class="formularioVenta">

                            <div class="card-body">
                                <!--=====================================
                                ENTRADA DEL VENDEDOR
                                ======================================-->
                                <div class="form-group">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>
                                        <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>">
                                    </div>
                                </div>

                                <!--=====================================
                                ENTRADA DEL CÓDIGO
                                ======================================--> 
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <i class="fa fa-key"></i>
                                                </div>
                                        </div>
                                        <?php
                                        $item = null;
                                        $valor = null;
                                        $ventas = ControladorVentas::ctrMostrarVentas($item, $valor);

                                        if(!$ventas){
                                        echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>';
                                        }else{

                                        foreach ($ventas as $key => $value) {
                                            
                                        }

                                        $codigo = $value["codigo"] + 1;

                                        echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="'.$codigo.'" readonly>';

                                        }

                                        ?>                                    
                                        
                                    </div>
                                </div>

                                <!--=====================================
                                ENTRADA DEL CLIENTE
                                ======================================--> 

                                <div class="form-group">                           
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                        </div>                                    
                                                                        
                                        <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>
                                            <option value="">Seleccionar cliente</option>
                                            <?php
                                            $item = null;
                                            $valor = null;

                                            $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                                            foreach ($categorias as $key => $value) {

                                                echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                                            }

                                            ?>
                                        </select>
                                        <span class="input-group-addon"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>                       
                                    </div>
                                
                                </div>

                                <!--=====================================
                                ENTRADA PARA AGREGAR PRODUCTO
                                ======================================--> 

                                <div class="form-group row nuevoProducto">

                                </div>
                                <input type="hidden" id="listaProductos" name="listaProductos">


                                <!--=====================================
                                BOTÓN PARA AGREGAR PRODUCTO
                                ======================================-->

                                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

                                <hr>

                                <!--=====================================
                                    ENTRADA IMPUESTOS Y TOTAL
                                ======================================-->
                                <div class="form-row">
                                    <div class="col-xs-8 pull-right">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                <th>Impuesto</th>
                                                <th>Total</th>      
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%">
                                                        <div class="input-group">
                                                            <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                                                            <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>
                                                            <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    %
                                                                </div>
                                                            </div>  
                                                                            
                                                        </div>
                                                    </td>
                                                    <td style="width: 50%">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        $
                                                                    </div>
                                                            </div>
                                                            <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" readonly required>
                                                            <input type="hidden" name="totalVenta" id="totalVenta">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <hr>


                                <!--=====================================
                                ENTRADA MÉTODO DE PAGO
                                ======================================-->

                                <div class="form-group row">
                                
                                    <div class="col-md-4" style="padding-right:5px">
                                        
                                        <div class="input-group">
                                    
                                        <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                            <option value="">Seleccione método de pago</option>
                                            <option value="Efectivo">Efectivo</option>
                                            <option value="TC">Crédito</option>
                                            <option value="TD">Tarjeta Débito</option>                  
                                        </select>    

                                        </div>

                                    </div>

                                    <div class="cajasMetodoPago"></div>

                                    <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
                                <br>
                                <br>
                            </div>  <!--  cierra de Card Body -->
                        </form>

                        <?php

                        $guardarVenta = new ControladorVentas();
                        $guardarVenta -> ctrCrearVenta();
                        
                        ?>

                    </div>
               
               
               
               
               
                </div>  <!--  cierra la fila de detalles venta -->


                <!-- TABLE CARD -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>Productos disponibless</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped dt-responsive tablaVentas">
                
                                <thead>

                                    <tr>
                                        <th style="width: 10px">#</th>
  
                                        <th>Código</th>
                                        <th>Descripcion</th>
                                        <th>Stock</th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>



</div>



<!-- =================================================
    MODAL AGREGAR CLIENTE
    ===================================================== -->
<div class="modal fade" id="modalAgregarCliente" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Agregar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="nuevoCliente" placeholder="Ingresar nombre">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-id-card"></i>
                                </div>
                            </div>
                            <input type="number" min="0" class="form-control" name="nuevoDocumentoId" placeholder="Ingresar documento">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="email" class="form-control" name="nuevoEmail" placeholder="Ingresar email">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="nuevaDireccion" placeholder="Ingresar dirección">
                            </div>
                        </div>
                    </div>


                                                                  
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar cliente</button>

                    <?php

                      $crearCliente = new ControladorClientes();
                      $crearCliente -> ctrCrearCliente();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>
