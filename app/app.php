<?php
$bandara_asal_json = file_get_contents('../data/bandara_asal.json',true);
$bandara_tujuan_json = file_get_contents('../data/bandara_tujuan.json',true);

$data_bandara_asal = json_decode($bandara_asal_json, true);
$data_bandara_tujuan = json_decode($bandara_tujuan_json, true);

global $data_bandara_tujuan;

function getBandaraAsal(){
     global $data_bandara_asal;
     return $data_bandara_asal['data'];
}
function getBandaraTujuan(){
     global $data_bandara_tujuan;
     return $data_bandara_tujuan['data'];
}
?>