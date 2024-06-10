<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "Arial Black", arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Apotek Kesehatan Sejahtera</h1></center>
    <h3>Tabel Apoteker</h3>
    <table>
        <thead>
            <tr>
                <th>ID Apoteker</th>
                <th>Nama</th>
                <th>Spesialisasi</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM apoteker';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_apoteker'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['spesialisasi'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Detail Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Obat</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM detail_transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi'] ?></td>
                    <td><?php echo $row['id_obat'] ?></td>
                    <td><?php echo $row['jumlah'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Nama Asuransi</th>
                <th>Nomor Polis</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_pelanggan'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['alamat'] ?></td>
                    <td><?php echo $row['tgl_lahir'] ?></td>
                    <td><?php echo $row['no_telp'] ?></td>
                    <td><?php echo $row['Nama_Asuransi'] ?></td>
                    <td><?php echo $row['Nomor_Polis'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Obat</h3>
    <table>
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM obat';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_obat'] ?></td>
                    <td><?php echo $row['nama_obat'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>ID Apoteker</th>
                <th>Tanggal Transaksi</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi'] ?></td>
                    <td><?php echo $row['id_pelanggan'] ?></td>
                    <td><?php echo $row['id_apoteker'] ?></td>
                    <td><?php echo $row['tgl_transaksi'] ?></td>
                    <td><?php echo $row['total_biaya'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>