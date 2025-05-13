
// Alternar entre modo claro e escuro
document.getElementById('theme-toggle').addEventListener('click', function () {
    const body = document.body;
    const navbar = document.querySelector('.navbar');
    body.classList.toggle('dark-mode');
    navbar.classList.toggle('dark-mode');

    // Alterar o texto do botão
    this.textContent = body.classList.contains('dark-mode') ? 'Modo Claro' : 'Modo Escuro';
});
