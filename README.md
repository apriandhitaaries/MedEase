# MedEase (Medical Ease)

MedEase merupakan pendaftaran fasilitas kesehatan secara online yang dapat memberikan banyak manfaat bagi masyarakat, seperti mengurangi waktu tunggu dan antrian, mempercepat proses pendaftaran, serta mempermudah akses masyarakat ke fasilitas kesehatan. Selain itu, MedEase juga dapat membantu mengoptimalkan pelayanan kesehatan. Dengan adanya sistem pendaftaran online, petugas pendaftaran akan lebih mudah mengatur jadwal pasien dan mengoptimalkan waktu pelayanan. Hal ini akan memungkinkan pelayanan kesehatan menjadi lebih efisien dan efektif. Selain itu juga, MedEase ini memiliki keunggulan dibandingkan dengan Mobile JKN karena dapat digunakan oleh pasien baik yang menggunakan layanan BPJS maupun pasien umum.

Fitur-fitur (Front-end) yang ada pada aplikasi MedEase:
- Pendaftaran
  
  Pasien Pada fitur ini pasien dapat mendaftarkan diri ke puskesmas atau fasilitas kesehatan dengan tujuan mengumpulkan informasi penting mengenai data diri pasien dan keperluan medis, sehingga staff medis dapat memberikan perawatan yang sesuai dan efektif untuk pasien.
- Batal Daftar
  
  Pada fitur ini pasien dapat melakukan tindakan pembatalan atau penghapusan pendaftaran diri pada puskesmas atau fasilitas kesehatan.
- Cek Antrian
  
  Pada fitur ini pasien dapat melakukan tindakan memeriksa atau mengkonfirmasi nomor urut pasien dalam antrian atau daftar tunggu di puskesmas atau fasilitas kesehatan.
- Artikel
  
  Pada fitur ini pasien dapat membaca artikel kesehatan dan berita terupdate terkait dengan kesehatan.
- About Us
  
  Pada fitur ini berisikan informasi tentang pengembang, tujuan, visi, dan misi dari Website MedEase.

# UI Kit
| Color     | Hex     | 
| ---       | ---     | 
| Primary   | #0E5895 |
| Secondary | #1669AD |
| Neutral   | #FFFFFF |
| Error     | #DC3545 |

# Rancangan Basis Data
Tabel Data Pasien
| No  | Nama Kolom | Tipe Data | Panjang Data | Contoh Data |
|:--- | :---       | :---      | :---         | :---        |
|1    | id         | int       | 11           | 1           |
|2    | nama       | varchar   | 255          | 'Faishal'   |
|3    | nik        | varchar   | 255          | '1234567890'|

Tabel Data Pasiens(Daftar ke faskes)
| No  | Nama Kolom    | Tipe Data | Panjang Data | Contoh Data         |
|:--- | :---          | :---      | :---         | :---                |
|1    | id            | int       | 11           | 24                  |
|2    | poliklinik    | varchar   | 32           | '2'                 |
|3    | tanggal       | date      | -            | 2023-10-30          |
|4    | nomor_antrean | varchar   | 255          | '20231030005'       |
|5    | nik           | varchar   | 32           | '1234567890'        |
|6    | updated_at    | timestamp | -            | 2023-10-29 03:09:12 |
|7    | cretaed_at    | time      | -            | 10:09:12            |

Tabel User
| No  | Nama Kolom        | Tipe Data | Panjang Data | Contoh Data                 |
|:--- | :---              | :---      | :---         | :---                        |
|1    | id                | bigint    | 20           | 6                           |
|2    | name              | varchar   | 255          | 'Apriandhita Aries Prayoga' |            
|3    | email             | varchar   | 255          | 'apriandhitaaries@gmail.com'|
|4    | email_verified_at | timestamp | -            | NULL                        |
|5    | password          | varchar   | 255          | 'ghefirasm24'               |
|6    | remeber_token     | varchar   | 100          | NULL                        |
|7    | updated_at        | timestamp | -            | 2023-10-29 15:50:42         |
|8    | cretaed_at        | timestamp | -            | 2023-10-29 15:50:42         |

# Data Pasien Untuk Mendaftar
Gunakan NIK data pasien berikut jika anda ingin mendaftar ke dalam faskes MedEase:
| Id  | Nama Pasien      | NIK            | 
|:--- | :---             | :---           | 
|1    | Faishal          | 1234567890     | 
|2    | Resty            | 0987654321     | 
|3    | John Doe         | 1111111111     | 
|4    | Jane Doe         | 2222222222     | 
|5    | Bob Smith        | 3333333333     | 
|6    | Alice Johnson    | 4444444444     | 
|7    | Michael Brown    | 5555555555     | 
|8    | Emily Davis      | 6666666666     | 
|9    | William Wilson   | 7777777777     | 
|10   | Olivia Taylor    | 8888888888     | 
|11   | James Jones      | 9999999999     | 
|12   | Sophia Harris    | 1010101010     | 

# Pengembang Website MedEase (Medical Ease)
  - Faishal Fariz Hidayatullah (215150607111014)
  - Apriandhita Aries Prayoga  (215150607111019)
  - Resty Cahyani Pradita      (215150601111016)


