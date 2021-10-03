<html>
    <head>
        <title>Pemesanan Tiket Cinema 99</title>
    </head>
    <body>
        <center>
        <form action="<?= base_url('Cinema/output'); ?>" method="post">
            <table>
                <tr>
                    <h1>
                        Pemesanan Tiket Cinema 99
                    </h1>
                </tr>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>:</th>
                    <td>
                        <Input type="text" name="nama">
                    </td>
                </tr>
                <tr>
                    <th align="left">Judul Film</th>
                    <th>:</th>
                    <td>
                        <select name="judul">
                            <option value="">~Pilih~</option>
                            <option>Parasite</option>
                            <option>Hereditary</option>
                            <option>The Closet</option>
                            <option>Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>
                <tr align="left" >
                    <th>Pukul</th>
                    <th>:</th>
                    <td>
                        <input type="radio" name="jam" value="14.20">14.20
                        <input type="radio" name="jam" value="15.40">15.40
                        <input type="radio" name="jam" value="16.40">16.40
                    </td>
                </tr>
                <tr align="left" >
                    <th>Tipe Studio</th>
                    <th>:</th>
                    <td>

                        <input name="tipe" type="radio" value="Reguler 2D">Reguler 2D
                        <input name="tipe" type="radio" value="3D">3D
                        <input name="tipe" type="radio" value="Velvet">Velvet
                    </td>
                </tr>
                <tr align="left">
                    <th>Jumlah Pesan</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="jumlah">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Hitung">
                        <Input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>