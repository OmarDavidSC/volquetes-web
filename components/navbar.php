<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
            <img
                src="assets/img/logo.png"
                alt="Logo"
                class="navbar-logo">
            <div class="d-flex flex-column">
                <span class="brand-title">
                    MAQUINAS PERÚ
                </span>
                <small class="brand-subtitle">
                    Camiones & Maquinaria Pesada
                </small>
            </div>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarMain">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=productos">
                        Productos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#servicios">
                        Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#red-ventas">
                        Red de Ventas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#nosotros">
                        Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contacto">
                        Contacto
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2 ms-3">
                <button
                    type="button"
                    id="loginAccessButton"
                    class="btn login-access-btn px-4">
                    Acceder
                </button>
                <a
                    href="#contacto"
                    class="btn btn-primary px-4">
                    Cotizar Ahora
                </a>
            </div>
        </div>
    </div>
</nav>

<?php include __DIR__ . '/partials/login-modal.php'; ?>