<section class="featured-section" id="productos">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">
                PRODUCTOS DESTACADOS
            </span>
            <h2>Encuentra el vehículo ideal para tu operación</h2>
            <p>
                Explora volquetes y tractocamiones con desempeño probado,
                capacidad superior y soporte técnico especializado.
            </p>
        </div>

        <div class="row g-4 mt-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="product-card product-card-large">
                    <!-- <div class="product-image">
                        <img src="assets/img/products/howo-t7h.png" alt="HOWO T7H">
                    </div> -->
                    <div class="catalog-image">
                        <img src="assets/img/products/howo-t7h.png" class="product-main-image" id="productImage1">
                        <div class="product-thumbs">
                            <img src="assets/img/products/howo-t7h.png" class="thumb active" onclick="changeProductImage(this,'productImage1')">
                            <img src="assets/img/products/howo-t7h.png" class="thumb" onclick="changeProductImage(this,'productImage1')">
                            <img src="assets/img/products/howo-t7h.png" class="thumb" onclick="changeProductImage(this,'productImage1')">
                        </div>
                    </div>
                    <div class="product-body">
                        <div class="product-chip-row">
                            <span class="product-brand">HOWO</span>
                            <span class="product-tag">6x4 / Volquete</span>
                        </div>
                        <h4>HOWO T7H</h4>
                        <p class="product-description">
                            El modelo preferido para obra pesada: alta potencia,
                            carga de 20m³ y rendimiento constante en terreno difícil.
                        </p>
                        <div class="product-meta">
                            <span>371 HP</span>
                            <span>20m³</span>
                            <span>Manual</span>
                        </div>
                        <button type="button" class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#productDetailModal">
                            Ver detalle
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="product-card product-card-compact">
                            <div class="catalog-image">
                                <img src="assets/img/products/shacman-x3000.png" class="product-main-image" id="productImage2">
                                <div class="product-thumbs">
                                    <img src="assets/img/products/shacman-x3000.png" class="thumb active" onclick="changeProductImage(this,'productImage2')">
                                    <img src="assets/img/products/shacman-x3000.png" class="thumb" onclick="changeProductImage(this,'productImage2')">
                                    <img src="assets/img/products/shacman-x3000.png" class="thumb" onclick="changeProductImage(this,'productImage2')">
                                </div>
                            </div>
                            <div class="product-body">
                                <div class="product-chip-row">
                                    <span class="product-brand">SHACMAN</span>
                                    <span class="product-tag">Minero</span>
                                </div>
                                <h4>X3000</h4>
                                <div class="product-meta">
                                    <span>430 HP</span>
                                    <span>22m³</span>
                                    <span>Minería</span>
                                </div>
                                <button type="button" class="btn btn-outline-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailModal">
                                    Ver detalle
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-card product-card-compact">
                            <div class="catalog-image">
                                <img src="assets/img/products/sinotruk-max.png" class="product-main-image" id="productImage3">
                                <div class="product-thumbs">
                                    <img src="assets/img/products/sinotruk-max.png" class="thumb active" onclick="changeProductImage(this,'productImage3')">
                                    <img src="assets/img/products/sinotruk-max.png" class="thumb" onclick="changeProductImage(this,'productImage3')">
                                    <img src="assets/img/products/sinotruk-max.png" class="thumb" onclick="changeProductImage(this,'productImage3')">
                                </div>
                            </div>
                            <div class="product-body">
                                <div class="product-chip-row">
                                    <span class="product-brand">SINOTRUK</span>
                                    <span class="product-tag">Alta Eficiencia</span>
                                </div>
                                <h4>HOWO MAX</h4>
                                <div class="product-meta">
                                    <span>400 HP</span>
                                    <span>18m³</span>
                                    <span>Urbano</span>
                                </div>
                                <button type="button" class="btn btn-outline-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailModal">
                                    Ver detalle
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="product-card product-card-compact">
                            <div class="catalog-image">
                                <img src="assets/img/products/foton-auman.png" class="product-main-image" id="productImage4">
                                <div class="product-thumbs">
                                    <img src="assets/img/products/foton-auman.png" class="thumb active" onclick="changeProductImage(this,'productImage4')">
                                    <img src="assets/img/products/foton-auman.png" class="thumb" onclick="changeProductImage(this,'productImage4')">
                                    <img src="assets/img/products/foton-auman.png" class="thumb" onclick="changeProductImage(this,'productImage4')">
                                </div>
                            </div>
                            <div class="product-body">
                                <div class="product-chip-row">
                                    <span class="product-brand">FOTON</span>
                                    <span class="product-tag">Logístico</span>
                                </div>
                                <h4>AUMAN GTL</h4>
                                <div class="product-meta">
                                    <span>380 HP</span>
                                    <span>Versátil</span>
                                    <span>Entrega Rápida</span>
                                </div>
                                <button type="button" class="btn btn-outline-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailModal">
                                    Ver detalle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="?page=productos" class="btn btn-primary px-5">
                Ver Todos los Productos
            </a>
        </div>
    </div>
</section>