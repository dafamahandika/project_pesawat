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
     <form action="" method="POST">
          <select name="bandara_asal">
               <?php
                 $data = getBandaraAsal();
                 foreach ($data as $dt){
                     echo "<option value='$dt[nama_bandara]'>".$dt['nama_bandara']."</option>";
                 }
               ?>
          </select>
          <button type="submit" name="submit">Submit</button>
     </form>
     <?php
     include '../app/form.php';
     ?>
</body>
</html>