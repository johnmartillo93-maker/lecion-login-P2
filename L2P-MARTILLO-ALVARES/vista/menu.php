<?php
// ===============================
// CONTROL DE SESIÓN
// ===============================
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php?accion=login");
    exit;
}

include __DIR__ . '/layout/header.php';
?>

<div class="container mt-4">

    <!-- ENCABEZADO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Menú Principal</h2>

    </div>

    <!-- USUARIO -->
    <p class="mb-4">
        Bienvenido,
        <strong><?= strtoupper($_SESSION['usuario']) ?></strong>
    </p>

            <div class="col-md-4 mb-3">
            <div class="card text-center h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Resgistrar Usuario</h5>
                    <p class="card-text">
                        Registro Usuario.
                    </p>

                        <a href="index.php?accion=consultarAlumnos"
                           class="btn btn-outline-secondary btn-sm">
                            Consultar
                        </a>
                    
                </div>
            </div>
        </div>

    

<?php include __DIR__ . '/layout/footer.php'; ?>
