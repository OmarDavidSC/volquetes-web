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

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('whatsappToggle');
    if (btn) {
        btn.addEventListener('click', window.toggleWhatsAppMenu);
    }

    const modal = document.getElementById('productDetailModal');
    if (!modal) return;

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
});