
function calculate() {
    // Obter valores do formulário
    const currentAmount = parseFloat(document.getElementById('currentAmount').value);
    const desiredAmount = parseFloat(document.getElementById('desiredAmount').value);
    const years = parseInt(document.getElementById('years').value);
    const rate = parseFloat(document.getElementById('rate').value) / 100;

    // Validar os valores
    if (isNaN(currentAmount) || isNaN(desiredAmount) || isNaN(years) || isNaN(rate) || currentAmount >= desiredAmount) {
        document.getElementById('result').innerText = 'Por favor, insira valores válidos.';
        return;
    }

    // Número de meses
    const months = years * 12;
    const monthlyRate = rate / 12;

    // Cálculo da poupança mensal
    const futureValue = desiredAmount - currentAmount * Math.pow(1 + monthlyRate, months);
    const monthlySavings = futureValue * monthlyRate / (Math.pow(1 + monthlyRate, months) - 1);

    // Formatar valor com separadores de milhares
    const formattedSavings = monthlySavings.toLocaleString("pt-PT", {
        style: "currency",
        currency: "EUR",
        minimumFractionDigits: 2,
    });

    // Exibir o resultado
    document.getElementById('result').innerText =
        `Você precisa poupar ${formattedSavings} por mês.`;
}
