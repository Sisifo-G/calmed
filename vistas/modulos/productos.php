
<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            
                    <div class="text-center"><h3>Gestión de productos</h3></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestión de productos</li>
                        </ol>
                        
                    </nav>
                    
                
            
            


            <!-- =================================================
            CONTENIDO
            ===================================================== -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Agregar producto</h4>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar producto</button>
                    </div>
                </div>
            </div>


            <!-- =================================================
                                    TABLA
            ===================================================== -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4> Productos disponibles</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped tablaProductos">
                        <thead>
                            <tr>
           
                                <th style="width:10px">#</th>
                                <th>Imagen</th>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Stock</th>
                                <th>Precio de producción</th>
                                <th>Precio de venta</th>
                                <th>Agregado</th>
                                <th>Acciones</th>
                                
                            </tr> 
                        </thead>
                       
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

<!-- =================================================
    MODAL AGREGAR PRODUCTO
    ===================================================== -->
<div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Agregar Producto</h5>
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
                                    <i class="fas fa-store"></i>
                                </div>
                            </div>
                            <select class="form-control input_lg" id="nuevaCategoria" name="nuevaCategoria" required>
                                <option value="">Seleccionar categoría</option>
                                <?php

                                    $item = null;
                                    $valor = null;

                                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                                    foreach ($categorias as $key => $value) {
                                        
                                        echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
                                    }

                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-box-open"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="nuevaDescripcion" placeholder="Descripción del producto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-check-double"></i>
                                </div>
                            </div>
                            <input type="number" class="form-control" name="nuevoStock" min="0" placeholder="Stock" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-up"></i>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="Precio de producción" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-down"></i>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Precio de venta" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-6">
                    
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input porcentaje" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Utilizar porcentaje</label>
                            </div>
                        </div>

                    </div>

                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right nuevoPorcentaje" min="0" value="40" required>
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-percent"></i></div>
                        </div>
                    </div>

                    

                    
                    
                    <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" class="form-control nuevaImagen" name="nuevaImagen">
                            <p class="help-block">Peso máximo de la foto 2Mb</p>
                            <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                            </div>
                    
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar producto</button>

                    <?php

                        $crearProducto = new ControladorProductos();
                        $crearProducto -> ctrCrearProducto();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>



<!-- =================================================
    MODAL EDITAR PRODUCTO
    ===================================================== -->
    <div class="modal fade" id="modalEditarProducto" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Editar Producto</h5>
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
                                    <i class="fas fa-store"></i>
                                </div>
                            </div>
                            <select class="form-control input_lg" name="editarCategoria" readonly required>
                                <option id="editarCategoria"></option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-code"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="editarCodigo" name="editarCodigo" readonly required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-box-open"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="editarDescripcion" name="editarDescripcion" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-check-double"></i>
                                </div>
                            </div>
                            <input type="number" class="form-control" name="editarStock" min="0" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-up"></i>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-down"></i>
                                    </div>
                                </div>
                                <input type="number" class="form-control" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" required>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-6">
                    
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input porcentaje" id="customCheck1" checked>
                            <label class="custom-control-label" for="customCheck1">Utilizar porcentaje</label>
                            </div>
                        </div>

                    </div>

                    <div class="input-group mb-2">
                        <input type="number" class="form-control text-right nuevoPorcentaje" min="0" value="40" required>
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-percent"></i></div>
                        </div>
                    </div>

                    

                    
                    
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" class="form-control nuevaImagen" name="editarImagen">
                        <p class="help-block">Peso máximo de la foto 2Mb</p>
                        <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                        <input type="hidden" name="imagenActual" id="imagenActual">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar cambios</button>

                    <?php

                        $editarProducto = new ControladorProductos();
                        $editarProducto -> ctrEditarProducto();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>


<!-- =================================================
    BORRAR PRODUCTO
    ===================================================== -->

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?> 





