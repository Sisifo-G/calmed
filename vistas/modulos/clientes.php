
<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            
                    <div class="text-center"><h3>Gestión de clientes</h3></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestión de clientes</li>
                        </ol>
                        
                    </nav>
                    
                
            
            


            <!-- =================================================
            CONTENIDO
            ===================================================== -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Agregar cliente</h4>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">Guardar cliente</button>
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
                    <h4> Clientes registrados</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped dt-responsive tablas">
                        <thead>
                        <tr>
           
                          <th style="width:10px">#</th>
                          <th>Nombre</th>
                          <th>Documento ID</th>
                          <th>Email</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                         
                          <th>Total compras</th>
                          <th>Última compra</th>
                          
                          <th>Acciones</th>

                        </tr>  
                        </thead>
                        <tbody>

                          <?php

                            $item = null;
                            $valor = null;

                            $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                            foreach ($clientes as $key => $value) {
                              

                              echo '<tr>

                                      <td>'.($key+1).'</td>

                                      <td>'.$value["nombre"].'</td>

                                      <td>'.$value["documento"].'</td>

                                      <td>'.$value["email"].'</td>

                                      <td>'.$value["telefono"].'</td>

                                      <td>'.$value["direccion"].'</td>

                                                 

                                      <td>'.$value["compras"].'</td>

                                      <td>'.$value["ultima_compra"].'</td>

                                      

                                      <td>

                                        <div class="btn-group">
                                            
                                          <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fas fa-pencil-alt"></i></button>';

                                        if($_SESSION["perfil"] == "Administrador"){

                                            echo '<button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                                        }

                                        echo '</div>  

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

<!-- =================================================
    MODAL AGREGAR CLIENTE
    ===================================================== -->
<div class="modal fade" id="modalAgregarCliente" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
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



<!-- =================================================
    MODAL EDITAR PRODUCTO
    ===================================================== -->
    <div class="modal fade" id="modalEditarCliente" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Editar datos de cliente</h5>
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

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?> 





