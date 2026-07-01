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
    if (!btn) return;

    btn.addEventListener('click', window.toggleWhatsAppMenu);
});