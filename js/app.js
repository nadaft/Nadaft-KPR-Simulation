jQuery(document).ready(function () {

    jQuery("#nadaft-kpr-simulation-form").on('submit', function(event){
        event.preventDefault();

        price = jQuery("#kprPrice").val();
        price = parseFloat(price.replace(/,/g, ''));

        duration = jQuery("#kprDuration").val();
        interest = jQuery("#kprInterest").val();

        installment = jQuery("#kprInstallment");

        cicilan_pokok = price / (duration * 12);

        bunga = (price * interest * 0.01) / 12;

        jml_cicilan = cicilan_pokok + bunga;

        jml_cicilan_format = accounting.formatNumber(jml_cicilan, 0, ",", ".");

        installment.text("Rp. " + jml_cicilan_format);
    });
});
