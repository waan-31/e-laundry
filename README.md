# 🧺 E-Londri — Sistem Manajemen & Kasir Laundry Digital

Aplikasi manajemen operasional dan sistem kasir *laundry* digital berbasis RESTful API. Proyek ini dirancang untuk mempermudah pencatatan transaksi kasir, pelacakan status pengerjaan cuci/setrika secara real-time, serta pengelolaan data pelanggan dan paket layanan.

---

## 📋 Daftar Isi
- [Struktur Tim & Pembagian Peran](#-struktur-tim--pembagian-peran)
- [Arsitektur & Teknologi](#-arsitektur--teknologi)
- [Struktur Basis Data & ERD](#-struktur-basis-data--erd)
- [Panduan Instalasi & Konfigurasi Lokal](#-panduan-instalasi--konfigurasi-lokal)
- [Dokumentasi RESTful API](#-dokumentasi-restful-api)
- [Pengujian (Testing)](#-pengujian-testing)
- [Lisensi](#-lisensi)

---

## 👥 Struktur Tim & Pembagian Peran

| Peran | Anggota Tim | Tanggung Jawab Utama |
| :--- | :--- | :--- |
| **Project Manager** | Mhd.Zakii Fahreza | Pengendalian *timeline*, penyusunan papan Kanban, QA fungsional, dan finalisasi dokumentasi repositori. |

| **Database Analyst** | Dharmawan Prasetyo | Perancangan ERD, skema migrasi Laravel, penentuan relasi Eloquent, serta pembuatan *Seeder* & *Factory*. |

| **Backend Developer** | Ramadani | Pembangunan RESTful API, validasi request (`FormRequest`), API Resource, dan pengelolaan transaksi database. |

| **Frontend Developer** | Alif Hillman| Pengembangan antarmuka kasir, konsumsi API *endpoint*, validasi *client-side*, dan penanganan *error flow*. |

---

## 🛠️ Arsitektur & Teknologi
* **Framework Backend:** Laravel 11
* **Database Management System:** MySQL 8.0
* **Authentication:** Laravel Sanctum / JWT
* **API Documentation & Testing:** Postman Collection v2.1
* **Version Control System:** Git & GitHub

---

## 🗄️ Struktur Basis Data & ERD
Sistem E-Londri menggunakan 4 tabel utama dengan relasi relasional:


### Penjelasan Entitas:
1. **`customers`** (Master Pelanggan): Menyimpan data identitas pelanggan (`name`, `phone`, `address`).
2. **`services`** (Master Layanan): Menyimpan paket laundry (`name`, `price_per_kg`, `unit`).
3. **`orders`** (Kepala Transaksi): Mencatat nota transaksi (`invoice_code`, `order_date`, `completion_date`, `status`, `total_price`).
4. **`order_details`** (Pivot Table): Hubungan *Many-to-Many* antara pesanan dan paket layanan (`qty`, `subtotal`).

---

## ⚙️ Panduan Instalasi & Konfigurasi Lokal

### 1. Prasyarat Sistem
* PHP >= 8.2
* Composer >= 2.x
* MySQL Server
* Git

### 2. Langkah Instalasi
```bash
# 1. Clone repositori dari GitHub
git clone [https://github.com/waan-31/e-laundry](https://github.com/waan-31/e-laundry)

# 2. Masuk ke direktori proyek
cd elaundry

# 3. Install dependensi PHP via Composer
composer install

# 4. Salin berkas lingkungan (.env)
cp .env.example .env

# 5. Generate Application Key
php artisan key:generate