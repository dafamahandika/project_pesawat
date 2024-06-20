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
if (isset($_POST['submit'])) {
    $bandaraAsal = $_POST['bandara_asal'];
    $bandaraTujuan = $_POST['bandara_tujuan'];
    echo "<p>Bandara Asal: " . htmlspecialchars($bandaraAsal) . "</p>";
    echo "<p>Bandara Tujuan: " . htmlspecialchars($bandaraTujuan) . "</p>";
}
?>
</body>
</html>
