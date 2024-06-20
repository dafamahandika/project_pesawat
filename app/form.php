<?php
if(isset($_POST['submit'])){
     $bandara_tujuan = $_POST['bandara_tujuan'];
     $bandara_asal = $_POST['bandara_asal'];
     echo "<p>Bandara Asal: " . htmlspecialchars($bandaraAsal) . "</p>";
     echo "<p>Bandara Tujuan: " . htmlspecialchars($bandaraTujuan) . "</p>";
}
?>