<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Ingreso</h4>
                    </div>

                    <div class="card-body">

                        <form method="POST" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input id="usuario" type="text" class="form-control" name="ingUsuario" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Por favor ingrese su usuario
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Contraseña</label>
                                    <div class="float-right">
                                        <a href="auth-forgot-password.html" class="text-small">
                                            Olvidó su contraseña?
                                        </a>
                                    </div>
                                </div>

                                <input id="password" type="password" class="form-control" name="ingPassword" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Por favor ingrese su contraseña
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Recordarme</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Ingresar
                                </button>
                            </div>

                            <?php
                            
                                $login = new ControladorUsuarios();
                                $login -> ctrIngresoUsuario();

                            ?>
                            
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


