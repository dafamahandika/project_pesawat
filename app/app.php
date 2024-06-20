<?php
// membaca file json bandara_asal.json dan bandara_tujuan.json
// Menggunakan file_get_contents untuk membaca isi file JSON
$bandara_asal_json = file_get_contents('../data/bandara_asal.json',true);
$bandara_tujuan_json = file_get_contents('../data/bandara_tujuan.json',true);

// Mengubah JSON menjadi array menggunakan json_decode
// Parameter kedua true untuk mengembalikan sebagai array asosiatif
$data_bandara_asal = json_decode($bandara_asal_json, true);
$data_bandara_tujuan = json_decode($bandara_tujuan_json, true);

global $data_bandara_tujuan;

// function untuk return array bandara_tujuan
function getBandaraAsal(){
     // Menggunakan variabel global untuk mengakses data bandara asal
     global $data_bandara_asal;
     // Mengembalikan array data bandara asal
     return $data_bandara_asal['data'];
}

// Fungsi untuk mendapatkan data bandara tujuan
function getBandaraTujuan(){
     global $data_bandara_tujuan;
     return $data_bandara_tujuan['data'];
}

// Fungsi untuk mendapatkan pajak dari bandara tertentu
// Parameter $nama_bandara adalah nama bandara yang dicari
// Parameter $data_bandara adalah array data bandara
function getPajakBandara($nama_bandara, $data_bandara) {
     // Loop melalui setiap data bandara dalam array
     foreach ($data_bandara['data'] as $bandara) {
          // Jika nama bandara sesuai dengan yang dicari, kembalikan nilai pajaknya
         if ($bandara['nama_bandara'] == $nama_bandara) {
             return $bandara['pajak'];
         }
     }
     // Jika tidak ditemukan, kembalikan 0
     return 0;
 }

 // Fungsi untuk menyimpan data rute penerbangan ke file JSON
 // Parameter $data adalah data rute penerbangan yang akan disimpan
 function saveToJSON($data) {
     $file = '../data/rute_penerbangan.json'; //mendefinisikan path file JSON tujuan
     $rute_data = json_decode(file_get_contents($file), true); // Membaca isi file JSON yang ada dan mengubahnya menjadi array
     $rute_data['data'][] = $data;
     file_put_contents($file, json_encode($rute_data, JSON_PRETTY_PRINT));
 }
?>