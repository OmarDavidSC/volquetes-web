<div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="d-flex align-items-center">
                    <div class="login-modal-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold" id="loginModalLabel">Iniciar sesión</h5>
                        <p class="mb-0 small opacity-75">Accede a tu cuenta para continuar</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <form class="login-form">
                    <div class="mb-3">
                        <label for="loginUser" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="loginUser" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 login-submit-btn">Entrar</button>
                    <p class="login-helper-text">¿Olvidaste tu contraseña? Contáctanos</p>
                </form>
            </div>
        </div>
    </div>
</div>
