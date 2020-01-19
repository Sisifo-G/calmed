
<div class="main-content">
    <section class="section">
        <div class="section-body">
        
            <!-- Breadcrumb -->
            
                    <div class="text-center"><h3>Gestión de categorías</h3></div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="inicio"><i class="fas fa-desktop"></i>Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Gestión de categorías</li>
                        </ol>
                        
                    </nav>
                    
                
            
            


            <!-- =================================================
            CONTENIDO
            ===================================================== -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Agregar categoría</h4>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">Crear categoría</button>
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
                    <h4>Categorías existentes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped tablas">
                        <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Foto</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Último login</th>
                            <th>Acciones</th>
                        </tr> 
                        </thead>
                        <tbody>

                            <?php

                            $item = null;
                            $valor = null;

                            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                        foreach ($usuarios as $key => $value){
                            
                            echo ' <tr>
                                    <td>1</td>
                                    <td>'.$value["nombre"].'</td>
                                    <td>'.$value["usuario"].'</td>';

                                    if($value["foto"] != ""){

                                        echo '<td><img src="'.$value["foto"].'" class="" width="40px"></td>';

                                    }else{

                                        echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="" width="40px"></td>';

                                    }

                                    echo '<td>'.$value["perfil"].'</td>';

                                    if($value["estado"] != 0){

                                        echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                                    }else{

                                        echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                                    }             

                                    echo '<td>'.$value["ultimo_login"].'</td>
                                    <td>

                                        <div class="btn-group">
                                            
                                        <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fas fa-pencil-alt"></i></button>

                                        <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fas fa-trash-alt"></i></button>

                                        </div>  

                                    </td>

                                    </tr>';
                            }


                            ?> 

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div>
    </section>



</div>

<!-- =================================================
    Modal Agregar Usuario
    ===================================================== -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Agregar Usuario</h5>
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
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="nuevoUsuario" name="nuevoUsuario" placeholder="Ingresar usuario" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar contraseña">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-users"></i>
                                </div>
                            </div>
                        <select class="form-control input_lg" name="nuevoPerfil">
                            <option value="">Seleccionar perfil</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Especial">Especial</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label>FOTO</label>
                            <input type="file" class="form-control nuevaFoto" name="nuevaFoto">
                            <p class="help-block">Peso máximo de la foto 2Mb</p>
                            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                            </div>
                    
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar usuario</button>

                    <?php

                    $crearUsuario = new ControladorUsuarios();
                    $crearUsuario -> ctrCrearUsuario();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>



<!-- =================================================
    Modal Editar Usuario
    ===================================================== -->
<div class="modal fade" id="modalEditarUsuario" aria-labelledby="formModal"aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Editar datos de usuario</h5>
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
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="editarNombre" name="editarNombre" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="editarUsuario" name="editarUsuario" value="" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control" name="editarPassword" placeholder="Escriba la nueva contraseña">
                            <input type="hidden" id="passwordActual" name="passwordActual">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                <i class="fas fa-users"></i>
                                </div>
                            </div>
                        <select class="form-control input_lg" name="editarPerfil">
                            <option value="" id="editarPerfil"></option>
                            <option value="Administrador">Administrador</option>
                            <option value="Especial">Especial</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Otro">Otro</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label>SUBIR FOTO</label>
                            <input type="file" class="form-control nuevaFoto" name="editarFoto">
                            <p class="help-block">Peso máximo de la foto 2Mb</p>
                            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
                            <input type="hidden" name="fotoActual" id="fotoActual">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Modificar usuario</button>

                    <?php

                    $crearUsuario = new ControladorUsuarios();
                    $crearUsuario -> ctrEditarUsuario();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 





