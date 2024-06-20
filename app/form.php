<?php
if(isset($_POST['submit'])){
     // membaca file json bandara_asal.json dan bandara_tujuan.json
     $bandara_asal_json = file_get_contents('../data/bandara_asal.json',true);
     $bandara_tujuan_json = file_get_contents('../data/bandara_tujuan.json',true);

     // mengubah json menjadi array
     $data_bandara_asal = json_decode($bandara_asal_json, true);
     $data_bandara_tujuan = json_decode($bandara_tujuan_json, true);

     $bandara_tujuan = $_POST['bandara_tujuan'];
     $bandara_asal = $_POST['bandara_asal'];

     $pajak_bandara_tujuan = array_search($bandara_tujuan, $data_bandara_tujuan['data']);
     echo $pajak_bandara_tujuan;
     echo "<p>Bandara Asal: " . htmlspecialchars($bandara_asal) . "</p>";
     echo "<p>Bandara Tujuan: " . htmlspecialchars($bandara_tujuan) . "</p>";
}
?>