<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesawat</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
</body>

</html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pendaftaran Rute Penerbangan Pesawat</title>
</head>
<?php
    include('../app/app.php');
?>
<body>
<form method="post" action="">
    <h3>Bandara Asal</h3>
    <select name="bandara_asal">
        <?php
            $data = getBandaraAsal();
            foreach ($data as $dt){
                echo "<option value='".$dt['nama_bandara']."'>".$dt['nama_bandara']."</option>";
            }
        ?>
    </select>
    <br>
    <h3>Bandara Tujuan</h3>
    <select name="bandara_tujuan">
        <?php
            $data = getBandaraTujuan();
            foreach ($data as $dt){
                echo "<option value='".$dt['nama_bandara']."'>".$dt['nama_bandara']."</option>";
            }
        ?>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
include '../app/form.php';
?>
</body>
</html>
