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

                <!-- =================================================
                CARD VENTA
                ===================================================== -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4>Detalles de la venta</h4>
                        </div>
                        <div class="card-body">
                            
                            <form role ="form" method="post" class="formularioVenta">
                            
                                <!-- vendedor -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>
                                        <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>">
                                    </div>
                                </div>

                                <!-- código -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-key"></i>
                                                
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
                                </div>

                                <!-- seleccionar cliente -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect04">
                                            <option selected="">Seleccionar cliente...</option>
                                            <?php

                                                $item = null;
                                                $valor = null;

                                                $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                                                foreach ($categorias as $key => $value) {

                                                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                                                }

                                            ?>
                                        </select>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente" >Agregar cliente</button>
                                            </div>
                                    </div>
                                </div>

                            
                                <!-- agregar productos -->
                                <div class="form-row nuevoProducto">
                                    <!-- <div class="form-group col-md-5 style="padding-right:0px"">
                                        <label for="inputCity">Producto</label>

                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto="'+idProducto+'"><i class="fa fa-times"></i></button></span>'+
                                            </div>
                                            <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" required>
                                            
                                         </div>
                                        
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputState">Cantidad</label>
                                        <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder="0" required>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="inputZip">Valor</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                
                                
                                <input type="hidden" id="listaProductos" name="listaProductos">

                                <!--=====================================
                                BOTÓN PARA AGREGAR PRODUCTO
                                ======================================-->

                                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

                                                
                                <hr>

                                <!-- IVA -->
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <!-- <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Impuesto</label>
                                        <div class="input-group mb-2">
                                            
                                            <input type="number" class="form-control" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>
                                            <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

                                            <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Total</label>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" readonly required>
                                                <input type="hidden" name="totalVenta" id="totalVenta">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                <!-- Método de pago -->
                                <!-- <div class="row">
                                
                                    <div class="form-group col-md-4">
                                        <label>Sel. <code>Método de pago</code></label>
                                        <select class="form-control form-control-sm" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                                            <option value="">Seleccione método de pago</option>
                                            <option value="Efectivo" selected>Efectivo</option>
                                            <option value="C">Crédito</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Total</label>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="" name="" total="" placeholder="00000" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Total</label>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" readonly required>
                                                <input type="hidden" name="totalVenta" id="totalVenta">
                                            </div>
                                        </div>
                                    </div>

                                                                    
                                </div> -->

                                <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>
                            
                            
                            </form>

                            <?php

                            $guardarVenta = new ControladorVentas();
                            $guardarVenta -> ctrCrearVenta();

                            ?>


                        </div>
                    </div>
              </div>


                <!-- =================================================
                CARD SELECCIONAR PRODUCTO
                ===================================================== -->

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h4>Productos</h4>
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
