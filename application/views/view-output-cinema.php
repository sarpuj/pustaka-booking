<html>
    <head>
        <title>Pemesanan Tiket Cinema 99</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <h1>Pemesanan Tiket Cinema 99</h1>
                </tr>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>:</th>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Judul Film</th>
                    <th>:</th>
                    <td>
                        <?= $judul; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Pukul</th>
                    <th>:</th>
                    <td>
                        <?= $jam; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Tipe Studio</th>
                    <th>:</th>
                    <td>
                        <?= $tipe; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Jumlah Pesan</th>
                    <th>:</th>
                    <td>
                        <?= $jumlah; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Harga Tiket</th>
                    <th>:</th>
                    <td>
                        <?=$harga; ?>
                    </td>
                </tr>
                <tr align="left">
                    <th>Total</th>
                    <th>:</th>
                    <td>
                        <?=$total; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('Cinema');?>">Input Data Lagi</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>