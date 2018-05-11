<form method="post" accept-charset="utf-8" id="nadaft-kpr-simulation-form">
    <h1 class="text-center">Simulasi KPR</h1>
    <div class="input-container">
        <div class="input-group">
            <p>Harga Properti</p>
            <input id="kprPrice" class="input-kpr" type="text" min="1" value="195000000" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true">
        </div>
        <div class="input-group">
            <p>Jangka Waktu (Tahun)</p>
            <input id="kprDuration" class="input-kpr" type="number" min="1" value="10">
        </div>
        <div class="input-group">
            <p>Bunga (%)</p>
            <input id="kprInterest" class="input-kpr" type="number" step="any" min="1" value="8.0">
        </div>
        <div class="input-group">
            <button class="btn btn-kpr" type="submit">Hitung</button>
        </div>
        <div class="show-installment">
            <p>Angsuran per Bulan</p>
            <h6 id="kprInstallment" class="kpr-installment">Rp. 0</h6>
        </div>
    </div>
</form>