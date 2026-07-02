document.addEventListener('DOMContentLoaded', () => {
    const wizardSteps = document.querySelectorAll('#wizardSteps .step');
    const wizardPanels = document.querySelectorAll('.wizard-panel');
    const wizardOptions = document.querySelectorAll('.wizard-option');
    const btnBack = document.getElementById('wizardBack');
    const btnNext = document.getElementById('wizardNext');
    const btnSubmit = document.getElementById('wizardSubmit');
    const wizardProductSelectGroup = document.getElementById('wizardProductSelectGroup');
    const wizardProductSelect = document.getElementById('wizardProductSelect');
    const wizardProgressLine = document.getElementById('wizardProgressLine');

    const reviewOption = document.getElementById('reviewOption');
    const reviewProduct = document.getElementById('reviewProduct');
    const reviewName = document.getElementById('reviewName');
    const reviewPhone = document.getElementById('reviewPhone');
    const reviewEmail = document.getElementById('reviewEmail');
    const reviewMessage = document.getElementById('reviewMessage');

    const nameInput = document.getElementById('wizardName');
    const phoneInput = document.getElementById('wizardPhone');
    const emailInput = document.getElementById('wizardEmail');
    const messageInput = document.getElementById('wizardMessage');

    let currentStep = 1;
    let selectedOption = null;
    let selectedProduct = null;
    const totalSteps = 3;

    const products = [
        {
            title: 'HOWO T7H',
            category: 'Volquete 6x4',
            image: 'assets/img/products/howo-t7h.png'
        },
        {
            title: 'SHACMAN X3000',
            category: 'Minero',
            image: 'assets/img/products/shacman-x3000.png'
        },
        {
            title: 'HOWO MAX',
            category: 'Alta eficiencia',
            image: 'assets/img/products/sinotruk-max.png'
        },
        {
            title: 'AUMAN GTL',
            category: 'Logístico',
            image: 'assets/img/products/foton-auman.png'
        }
    ];

    function setActiveStep(step) {
        currentStep = step;
        wizardSteps.forEach((tab) => {
            const tabStep = Number(tab.dataset.step);
            tab.classList.toggle('active', tabStep === step);
            tab.classList.toggle('current', tabStep === step);
            tab.classList.toggle('completed', tabStep < step);
        });
        wizardPanels.forEach((panel) => {
            panel.classList.toggle('active', Number(panel.dataset.panel) === step);
        });
        btnBack.disabled = step === 1;
        btnNext.textContent = step === 3 ? 'Finalizar' : 'Siguiente';
        if (wizardProgressLine) {
            const progressPercent = totalSteps > 1 ? Math.round(((step - 1) / (totalSteps - 1)) * 100) : 0;
            wizardProgressLine.style.setProperty('--wizard-progress', `${progressPercent}%`);
        }
    }

    function updateStepStatus(step, completed = false) {
        wizardSteps.forEach((tab) => {
            const tabStep = Number(tab.dataset.step);
            tab.classList.toggle('completed', completed && tabStep < step);
            tab.classList.toggle('current', tabStep === step);
        });
    }

    function updateWizardContent() {
        if (!selectedOption) return;

        reviewOption.textContent = selectedOption === 'recuperar' ? 'Recuperar contraseña' :
            selectedOption === 'soporte' ? 'Dar soporte' : 'Cotizar';

        const messagePlaceholder = selectedOption === 'recuperar'
            ? 'Ingresa tu correo y te ayudamos a recuperar el acceso.'
            : selectedOption === 'soporte'
                ? 'Cuéntanos tu problema y te contactaremos.'
                : 'Selecciona el producto y deja tu consulta para cotizar.';

        messageInput.placeholder = messagePlaceholder;
        btnNext.disabled = false;

        if (selectedOption === 'cotizar') {
            wizardProductSelectGroup.style.display = 'block';
            renderProducts();
        } else {
            wizardProductSelectGroup.style.display = 'none';
            selectedProduct = null;
        }
    }

    function renderProducts() {
        wizardProductSelect.innerHTML = '<option value="">Elige un producto</option>';
        products.forEach((product) => {
            const option = document.createElement('option');
            option.value = product.title;
            option.textContent = `${product.title} - ${product.category}`;
            option.dataset.image = product.image;
            wizardProductSelect.appendChild(option);
        });
    }

    function showToast(message, type = 'info') {
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
    }

    wizardOptions.forEach((option) => {
        option.addEventListener('click', () => {
            wizardOptions.forEach((btn) => btn.classList.remove('selected'));
            option.classList.add('selected');
            selectedOption = option.dataset.option;
            updateWizardContent();
            setActiveStep(2);
            updateStepStatus(2, true);
        });
    });

    wizardProductSelect.addEventListener('change', () => {
        const selectedValue = wizardProductSelect.value;
        selectedProduct = products.find((product) => product.title === selectedValue) || null;
    });

    btnBack.addEventListener('click', () => {
        if (currentStep > 1) {
            setActiveStep(currentStep - 1);
            updateStepStatus(currentStep - 1, true);
        }
    });

    btnNext.addEventListener('click', () => {
        if (currentStep === 1) {
            if (!selectedOption) {
                showToast('Elige un motivo para continuar.', 'error');
                return;
            }
            setActiveStep(2);
            updateStepStatus(2, true);
        } else if (currentStep === 2) {
            if (!nameInput.value || !phoneInput.value || !emailInput.value || !messageInput.value) {
                showToast('Por favor completa todos los campos.', 'error');
                return;
            }
            if (selectedOption === 'cotizar' && !selectedProduct) {
                showToast('Elige un producto para cotizar.', 'error');
                return;
            }
            reviewName.textContent = nameInput.value;
            reviewPhone.textContent = phoneInput.value;
            reviewEmail.textContent = emailInput.value;
            reviewMessage.textContent = messageInput.value;
            reviewProduct.textContent = selectedProduct ? selectedProduct.title : 'No aplica';
            setActiveStep(3);
            updateStepStatus(3, true);
        } else {
            showToast('Solicitud enviada. Nos pondremos en contacto contigo pronto.', 'success');
            setTimeout(() => window.location.reload(), 1600);
        }
    });

    btnSubmit.addEventListener('click', () => {
        showToast('Solicitud enviada. Gracias.', 'success');
        setTimeout(() => window.location.reload(), 1600);
    });

    setActiveStep(1);
});
