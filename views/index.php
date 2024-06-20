<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container contact-form">
        <!-- Contact Image -->
        <div class="contact-image">
            <img src="../public/assets/img/travel.png" alt="Travel Image"/>
        </div>

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
                                <select name="asal" id="asal" class="form-control" required>
                                    <option value="CGK">Soekarno-Hatta (CGK)</option>
                                    <option value="BDO">Husein-Sastranegara (BDO)</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="tujuan">Bandara Tujuan</label>
                                <select name="tujuan" id="tujuan" class="form-control" required>
                                    <option value="DPS">Ngurah Rai (DPS)</option>
                                    <option value="BTJ">Sultan Iskandarmuda (BTJ)</option>
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
</html>
