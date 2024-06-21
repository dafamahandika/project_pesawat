<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rute Penerbangan Pesawat</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Rute Penerbangan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center">Pendaftaran Rute Penerbangan</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="nama_maskapai">Nama Maskapai</label>
                <input type="text" class="form-control" id="nama_maskapai" name="nama_maskapai" required>
            </div>
            <div class="form-group">
                <label for="bandara_asal">Bandara Asal</label>
                <select class="form-control" id="bandara_asal" name="bandara_asal" required>
                    <?php
                        include('../app/app.php');
                        $data_asal = getBandaraAsal();
                        foreach ($data_asal as $dt) {
                            echo "<option value='".$dt['nama_bandara']."'>".$dt['nama_bandara']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bandara_tujuan">Bandara Tujuan</label>
                <select class="form-control" id="bandara_tujuan" name="bandara_tujuan" required>
                    <?php
                        $data_tujuan = getBandaraTujuan();
                        foreach ($data_tujuan as $dt) {
                            echo "<option value='".$dt['nama_bandara']."'>".$dt['nama_bandara']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_tiket">Harga Tiket</label>
                <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <h2 class="mt-5 text-center">Data Rute Penerbangan</h2>
        <table class="table table-hover table-custom">
            <thead class="text-center">
                <tr>
                    <th scope="col">Maskapai</th>
                    <th scope="col">Asal Penerbangan</th>
                    <th scope="col">Tujuan Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Pajak Asal</th>
                    <th scope="col">Pajak Tujuan</th>
                    <th scope="col">Total Pajak</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_POST['submit'])){
                        $nama_maskapai = $_POST['nama_maskapai'];
                        $bandara_asal = $_POST['bandara_asal'];
                        $bandara_tujuan = $_POST['bandara_tujuan'];
                        $harga_tiket = $_POST['harga_tiket'];

                        $pajak_asal = getPajakBandara($bandara_asal, $data_bandara_asal);
                        $pajak_tujuan = getPajakBandara($bandara_tujuan, $data_bandara_tujuan);
                        $total_pajak = $pajak_asal + $pajak_tujuan;
                        $total_harga = $harga_tiket + $total_pajak;

                        
                        // Simpan data ke dalam file JSON
                        $rute_penerbangan = [
                            'nama_maskapai' => $nama_maskapai,
                            'bandara_asal' => $bandara_asal,
                            'bandara_tujuan' => $bandara_tujuan,
                            'harga_tiket' => $harga_tiket,
                            'pajak_asal' => $pajak_asal,
                            'pajak_tujuan' => $pajak_tujuan,
                            'total_pajak' => $total_pajak,
                            'total_harga' => $total_harga
                        ];
                        saveToJSON($rute_penerbangan);


                    }
                    $rute_penerbangan = getRutePenerbangan();
                    if($rute_penerbangan){
                        sort($rute_penerbangan);
                        foreach ($rute_penerbangan as $dt) {     
                            echo "<tr>";
                            echo    "<td class='text-center'>$dt[nama_maskapai]</td>";
                            echo    "<td class='text-center'>$dt[bandara_asal]</td>";
                            echo    "<td class='text-center'>$dt[bandara_tujuan]</td>";
                            echo    "<td class='text-center'>$dt[harga_tiket]</td>";
                            echo    "<td class='text-center'>$dt[pajak_asal]</td>";
                            echo    "<td class='text-center'>$dt[pajak_tujuan]</td>";
                            echo    "<td class='text-center'>$dt[total_pajak]</td>";
                            echo    "<td class='text-center'>$dt[total_harga]</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8' class='text-center'>Data rute penerbangan tidak ditemukan</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
