function formatEuro(value) {
    return new Intl.NumberFormat('pt-PT', {
        style: 'currency',
        currency: 'EUR',
        minimumFractionDigits: 2
    }).format(value);
}

function calculate() {
    const aporte = parseFloat(document.getElementById('aporte').value);
    const meses = parseInt(document.getElementById('meses').value);
    const taxa = parseFloat(document.getElementById('taxa').value) / 100;

    if (isNaN(aporte) || isNaN(meses) || isNaN(taxa)) {
        document.getElementById('result').innerHTML = "<p class='text-danger'>Preencha todos os campos corretamente.</p>";
        return;
    }

    const totalSemRendimento = aporte * meses;
    const totalComRendimento = aporte * ((Math.pow(1 + taxa, meses) - 1) / taxa);
    const diferenca = totalComRendimento - totalSemRendimento;

    document.getElementById('result').innerHTML = `
        <h3>Resultado:</h3>
        <p>Total poupado (sem rentabilidade): ${formatEuro(totalSemRendimento)}</p>
        <p>Total com rentabilidade de ${taxa * 100}% ao mês: ${formatEuro(totalComRendimento)}</p>
        <p>Diferença a mais pelo rendimento: ${formatEuro(diferenca)}</p>
    `;
}