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
                            <!-- usuario -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <!-- código -->
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-key"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <!-- seleccionar cliente -->
                            <div class="form-group">
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected="">Seleccionar cliente...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Agregar datos del cliente para realizar la venta" aria-describedby="tooltip204012">Agregar cliente</button>
                                    </div>
                                </div>
                            </div>

                           
                            <!-- agregar productos -->
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputCity">Producto</label>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></span>
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
                                </div>
                            </div>
                            

                            <!--=====================================
                            BOTÓN PARA AGREGAR PRODUCTO
                            ======================================-->

                            <!-- <button type="button" class="btn btn-default hidden-lg">Agregar producto</button> -->
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
                                        
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
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
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                             </div>
                             

                             <!-- Método de pago -->
                             <div class="row">
                             
                                <div class="form-group col-md-5">
                                    <label>Seleccionar <code>Método de pago</code></label>
                                    <select class="form-control form-control-sm">
                                        <option>Efectivo</option>
                                        <option>Crédito</option>
                                    </select>
                                </div>
                                <div class="col-md-7" style="padding-left:0px">
                                    <label>.</label>

                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control text-right" id="nuevoCodigoTransaccion" name="nuevoCodigoTransaccion" placeholder="Código transacción"  required>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                        </div>
                                    </div>

                                    
                                </div>
                             
                             </div>

                            <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

                           


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
                            
                            <table class="table table-bordered table-striped dt-responsive tablas">
                
                                <thead>

                                    <tr>
                                    <th style="width: 10px">#</th>
                                    
                                    <th>Código</th>
                                    <th>Descripcion</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>

                                </thead>

                                <tbody>

                                <tr>
                                    <td>1.</td>                 
                                    
                                    <td>00123</td>
                                    <td>Cal bulto 10Kg</td>       
                                    <td>20</td>                 
                                    <td>                 
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Agregar</button> 
                                    </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>



</div>