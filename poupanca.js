document.addEventListener("DOMContentLoaded", function () {
    const calcBtn = document.getElementById("calc");
    const montanteInput = document.getElementById("montante");
    const mesesInput = document.getElementById("meses");
    const resultado = document.getElementById("poupanca");

    calcBtn.addEventListener("click", function () {
        const montante = parseFloat(montanteInput.value);
        const meses = parseInt(mesesInput.value);

        if (isNaN(montante) || isNaN(meses) || montante <= 0 || meses <= 0) {
            resultado.textContent = "Por favor, preencha os campos corretamente.";
            return;
        }

        const poupancaMensal = montante / meses;

        resultado.textContent = `Deverás poupar ${poupancaMensal.toLocaleString("pt-PT", {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        })} € por mês.`;
    });
});