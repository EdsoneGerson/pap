(function($) {
    $.extend($.validator.messages, {
        required: "Campo de preenchimento obrigat&oacute;rio.",
        remote: "Por favor, corrija este campo.",
        email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
        url: "Por favor, introduza um URL v&aacute;lido.",
        date: "Por favor, introduza uma data v&aacute;lida.",
        dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
        number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
        digits: "Por favor, introduza apenas d&iacute;gitos.",
        creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
        equalTo: "Por favor, introduza de novo o mesmo valor.",
        extension: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
        maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
        minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
        rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
        range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
        max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
        min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}."),
    });

    calc_moneylab();

    $('#calc').click(function() {
        calc_moneylab();
    });

    $('.calc_form input').keyup(function() {
        calc_moneylab();
    });

    function calc_moneylab() {
        var validator = $(".calc_form").validate({
            rules: {
                valor: {
                    required: true,
                    number: true
                },
                montante: {
                    required: true,
                    number: true
                },
                anos: {
                    required: true,
                    number: true
                },
                taxa: {
                    required: true,
                    number: true
                }
            }
        });
        var valid = validator.form();

        if (valid) {
            var valor = $('#valor').val();
            var montante = $('#montante').val();
            var anos = $('#anos').val();
            var taxa = $('#taxa').val();
            var total = PMT(taxa / 1200, anos * 12, valor, -montante);

            $("#poupanca").text(total.toLocaleString("pt-PT", {
                maximumFractionDigits: 2
            }) + " €");
        } else {
            $("#poupanca").text("-");
        }
    }

    function PMT(rate, nperiod, pv, fv, type) {
        if (!fv)
            fv = 0;

        if (!type)
            type = 0;

        if (rate == 0)
            return -(pv + fv) / nperiod;

        var pvif = Math.pow(1 + rate, nperiod);
        var pmt = rate / (pvif - 1) * -(pv * pvif + fv);

        if (type == 1) {
            pmt /= (1 + rate);
        }

        return pmt; 
    }

})(jQuery);