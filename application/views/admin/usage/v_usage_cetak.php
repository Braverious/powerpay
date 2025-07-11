<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url("assets/listrik.png") ?>" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        h2 {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 12px;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        @media print {

            /* Sembunyikan elemen yang tidak perlu dicetak */
            body * {
                visibility: hidden;
            }

            #section-to-print,
            #section-to-print * {
                visibility: visible;
            }

            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div id="section-to-print">
        <div class="header">
            <h2><?= $title ?></h2>
            <p>Tanggal Cetak: <?= date('d F Y') ?></p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID Penggunaan</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Meter Awal</th>
                    <th>Meter Akhir</th>
                    <th>Daya</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usages)) : ?>
                    <?php foreach ($usages as $u) : ?>
                        <tr>
                            <td><?php echo $u->id_penggunaan ?></td>
                            <td><?php echo $u->id_pelanggan ?></td>
                            <td><?php echo $u->nama_pelanggan ?></td>
                            <td><?php echo MonthToString($u->bulan) ?></td>
                            <td><?php echo $u->tahun ?></td>
                            <td><?php echo $u->meter_awal ?></td>
                            <td><?php echo $u->meter_akhir ?></td>
                            <td><?php echo $u->daya ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="8" style="text-align: center;">Data tidak ditemukan.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>

</body>

</html>