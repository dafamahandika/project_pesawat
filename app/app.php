<?php
// membaca file json bandara_asal.json dan bandara_tujuan.json
$bandara_asal_json = file_get_contents('../data/bandara_asal.json',true);
$bandara_tujuan_json = file_get_contents('../data/bandara_tujuan.json',true);

// mengubah json menjadi array
$data_bandara_asal = json_decode($bandara_asal_json, true);
$data_bandara_tujuan = json_decode($bandara_tujuan_json, true);

global $data_bandara_tujuan;

// function untuk return array bandara_asal
function getBandaraAsal(){
     global $data_bandara_asal;
     return $data_bandara_asal['data'];
}
// function untuk return array bandara_tujuan
function getBandaraTujuan(){
     global $data_bandara_tujuan;
     return $data_bandara_tujuan['data'];
}
?>