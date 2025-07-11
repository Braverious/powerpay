<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            width: 320px;
            /* Lebar struk thermal printer */
            margin: 0 auto;
        }

        .container {
            padding: 10px;
        }

        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header h3,
        .header p {
            margin: 0;
        }

        hr {
            border: none;
            border-top: 1px dashed #000;
            margin: 10px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 3px 0;
        }

        .label {
            width: 120px;
        }

        .value {
            text-align: right;
        }

        .total-label {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h3>STRUK PEMBAYARAN TAGIHAN</h3>
            <p>POWERPAY</p>
        </div>
        <hr>
        <table>
            <tr>
                <td class="label">NO. TAGIHAN</td>
                <td class="value"><?= $bill->id_tagihan ?></td>
            </tr>
            <tr>
                <td class="label">TGL CETAK</td>
                <td class="value"><?= date('d/m/Y H:i') ?></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="label">NAMA PELANGGAN</td>
                <td class="value"><?= strtoupper($bill->nama_pelanggan) ?></td>
            </tr>
            <tr>
                <td class="label">NOMOR KWH</td>
                <td class="value"><?= $bill->nomor_kwh ?></td>
            </tr>
            <tr>
                <td class="label">PERIODE</td>
                <td class="value"><?= strtoupper(MonthToString($bill->bulan)) ?> <?= $bill->tahun ?></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td class="label">JUMLAH METER</td>
                <td class="value"><?= $bill->jumlah_meter ?> kWh</td>
            </tr>
            <tr>
                <td class="label">TAGIHAN</td>
                <td class="value"><?= $total_bill ?></td>
            </tr>
            <tr>
                <td class="label">BIAYA ADMIN</td>
                <td class="value"><?= $admin_fee ?></td>
            </tr>
            <tr class="total">
                <td class="label total-label">TOTAL BAYAR</td>
                <td class="value total-label"><?= $total_pay ?></td>
            </tr>
        </table>
        <hr>
        <div class="footer">
            <p>TERIMA KASIH</p>
            <hr>
            <p>Muhammad Raihan Hadianto (C)</p>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>