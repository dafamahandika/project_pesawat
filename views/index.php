<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Rute Penerbangan Pesawat</title>
    
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../public/assets/css/style.css" rel="stylesheet">
    <style>
        .table-custom thead th {
            background-color: blue;
            color: white;
        }

        .table-custom tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

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
    <!-- Form -->
    <div class="container contact-form">
        <!-- Contact Image -->
        <div class="contact-image">
            <img src="../public/assets/img/travel.png" alt="Travel Image"/>
        </div>
        <?php
        include('../app/app.php');
        ?>
        <!-- Contact Form -->
        <form action="" method="">
            <h3>Pendaftaran Rute Penerbangan</h3>
            
            <!-- Form Content -->
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Nama Maskapai -->
                    <div class="form-group">
                        <label for="nama">Maskapai</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Maskapai" required>
                    </div>
                    
                    <!-- Bandara Asal dan Bandara Tujuan -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="asal">Bandara Asal</label>
                                <select name="bandara=_asal" id="asal" class="form-control" required>
                                    <?php
                                    $data = getBandaraAsal();
                                    foreach ($data as $dt){
                                        echo "<option value="."$dt[nama_bandara]".">".$dt['nama_bandara']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col">
                                <label for="tujuan">Bandara Tujuan</label>
                                <select name="tujuan" id="tujuan" class="form-control" required>
                                    <?php
                                    $data = getBandaraTujuan();
                                    foreach ($data as $dt){
                                        echo "<option value="."$dt[nama_bandara]".">".$dt['nama_bandara']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Harga Tiket -->
                    <div class="form-group mt-5">
                        <label for="harga">Harga Tiket</label>
                        <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga Tiket" required>
                    </div>
                </div>
            </div>
            
            <!-- Tombol Kirim -->
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center mt-5">
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btn btn-primary btnContact" value="Kirim">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End form -->

    <!-- Tabel -->
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Rute Tersedia</h2>
        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th scope="col">Maskapai</th>
                    <th scope="col">Asal Penerbangan</th>
                    <th scope="col">Tujuan Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Pajak</th>
                    <th scope="col">Total Harga Tiket</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Adam AIR</th>
                    <td>Soekarno-Hatta (CGK)</td>
                    <td>CEO</td>
                    <td>45</td>
                    <td>New York</td>
                    <td>New York</td>
                </tr>
                <tr>
                    <th scope="row">Air Asia</th>
                    <td>Juanda (SUB)</td>
                    <td>CTO</td>
                    <td>38</td>
                    <td>San Francisco</td>
                    <td>San Francisco</td>
                </tr>
                <tr>
                    <th scope="row">Batik</th>
                    <td>Husein Sastranegara (BDO)</td>
                    <td>CFO</td>
                    <td>50</td>
                    <td>Chicago</td>
                    <td>Chicago</td>
                </tr>
                <tr>
                    <th scope="row">Batik AIR</th>
                    <td>Soekarno-Hatta (CGK)</td>
                    <td>COO</td>
                    <td>42</td>
                    <td>Los Angeles</td>
                    <td>Los Angeles</td>
                </tr>
                <tr>
                    <th scope="row">Citilink</th>
                    <td>Soekarno-Hatta (CGK)</td>
                    <td>COO</td>
                    <td>42</td>
                    <td>Los Angeles</td>
                    <td>Los Angeles</td>
                </tr>
                <tr>
                    <th scope="row">Garuda Indonesia</th>
                    <td>Soekarno-Hatta (CGK)</td>
                    <td>COO</td>
                    <td>42</td>
                    <td>Los Angeles</td>
                    <td>Los Angeles</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <!-- JavaScript untuk validasi input harga hanya angka -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var hargaInput = document.getElementById('harga');

            hargaInput.addEventListener('input', function() {
                // Hapus semua karakter kecuali angka
                this.value = this.value.replace(/\D/g, '');
            });

            var form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                // Validasi saat form disubmit
                if (!/^\d+$/.test(hargaInput.value)) {
                    alert('Harga tiket harus berupa angka.');
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

