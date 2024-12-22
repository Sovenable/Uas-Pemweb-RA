# Sistem Pemantauan Tugas Mahasiswa
Deskripsi Proyek :
Sistem Pemantauan Tugas Mahasiswa adalah aplikasi web berbasis PHP dan MySQL yang memungkinkan pengguna untuk mengelola tugas mahasiswa, mencatat data tugas, dan melacak statusnya. Sistem ini dirancang untuk memenuhi kebutuhan tugas akhir mata kuliah Pemrograman Web dengan penerapan konsep client-side dan server-side programming.
Bagian 1: Client-side Programming (30%)
1.1 Manipulasi DOM dengan JavaScript (15%)
- Form input pada sistem memungkinkan pengguna untuk menambahkan tugas mahasiswa.
- Manipulasi DOM diterapkan untuk menampilkan data tugas secara dinamis di tabel tanpa perlu me-refresh halaman.
- Contoh penggunaan DOM:
- Menambahkan data tugas ke tabel secara langsung.
- Validasi input menggunakan JavaScript.
    
1.2 Event Handling (15%)
- Sistem memiliki beberapa event handling, seperti:
- Event `onSubmit` pada form tugas untuk menyimpan data ke server.
- Event `onFocus` dan `onBlur` untuk memperbaiki pengalaman pengguna saat mengisi form.
- Validasi input dilakukan di sisi client menggunakan JavaScript sebelum dikirimkan ke server.

Bagian 2: Server-side Programming (30%)
2.1 Pengelolaan Data dengan PHP (20%)
- Sistem memanfaatkan PHP untuk memproses data yang dikirim dari form.
- Data tugas yang dikirim melalui metode POST akan disimpan ke database MySQL.
- Validasi input dilakukan di sisi server untuk mencegah SQL Injection.
  
2.2 Objek PHP Berbasis OOP (10%)
- Sistem menggunakan class `Database` untuk mengelola koneksi ke database.
- Class `Database` memiliki metode `connect()` untuk membuka koneksi ke database secara aman.
- Contoh penggunaan OOP:
- Menghubungkan aplikasi ke database.
- Menyimpan dan mengambil data dari tabel tugas.
  
Bagian 3: Database Management (20%)
3.1 Pembuatan Tabel Database (5%)
- Tabel database dibuat dengan MySQL menggunakan file `monitoring_tugas.sql`.
- Tabel `users` digunakan untuk menyimpan data pengguna.
- Tabel `tugas` digunakan untuk mencatat tugas mahasiswa.
  
3.2 Konfigurasi Koneksi Database (5%)
- File `db.php` mengelola koneksi ke database menggunakan PHP.
- Konfigurasi koneksi:
- Host: `localhost` (atau sesuai hosting).
- Username, Password, dan Nama Database sesuai konfigurasi hosting.
  
3.3 Manipulasi Data pada Database (10%)
- Operasi CRUD (Create, Read) diterapkan pada tabel tugas:
- Create: Menambahkan tugas baru.
- Read: Menampilkan daftar tugas di tabel.
- Query SQL menggunakan prepared statements untuk keamanan.
  
Bagian 4: State Management (20%)
4.1 State Management dengan Session (10%)
- Session digunakan untuk mengelola login pengguna.
- Session dimulai dengan `session_start()` dan dihentikan saat logout.
- Data session memastikan pengguna hanya dapat mengakses halaman jika sudah login.
  
4.2 Pengelolaan State dengan Cookie dan Browser Storage (10%)
- Cookie digunakan untuk menyimpan informasi sederhana pengguna, seperti username.
- Browser storage (`localStorage`) digunakan untuk menyimpan data input sementara, sehingga pengguna tidak perlu mengisi ulang jika halaman direfresh.

