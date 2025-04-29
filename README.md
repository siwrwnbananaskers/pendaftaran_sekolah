
# Pendaftaran Sekolah (PPDB Online)

**Pendaftaran Sekolah** adalah aplikasi web yang dirancang untuk memudahkan proses Penerimaan Peserta Didik Baru (PPDB) secara online. Aplikasi ini menyediakan fitur pendaftaran siswa baru, manajemen data pendaftar, dan dashboard admin untuk memantau proses seleksi.

## ✨ Fitur Utama

### 🧑‍🎓 Siswa / Pendaftar
- Formulir pendaftaran online.
- Upload berkas persyaratan (jika tersedia).
- Cetak bukti pendaftaran.
- Cek status pendaftaran.

### 🛠️ Admin / Panitia
- Login dan dashboard admin.
- Melihat dan memfilter data pendaftar.
- Verifikasi data dan update status pendaftaran.
- Export data ke Excel (opsional).

## 🗂️ Struktur Direktori

```bash
pendaftaran_sekolah/
│
├── index.php                # Halaman utama/formulir pendaftaran
├── login.php                # Halaman login admin
├── dashboard/               # Area admin
│   ├── dashboard.php
│   ├── data_pendaftar.php
│   ├── detail_pendaftar.php
│   └── verifikasi.php
│
├── proses/                  # Proses backend
│   ├── simpan_pendaftaran.php
│   ├── login.php
│   ├── verifikasi.php
│   └── hapus_data.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── uploads/             # Tempat penyimpanan file berkas siswa
│
└── db/
    └── koneksi.php          # File koneksi database
```

## 🛠️ Teknologi yang Digunakan

- **Frontend**: HTML, CSS (Bootstrap atau custom), JavaScript
- **Backend**: PHP Native
- **Database**: MySQL
- **Tools Pendukung**: XAMPP / LAMP untuk lokal development

## 💾 Cara Instalasi

1. **Clone repositori ini** atau ekstrak file `.zip`:
   ```bash
   git clone https://github.com/namauser/pendaftaran_sekolah.git
   ```

2. **Impor database**:
   - Buka `phpMyAdmin`
   - Buat database baru, contoh `ppdb_online`
   - Import file SQL dari direktori `/db/ppdb_online.sql`

3. **Konfigurasi database**:
   - Edit file `db/koneksi.php`:
     ```php
     $conn = new mysqli("localhost", "root", "", "ppdb_online");
     ```

4. **Jalankan aplikasi di localhost**:
   - Akses `http://localhost/pendaftaran_sekolah/index.php`

## 🔐 Login Admin Default

| Username | Password |
|----------|----------|
| admin    | admin123 |

> 💡 Tips: Segera ubah password setelah login pertama kali.

## 📌 Catatan Tambahan

- Tambahkan validasi input di sisi server dan klien untuk keamanan.
- Dapat dikembangkan dengan fitur pengumuman hasil seleksi online.
- Sistem role user bisa dikembangkan untuk multi-admin.
- Fitur kirim email konfirmasi pendaftaran dapat ditambahkan.

## 📄 Lisensi

Aplikasi ini dibuat untuk keperluan pembelajaran dan dapat digunakan bebas oleh sekolah atau lembaga pendidikan dengan atau tanpa modifikasi.

---

Jika Anda ingin saya menyesuaikan bagian struktur folder, nama database, atau file SQL secara spesifik berdasarkan isi file ZIP, saya bisa membukanya untuk Anda. Ingin saya bantu buka dan analisis isi file tersebut?
