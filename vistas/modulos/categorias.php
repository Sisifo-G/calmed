
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
                    <h4>Crear categoría</h4>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Crear categoría</button>
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
                    <h4>Categorías creadas</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
                      <thead>
                        
                        <tr>
                          
                          <th style="width:10px">#</th>
                          <th>Categoria</th>
                          <th>Acciones</th>
              
                        </tr> 
              
                      </thead>
              
                      <tbody>
              
                        <?php
                
                          $item = null;
                          $valor = null;
                
                          $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                
                          foreach ($categorias as $key => $value) {
                            
                            echo ' <tr>
                
                                    <td>'.($key+1).'</td>
                
                                    <td class="text-uppercase">'.$value["categoria"].'</td>
                
                                    <td>
                
                                      <div class="btn-group">
                                          
                                        <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fas fa-pencil-alt"></i></button>
                
                                        <button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>
                
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



<!--=====================================
MODAL AGREGAR CATEGORÍA
======================================-->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="formModal" aria-hidden="true" role="dialog">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="formModal">Agregar Categorìa</h5>
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
                          <input type="text" class="form-control" name="nuevaCategoria" placeholder="Ingresar categoría" required>
                      </div>
                  </div>
                  
                                
                  
                  
                  <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar categoría</button>

                  <?php

                    $crearCategoria = new ControladorCategorias();
                    $crearCategoria -> ctrCrearCategoria();

                  ?>

              </form>  
          </div>
      </div>
  </div>
</div>



<!-- =================================================
  MODAL EDITAR CATEGORÌA
  ===================================================== -->
<div class="modal fade" id="modalEditarCategoria" aria-labelledby="formModal"aria-hidden="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModal">Editar categoría</h5>
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
                            <input type="text" class="form-control" name="editarCategoria" id="editarCategoria" required>
                            <input type="hidden"  name="idCategoria" id="idCategoria" required>
                        </div>
                    </div>

                                      
                    
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar cambios</button>

                    <?php

                      $editarCategoria = new ControladorCategorias();
                      $editarCategoria -> ctrEditarCategoria();

                    ?>

                </form>  
            </div>
        </div>
    </div>
</div>




<?php

  $borrarCategoria = new ControladorCategorias();
  $borrarCategoria -> ctrBorrarCategoria();

?>


