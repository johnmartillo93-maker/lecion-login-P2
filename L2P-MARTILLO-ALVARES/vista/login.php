<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include __DIR__ . '/layout/header.php';
?>

<style>
    .login-card {
        border-radius: 20px;
        padding: 35px;
        background: #ffffffd8;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        backdrop-filter: blur(3px);
    }
</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="login-card">

                <h3 class="text-center mb-4 text-primary">
                    <i class="bi bi-person-circle"></i> Iniciar Sesión
                </h3>

                <form action="index.php?accion=procesarlogin" method="post">

                    <div class="mb-3">
                        <input class="form-control form-control-lg"
                               name="usuario"
                               placeholder="Usuario"
                               required>
                    </div>

                    <div class="mb-3">
                        <input class="form-control form-control-lg"
                               type="password"
                               name="clave"
                               placeholder="Contraseña"
                               required>
                    </div>

                    <?php if(isset($_GET['error'])): ?>
                        <div class="alert alert-danger text-center">
                            ❌ Usuario o clave incorrectos
                        </div>
                    <?php endif; ?>

                    <?php if(isset($_GET['ok'])): ?>
                        <div class="alert alert-success text-center">
                            ✅ Acceso exitoso
                        </div>
                    <?php endif; ?>

                    <button class="btn btn-primary w-100 btn-lg">
                        <i class="bi bi-box-arrow-in-right"></i> Iniciar Secion
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a class="btn btn-outline-secondary btn-sm" href="index.php">← Volver</a>
                </div>

            </div>

        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
