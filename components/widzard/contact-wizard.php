<section id="contacto" class="quote-section contact-wizard-section">
    <div class="container">
        <div class="wizard-card">
            <div class="wizard-header">
                <div>
                    <span class="section-badge">COTACTATE CON NOSOTROS</span>
                    <h2>Selecciona tu necesidad y te guiamos paso a paso</h2>
                </div>
            </div>

            <div class="wizard-body">
                <div class="wizard-sidebar">
                    <div class="wizard-step-wrapper">
                        <div class="wizard-progress-line" id="wizardProgressLine"></div>
                        <div class="wizard-steps" id="wizardSteps">
                            <button class="step active current" data-step="1">
                                <span class="step-index">1</span>
                                <span class="step-title">Motivo</span>
                                <span class="step-status"><i class="fa-solid fa-check"></i></span>
                            </button>
                            <button class="step" data-step="2">
                                <span class="step-index">2</span>
                                <span class="step-title">Detalles</span>
                                <span class="step-status"><i class="fa-solid fa-check"></i></span>
                            </button>
                            <button class="step" data-step="3">
                                <span class="step-index">3</span>
                                <span class="step-title">Revisar</span>
                                <span class="step-status"><i class="fa-solid fa-check"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="wizard-content">
                    <div class="wizard-panel active" data-panel="1">
                        <p>Elige qué necesitas.</p>
                        <div class="wizard-options">
                            <button type="button" class="wizard-option" data-option="recuperar">Recuperar contraseña</button>
                            <button type="button" class="wizard-option" data-option="soporte">Dar soporte</button>
                            <button type="button" class="wizard-option" data-option="cotizar">Cotizar</button>
                        </div>
                    </div>

                    <div class="wizard-panel" data-panel="2">
                        <div class="wizard-panel-content" id="wizardStep2Content">
                            <div class="wizard-form-group">
                                <label>Nombre completo</label>
                                <input type="text" id="wizardName" class="form-control modern-input" placeholder="Tu nombre">
                            </div>
                            <div class="wizard-form-group">
                                <label>Teléfono</label>
                                <input type="text" id="wizardPhone" class="form-control modern-input" placeholder="Tu celular">
                            </div>
                            <div class="wizard-form-group">
                                <label>Correo electrónico</label>
                                <input type="email" id="wizardEmail" class="form-control modern-input" placeholder="Tu email">
                            </div>
                            <div class="wizard-form-group" id="wizardProductSelectGroup" style="display:none;">
                                <label>Selecciona un producto</label>
                                <div class="select-wrapper">
                                    <select id="wizardProductSelect" class="form-select modern-input">
                                        <option value="">Elige un producto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="wizard-form-group">
                                <label>Mensaje</label>
                                <textarea id="wizardMessage" rows="4" class="form-control modern-input" placeholder="Cuéntanos qué necesitas"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="wizard-panel" data-panel="3">
                    <div class="wizard-review-card">
                        <h4>Revisa tu solicitud</h4>
                        <div class="review-row"><strong>Motivo:</strong> <span id="reviewOption">-</span></div>
                        <div class="review-row"><strong>Producto:</strong> <span id="reviewProduct">-</span></div>
                        <div class="review-row"><strong>Nombre:</strong> <span id="reviewName">-</span></div>
                        <div class="review-row"><strong>Teléfono:</strong> <span id="reviewPhone">-</span></div>
                        <div class="review-row"><strong>Email:</strong> <span id="reviewEmail">-</span></div>
                        <div class="review-row"><strong>Mensaje:</strong> <span id="reviewMessage">-</span></div>
                        <button class="btn btn-primary wizard-submit-btn" id="wizardSubmit">Enviar solicitud</button>
                    </div>
                </div>
            </div>

            <div class="wizard-footer">
                <button class="btn btn-outline-custom" id="wizardBack">Regresar</button>
                <button class="btn btn-primary" id="wizardNext">Siguiente</button>
            </div>
        </div>
    </div>
</section>
