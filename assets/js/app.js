window.toggleWhatsAppMenu = function (event) {
    if (event) event.preventDefault();

    const btn = document.getElementById('whatsappToggle');
    const options = document.getElementById('whatsappOptions');

    if (!btn || !options) return;

    const isOpen = btn.classList.toggle('active');
    options.classList.toggle('open', isOpen);
    options.setAttribute('aria-hidden', String(!isOpen));
    btn.setAttribute('aria-expanded', String(isOpen));
};

window.showToast = function (message, type = 'info') {
    const toastContainer = document.getElementById('sharedAlertToastContainer');
    if (!toastContainer) return;

    const toast = document.createElement('div');
    toast.className = `alert-toast ${type}`;
    toast.textContent = message;
    toastContainer.appendChild(toast);

    setTimeout(() => {
        toast.style.animation = 'toastOut 0.3s forwards';
        toast.addEventListener('animationend', () => toast.remove());
    }, 2600);
};

window.requestConfirm = function ({
    title = 'Confirmar',
    message = '¿Estás seguro?',
    acceptText = 'Sí',
    cancelText = 'No'
} = {}) {
    const overlay = document.getElementById('sharedConfirmOverlay');
    const titleEl = document.getElementById('sharedConfirmTitle');
    const messageEl = document.getElementById('sharedConfirmMessage');
    const acceptBtn = document.getElementById('sharedConfirmAccept');
    const cancelBtn = document.getElementById('sharedConfirmCancel');

    if (!overlay || !titleEl || !messageEl || !acceptBtn || !cancelBtn) {
        return Promise.resolve(false);
    }

    titleEl.textContent = title;
    messageEl.textContent = message;
    acceptBtn.textContent = acceptText;
    cancelBtn.textContent = cancelText;

    overlay.classList.add('active');
    overlay.setAttribute('aria-hidden', 'false');

    return new Promise((resolve) => {
        const hideOverlay = (result) => {
            overlay.classList.remove('active');
            overlay.setAttribute('aria-hidden', 'true');
            acceptBtn.removeEventListener('click', onAccept);
            cancelBtn.removeEventListener('click', onCancel);
            overlay.removeEventListener('click', onOverlayClick);
            resolve(result);
        };

        const onAccept = () => hideOverlay(true);
        const onCancel = () => hideOverlay(false);
        const onOverlayClick = (event) => {
            if (event.target === overlay) {
                hideOverlay(false);
            }
        };

        acceptBtn.addEventListener('click', onAccept);
        cancelBtn.addEventListener('click', onCancel);
        overlay.addEventListener('click', onOverlayClick);
    });
};

window.toggleLoading = function (show, text = 'Cargando...') {
    const overlay = document.getElementById('sharedLoadingOverlay');
    const loadingText = document.getElementById('sharedLoadingText');
    if (!overlay || !loadingText) return;

    if (show) {
        loadingText.textContent = text;
        overlay.classList.add('active');
        overlay.setAttribute('aria-hidden', 'false');
    } else {
        overlay.classList.remove('active');
        overlay.setAttribute('aria-hidden', 'true');
    }
};

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('whatsappToggle');
    if (btn) {
        btn.addEventListener('click', window.toggleWhatsAppMenu);
    }

    const modal = document.getElementById('productDetailModal');
    if (modal) {
        modal.addEventListener('show.bs.modal', (event) => {
        const button = event.relatedTarget;
        if (!button) return;

        const title = document.getElementById('productDetailTitle');
        const subtitle = document.getElementById('productDetailSubtitle');
        const description = document.getElementById('productDetailDescription');
        const image = document.getElementById('productDetailImage');
        const specs = document.getElementById('productDetailSpecs');
        const quoteLink = document.getElementById('productQuoteLink');

        if (title) {
            title.textContent = button.getAttribute('data-product-title') || 'Producto';
        }
        if (subtitle) {
            subtitle.textContent = button.getAttribute('data-product-subtitle') || '';
        }
        if (description) {
            description.textContent = button.getAttribute('data-product-description') || '';
        }
        if (image) {
            image.src = button.getAttribute('data-product-image') || 'assets/img/products/howo-t7h.png';
            image.alt = button.getAttribute('data-product-title') || 'Producto';
        }
        if (specs) {
            const rawSpecs = button.getAttribute('data-product-specs') || '[]';
            let parsedSpecs = [];
            try {
                parsedSpecs = JSON.parse(rawSpecs);
            } catch (error) {
                parsedSpecs = [];
            }
            specs.innerHTML = parsedSpecs
                .map((item) => `<span><i class="fa-solid fa-circle-check"></i> ${item}</span>`)
                .join('');
        }
        if (quoteLink) {
            const whatsappText = button.getAttribute('data-product-whatsapp') || `Hola, quiero cotizar el ${button.getAttribute('data-product-title') || 'producto'}.`;
            const encoded = encodeURIComponent(whatsappText);
            quoteLink.href = `https://wa.me/51999999999?text=${encoded}`;
        }
        });
    }

    const loginAccessButton = document.getElementById('loginAccessButton');
    if (loginAccessButton) {
        loginAccessButton.addEventListener('click', async (event) => {
            event.preventDefault();

            const confirmed = await window.requestConfirm({
                title: 'Acceder',
                message: '¿Deseas abrir la ventana de inicio de sesión?',
                acceptText: 'Sí, abrir',
                cancelText: 'Cancelar'
            });

            if (!confirmed) return;

            const loginModalEl = document.getElementById('loginModal');
            if (loginModalEl) {
                const bsModal = bootstrap.Modal.getOrCreateInstance(loginModalEl);
                bsModal.show();
            }
        });
    }

    const loginForm = document.querySelector('.login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            const user = document.getElementById('loginUser');
            const password = document.getElementById('loginPassword');
            const username = user ? user.value.trim() : '';
            const passwordValue = password ? password.value.trim() : '';

            if (!username || !passwordValue) {
                window.showToast('Completa usuario y contraseña.', 'error');
                return;
            }

            const confirmed = await window.requestConfirm({
                title: 'Iniciar sesión',
                message: `¿Deseas iniciar sesión como ${username}?`,
                acceptText: 'Continuar',
                cancelText: 'Cancelar'
            });

            if (!confirmed) return;

            window.toggleLoading(true, 'Verificando credenciales...');
            setTimeout(() => {
                window.toggleLoading(false);
                const loginModalEl = document.getElementById('loginModal');
                if (loginModalEl) {
                    const bsModal = bootstrap.Modal.getInstance(loginModalEl);
                    if (bsModal) {
                        bsModal.hide();
                    }
                }
                window.showToast('Sesión iniciada correctamente.', 'success');
            }, 1300);
        });
    }
});