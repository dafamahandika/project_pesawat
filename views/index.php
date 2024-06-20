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
        <a class="navbar-brand" href="#">Pesawat</a>
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
        <h2 class="mb-4">Daftar Rute Tersedia</h2>
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

        <h2 class="mt-5">Data Rute Penerbangan</h2>
        <table class="table table-hover table-custom">
            <thead>
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
                    include '../app/form.php';
                    if(isset($_POST['submit'])){
                        $nama_maskapai = $_POST['nama_maskapai'];
                        $bandara_asal = $_POST['bandara_asal'];
                        $bandara_tujuan = $_POST['bandara_tujuan'];
                        $harga_tiket = $_POST['harga_tiket'];

                        $pajak_asal = getPajakBandara($bandara_asal, $data_bandara_asal);
                        $pajak_tujuan = getPajakBandara($bandara_tujuan, $data_bandara_tujuan);
                        $total_pajak = $pajak_asal + $pajak_tujuan;
                        $total_harga = $harga_tiket + $total_pajak;

                        echo "<tr>
                                <td>$nama_maskapai</td>
                                <td>$bandara_asal</td>
                                <td>$bandara_tujuan</td>
                                <td>$harga_tiket</td>
                                <td>$pajak_asal</td>
                                <td>$pajak_tujuan</td>
                                <td>$total_pajak</td>
                                <td>$total_harga</td>
                              </tr>";

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
