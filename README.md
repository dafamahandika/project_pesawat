#  ✈Website Pendaftaran Rute Penerbangan Pesawat
Selamat datang di Website Pendaftaran Rute Penerbangan Pesawat. Platform ini dirancang untuk membantu maskapai penerbangan dan agen perjalanan dalam mengelola dan mendaftarkan rute penerbangan. Dengan situs web ini, pengguna dapat dengan mudah menginput informasi penting seperti maskapai, bandara asal, bandara tujuan, harga tiket, dan pajak bandara. Sistem kami akan menghitung total harga tiket termasuk pajak, sehingga memudahkan pengelolaan dan transparansi harga.
## 🌟 Fitur Utama

##### Input Maskapai:  
- Pengguna dapat memasukkan nama maskapai yang mengoperasikan penerbangan.
##### Bandara Asal:  
- Pengguna dapat memasukkan nama bandara asal. Informasi ini digunakan untuk menentukan titik awal penerbangan.
##### Bandara Tujuan:  
- Pengguna dapat memasukkan nama bandara tujuan. Informasi ini digunakan untuk menentukan titik akhir penerbangan.
##### Harga Tiket:  
- Pengguna dapat memasukkan harga tiket penerbangan. Harga ini akan digunakan sebagai basis untuk perhitungan total harga tiket termasuk pajak.
##### Pajak Bandara:  
- Sistem memungkinkan input pajak bandara asal dan tujuan, yang akan ditambahkan ke harga tiket untuk mendapatkan total harga yang harus dibayar oleh penumpang.
##### Total Harga Tiket:  
- Setelah semua informasi dimasukkan, sistem akan secara otomatis menghitung total harga tiket termasuk pajak bandara, sehingga memudahkan proses penetapan harga dan transparansi kepada pelanggan


## 🛠️ Teknologi

Teknologi yang digunakan dalam pembuatan website ini yaitu:

- [Boostrap] - Untuk tampilan website
- [json] - Penyimpanan data 
- [php] - Pengembangan website.


## 📋 Cara Menggunakan
###### 1. Akses Website: Buka Website Pendaftaran Rute Penerbangan di browser Anda.
###### 2.  Isi Formulir: Lengkapi formulir dengan rincian yang diperlukan:
- Maskapai: Masukkan nama maskapai yang mengoperasikan penerbangan.
- Bandara Asal: Masukkan kode IATA atau nama bandara asal.
- Bandara Tujuan: Masukkan kode IATA atau nama bandara tujuan.
- Harga Tiket: Masukkan harga tiket dalam mata uang yang diinginkan.
- Pajak Bandara Asal: Masukkan pajak bandara asal.
 - Pajak Bandara Tujuan: Masukkan pajak bandara tujuan.
###### 3.  Submit Formulir: Klik tombol "Submit" untuk mendaftarkan rute penerbangan.
###### 4. Lihat Total Harga: Total harga tiket yang sudah ditambahkan dengan pajak bandara asal dan tujuan akan ditampilkan.

## Contoh Penggunaan

Berikut adalah contoh pengisian formulir:

- Maskapai: Contoh Airlines
- Bandara Asal: CGK (Soekarno-Hatta International Airport)
- Bandara Tujuan: DPS (Ngurah Rai International Airport)
- Harga Tiket: Rp 1.500.000
- Pajak Bandara Asal: Rp 50.000
- Pajak Bandara Tujuan: Rp 60.000

Total harga tiket: Rp 1.610.000

## Instalasi 
- Unduh dan instal PHP 7.4.33.

- Verifikasi instalasi

```sh
php -v
```

## Hierarki Folder 
Berikut adalah Struktur direktori projek ini: 
```sh
POJECT_PESAWAT/
├── app/
│   ├── app.php
├── data/
|  ├── bandara_asal.json
│  ├── bandara_tujuan.json
|  ├── rute_penerbangan.json
├── views
│   └── index.php
└── README.md

```

## Created by 
Kelompok 3 :
- Dafa Mahandika
- Muhammad Nurrasya
- Muchamad Raifan
- Alifya Adinda Zikra
- Erina Febrianti