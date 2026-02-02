<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include __DIR__ . '/layout/header.php';
?>

<div class="container mt-4">

    <?php if(isset($_GET['ok'])): ?>
        <div class="alert alert-success text-center">
            ✅ Acceso exitoso. Bienvenido al sistema.
        </div>
    <?php endif; ?>

    <h2 class="text-center mb-4 text-primary">
        <i class="bi bi-speedometer2"></i> Panel Principal
    </h2>

    <p class="text-center mb-4">
        Usuario conectado:
        <strong><?= strtoupper($_SESSION['usuario']) ?></strong>
    </p>

    <div class="row justify-content-center g-4">



      

    </div>

</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
