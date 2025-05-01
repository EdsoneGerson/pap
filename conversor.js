// Mapeamento das moedas para seus símbolos
const simbolosMoedas = {
    EUR: "€",   // Euro
    BRL: "R$",   // Real Brasileiro
    USD: "$",   // Dólar Americano
    CHF: "CHF", // Franco Suíço
    GBP: "£",   // Libra Esterlina
    AUD: "A$",  // Dólar Australiano
    CAD: "C$",  // Dólar Canadense
    SGD: "S$",  // Dólar de Cingapura
    NZD: "NZ$", // Dólar Neozelandês
    SEK: "kr",  // Coroa Sueca
    NOK: "kr",  // Coroa Norueguesa
    DKK: "kr",  // Coroa Dinamarquesa
    HKD: "HK$", // Dólar de Hong Kong
    INR: "₹",   // Rupia Indiana
    KRW: "₩",   // Won Sul-Coreano
    JPY: "¥",   // Iene Japonês
    CNY: "¥",   // Yuan Chinês
    KWD: "د.ك", // Dinar Kuwaitiano
    BHD: "د.ب", // Dinar Bahreiniano
    OMR: "ر.ع.", // Rial Omaniano
    QAR: "ر.ق", // Rial Qatarense
    SAR: "ر.س", // Rial Saudita
    AED: "د.إ", // Dirham dos Emirados Árabes Unidos
    MYR: "RM",  // Ringgit Malaio
    ZAR: "R",   // Rand Sul-Africano
};

// Função para trocar as moedas de origem e destino
function trocarMoedas() {
    var moedaOrigem = document.getElementById('from_currency');
    var moedaDestino = document.getElementById('to_currency');

    // Troca os valores dos selects
    var temp = moedaOrigem.value;
    moedaOrigem.value = moedaDestino.value;
    moedaDestino.value = temp;

    // Atualiza a conversão após a troca
    converterMoeda();
}

// Função que busca a taxa de câmbio e atualiza o resultado automaticamente
function converterMoeda() {
    const de = document.getElementById("from_currency").value;
    const para = document.getElementById("to_currency").value;
    const quantia = document.getElementById("amount").value;

    if (!quantia || quantia <= 0) {
        document.getElementById("converted").value = "";
        return;
    }

    document.getElementById("converted").value = "Carregando...";

    const apiKey = "b1b2e184880a198eea5a4c2d";  // Substitua com a sua chave
    const url = `https://v6.exchangerate-api.com/v6/${apiKey}/pair/${de}/${para}/${quantia}`;

    console.log(`Consultando URL: ${url}`);

    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error("Falha ao acessar a API, status: " + response.status);
            }
            return response.json();
        })
        .then(data => {
            if (data.conversion_result !== undefined) {
                document.getElementById("erro").classList.add("d-none");
                const valorFormatado = data.conversion_result
                    .toFixed(2)
                    .replace('.', ',')
                    .replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                document.getElementById("converted").value = `${simbolosMoedas[para]} ${valorFormatado}`;
            } else {
                throw new Error("Resultado não encontrado na resposta da API.");
            }
        })
        .catch(error => {
            console.error("Erro ao converter moeda:", error);
            document.getElementById("erro").classList.remove("d-none");
            document.getElementById("erro").innerText = "Erro ao realizar a conversão. Tente novamente mais tarde.";
            document.getElementById("converted").value = "";
        });
}

//  Conversão automática ao digitar ou mudar seleção
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("amount").addEventListener("input", converterMoeda);
    document.getElementById("from_currency").addEventListener("change", converterMoeda);
    document.getElementById("to_currency").addEventListener("change", converterMoeda);
});
