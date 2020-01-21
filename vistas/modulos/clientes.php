
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
    MODAL EDITAR CLIENTE
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
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control"name="editarCliente" id="editarCliente" required>
                            <input type="hidden" id="idCliente" name="idCliente">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-id-card"></i>
                                </div>
                            </div>
                            <input type="number" min="0" class="form-control" name="editarDocumentoId" id="editarDocumentoId">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <input type="email" class="form-control" name="editarEmail" id="editarEmail">
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
                                <input type="text" class="form-control" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask>
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
                                <input type="text" class="form-control" name="editarDireccion" id="editarDireccion">
                            </div>
                        </div>
                    </div>


                                                                  
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar cambios</button>

                    <?php

                        $editarCliente = new ControladorClientes();
                        $editarCliente -> ctrEditarCliente();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>



<!-- =================================================
    BORRAR CLIENTE
    ===================================================== -->


<?php

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente -> ctrEliminarCliente();

?> 





