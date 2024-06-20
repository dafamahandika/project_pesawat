<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Pendaftaran Rute Penerbangan Pesawat</title>
</head>
<?php
    include('../app/app.php');
?>
<body>
     <select>
          <?php
            $data = getBandaraAsal();
            foreach ($data as $dt){
                echo "<option>".$dt['nama_bandara']."</option>";
            }
          ?>
     </select>
</body>
</html>