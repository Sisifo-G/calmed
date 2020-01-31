
<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            
                    <div class="text-center"><h3>Gestión de Empleados</h3></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestión de Empleados</li>
                        </ol>
                        
                    </nav>
                    
                
            
            


            <!-- =================================================
            CONTENIDO
            ===================================================== -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Agregar Empleado</h4>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEmpleado">Guardar Empleado</button>
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
                    <h4> Empleados registrados</h4>
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
                          <th>Acciones</th>

                        </tr>  
                        </thead>
                        <tbody>

                          <?php

                            $item = null;
                            $valor = null;

                            $Empleados = ControladorEmpleados::ctrMostrarEmpleados($item, $valor);

                            foreach ($Empleados as $key => $value) {
                              

                              echo '<tr>

                                      <td>'.($key+1).'</td>

                                      <td>'.$value["nombre"].'</td>

                                      <td>'.$value["documento"].'</td>

                                      <td>'.$value["email"].'</td>

                                      <td>'.$value["telefono"].'</td>

                                      <td>'.$value["direccion"].'</td>

                                                 

                                      

                                      <td>

                                        <div class="btn-group">
                                            
                                          <button class="btn btn-warning btnEditarEmpleado" data-toggle="modal" data-target="#modalEditarEmpleado" idEmpleado="'.$value["id"].'"><i class="fas fa-pencil-alt"></i></button>';

                                        if($_SESSION["perfil"] == "Administrador"){

                                            echo '<button class="btn btn-danger btnEliminarEmpleado" idEmpleado="'.$value["id"].'"><i class="fa fa-times"></i></button>';

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
    MODAL AGREGAR Empleado
    ===================================================== -->
<div class="modal fade" id="modalAgregarEmpleado" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Agregar Empleado</h5>
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
                            <input type="text" class="form-control" name="nuevoEmpleado" placeholder="Ingresar nombre">
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


                                                                  
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar Empleado</button>

                    <?php

                      $crearEmpleado = new ControladorEmpleados();
                      $crearEmpleado -> ctrCrearEmpleado();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>



<!-- =================================================
    MODAL EDITAR Empleado
    ===================================================== -->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Editar datos de Empleado</h5>
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
                            <input type="text" class="form-control"name="editarEmpleado" id="editarEmpleado" required>
                            <input type="hidden" id="idEmpleado" name="idEmpleado">
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

                        $editarEmpleado = new ControladorEmpleados();
                        $editarEmpleado -> ctrEditarEmpleado();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>



<!-- =================================================
    BORRAR Empleado
    ===================================================== -->


<?php

  $eliminarEmpleado = new ControladorEmpleados();
  $eliminarEmpleado -> ctrEliminarEmpleado();

?> 





