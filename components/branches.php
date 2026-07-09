<section id="red-ventas" class="branches-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">NUESTRAS SEDES</span>
            <h2>Encuentra la sede más cercana</h2>
            <p>Soporte comercial y servicio técnico disponible en varias ciudades del país.</p>
        </div>

        <div class="row g-4 mt-5">
            <?php
            $branches = [
                ['Chiclayo', 'Av. Balta 1234', '+51 999 999 999'],
                ['Piura', 'Av. Grau 890', '+51 999 999 999'],
                ['Trujillo', 'Av. América Norte 456', '+51 999 999 999'],
                ['Lima', 'Panamericana Sur Km 25', '+51 999 999 999'],
                ['Cajamarca', 'Jr. Los Héroes 789', '+51 999 999 999'],
                ['Arequipa', 'Av. Ejército 321', '+51 999 999 999']
            ];
            foreach ($branches as $branch): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="branch-card">
                        <div class="branch-card-top">
                            <div class="branch-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <span class="branch-city"><?= $branch[0] ?></span>
                        </div>
                        <p class="branch-address"><?= $branch[1] ?></p>
                        <a href="tel:<?= $branch[2] ?>" class="branch-phone">
                            <i class="fa-solid fa-phone"></i>
                            <?= $branch[2] ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>