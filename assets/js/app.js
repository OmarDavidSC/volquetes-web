window.toggleWhatsAppMenu = function (event) {
    if (event) event.preventDefault();

    const btn = document.getElementById('whatsappToggle');
    const options = document.getElementById('whatsappOptions');

    if (!btn || !options) return;

    btn.classList.toggle('active');
    options.classList.toggle('active');
    btn.setAttribute('aria-expanded', String(btn.classList.contains('active')));
};

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('whatsappToggle');
    if (!btn) return;

    btn.addEventListener('click', window.toggleWhatsAppMenu);
});