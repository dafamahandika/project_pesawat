<?php
if(isset($_POST['submit'])){
     $bandara_tujuan = $_POST['bandara_tujuan'];
     $bandara_asal = $_POST['bandara_asal'];
     echo "<p>Bandara Asal: " . htmlspecialchars($bandara_asal) . "</p>";
     echo "<p>Bandara Tujuan: " . htmlspecialchars($bandara_tujuan) . "</p>";
}
?>