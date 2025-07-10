<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url("assets/listrik.png") ?>" />
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th,
        td {
            text-align: left;
        }

        .text-capitalize {
            text-transform: capitalize;
        }

        .fw-bold {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h2>Detail Tagihan #<?= $bill->id_tagihan ?></h2>
    <p>Dicetak pada: <?= date('d F Y, H:i:s') ?></p>
    <hr>

    <table>
        <tr>
            <td style="width: 40%;">Nama Pelanggan</td>
            <td class="text-capitalize"><?= $bill->nama_pelanggan ?></td>
        </tr>
        <tr>
            <td>Nomor KWH</td>
            <td><?= $bill->nomor_kwh ?></td>
        </tr>
        <tr>
            <td>Periode</td>
            <td><?= MonthToString($bill->bulan) ?> <?= $bill->tahun ?></td>
        </tr>
        <tr>
            <td>Jumlah Meter</td>
            <td><?= $bill->jumlah_meter ?> Kwh</td>
        </tr>
        <tr>
            <td>Total Tagihan</td>
            <td><?= $total_bill ?></td>
        </tr>
        <tr>
            <td>Biaya Admin</td>
            <td><?= $admin_fee ?></td>
        </tr>
        <tr class="fw-bold">
            <td>Total Pembayaran</td>
            <td><?= $total_pay ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td class="fw-bold">
                <?php
                if ($bill->status === "PAID") {
                    echo "LUNAS";
                } elseif ($bill->status === "PROCESSED") {
                    echo "DIPROSES";
                } else {
                    echo "BELUM LUNAS";
                }
                ?>
            </td>
        </tr>
    </table>
    <hr>
    <p class="footer-text text-center" style="text-align: center;">
        Payment powered by PowerPay - Muhammad Raihan Hadianto
    </p>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</body>

</html>