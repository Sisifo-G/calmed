<div class="main-content">
    <section class="section">
        <div class="section-body">

            <div class="text-center"><h3>Pago a Proveedores</h3></div>
        
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pago a proveedores</li>
                </ol>
            </nav>


            <!-- =================================================
            CONTENIDO
            ===================================================== -->

            


            <div class="row">

                <!-- =================================================
                CARD PAGO A PROVEEDOR
                ===================================================== -->
                <div class="col-md-5">
                    <div class="card card-success">
                        <div class="card-header">
                            <h4>Realizar pago a proveedor</h4>
                        </div>
                        <div class="card-body">
                            
                            <form role ="form" method="post" class="formularioPago">
                            
                                <!-- vendedor -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="nuevoVendedor" name="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>
                                        <input type="hidden" name="id_vendedor" value="<?php echo $_SESSION["id"]; ?>">
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

                                                    $pagos = ControladorPagos::ctrMostrarPagos($item, $valor);

                                                    if(!$pagos){

                                                    echo '<input type="text" class="form-control" id="codigo" name="codigo" value="19001" readonly>';
                                                

                                                    }else{

                                                    foreach ($pagos as $key => $value) {
                                                        
                                                        
                                                    
                                                    }

                                                    $codigo = $value["codigo"] + 1;



                                                    echo '<input type="text" class="form-control" id="codigo" name="codigo" value="'.$codigo.'" readonly>';
                                                

                                                    }

                                                ?>
                                        </div>
                                        
                                    </div>
                                </div>

                                <!-- seleccionar Proveedor -->
                                <div class="form-group">
                                    <div class="input-group">
                                        <select class="form-control" id="id_prov" name="id_prov" required>
                                            <option selected="">Seleccionar proveedor...</option>
                                            <?php

                                                $item = null;
                                                $valor = null;

                                                $proveedores = ControladorProveedores::ctrMostrarProveedores($item, $valor);

                                                foreach ($proveedores as $key => $value) {

                                                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                                                }

                                            ?>
                                        </select>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProveedor" >Agregar proveedor</button>
                                            </div>
                                    </div>
                                </div>

                            
                                <!-- agregar productos -->
                                <div class="form-row">
                                    <div class="form-group col-md-12 style=">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-money-check-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="detalles" name="detalles" placeholder="Detalles del pago" required>
                                            
                                         </div>
                                        
                                    </div>
                                    
                                </div>
                                
                                
                                

                                <!-- IVA -->
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <!-- <label for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> -->
                                    </div>
                                                                        
                                    <div class="form-group col-md-7">
                                        <label for="inputPassword4">Valor pagado</label>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" id="valor" name="valor" total="" placeholder="" required>
                                                

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

                                <button type="submit" class="btn btn-primary pull-right">Guardar pago</button>
                            
                            
                            </form>

                            <?php

                            $guardarPago = new ControladorPagos();
                            $guardarPago -> ctrCrearPago();

                            ?>


                        </div>
                    </div>
              </div>

            
              <!-- =================================================
                CARD PAGOS REALIZADOS
                ===================================================== -->
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4> Pagos realizados</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped dt-responsive tablas">
                                <thead>
                                <tr>
                
                                <th style="width:10px">#</th>
                                <th>Nombre</th>
                                <th>Valor Pagado</th>
                                <th>Detalle</th>
                                <th>Fecha</th>
                                <th>Acciones</th>

                                </tr>  
                                </thead>
                                <tbody>

                                <?php

                                    $item = null;
                                    $valor = null;

                                    $proveedores = ControladorPagos::ctrMostrarPagos($item, $valor);

                                    foreach ($proveedores as $key => $value) {
                                    

                                    echo '<tr>

                                            <td>'.($key+1).'</td>

                                            <td>'.$value["id_prov"].'</td>

                                            <td>$ '.number_format($value["valor"]).'</td>

                                            <td>'.$value["detalles"].'</td>

                                            <td>'.$value["fecha"].'</td>

                                            

                                            <td>

                                                <div class="btn-group">
                                                    
                                                <button class="btn btn-warning btnEditarProveedor" data-toggle="modal" data-target="#modalEditarProveedor" idProveedor="'.$value["id"].'"><i class="fas fa-pencil-alt"></i></button>

                                            
                                                    
                                                <button class="btn btn-danger btnEliminarPago" idPago="'.$value["id"].'"><i class="fa fa-times"></i></button>

                                                

                                            </div>  

                                            </td>

                                            </tr>';
                                    
                                    }

                                ?>
        
                                </tbody>
                            
                            </table>
                            <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

                            </div>
                        </div>
                    </div>
                </div>


            
            </div>
        </div>
    </section>



</div>
