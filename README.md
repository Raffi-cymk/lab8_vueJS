# lab8_vueJS

# Praktikum 11 — VueJS dan REST API 🚀

## Tujuan Praktikum

Pada praktikum ini dilakukan integrasi frontend VueJS dengan REST API CodeIgniter yang sebelumnya telah dibuat pada folder `lab7_php_ci`. VueJS digunakan untuk menampilkan data artikel, menambahkan artikel baru, serta menghapus artikel langsung melalui browser menggunakan Axios.

---

# Struktur Folder

```text
lab8_vuejs
│
├── index.html
│
└── assets
    │
    ├── css
    │   └── style.css
    │
    └── js
        └── app.js
```

Keterangan:

* `index.html` digunakan sebagai halaman utama VueJS.
* `assets/css/style.css` digunakan untuk mengatur tampilan antarmuka.
* `assets/js/app.js` digunakan untuk logika VueJS dan koneksi API menggunakan Axios.

---

# Penjelasan Singkat Kode

## 1. File `index.html`

File ini digunakan untuk menampilkan:

* tabel artikel,
* form tambah artikel,
* tombol simpan,
* dan tombol hapus artikel.

Pada file ini juga digunakan:

```html
VueJS
```

dan:

```html
Axios
```

untuk menghubungkan frontend dengan REST API dari CodeIgniter.


## 2. File `app.js`

File ini berisi logika utama VueJS, yaitu:

### a. `loadData()`

Digunakan untuk mengambil data artikel dari API:

```javascript
axios.get('http://localhost/lab7_php_ci/public/post')
```

Data artikel kemudian ditampilkan ke dalam tabel menggunakan VueJS.


### b. `simpanData()`

Digunakan untuk menambahkan artikel baru melalui API menggunakan method POST.

```javascript
axios.post(...)
```

Setelah data berhasil ditambahkan:

* form otomatis kosong kembali,
* tabel otomatis diperbarui tanpa refresh manual.


### c. `hapusData(id)`

Digunakan untuk menghapus artikel berdasarkan ID menggunakan method DELETE.

```javascript
axios.delete(...)
```

Saat tombol hapus ditekan, akan muncul konfirmasi:

```text
Yakin ingin menghapus artikel ini?
```

Jika disetujui, data artikel langsung terhapus dari database dan tabel otomatis diperbarui.

---

## 3. File `style.css`

File CSS digunakan untuk mengatur tampilan halaman seperti:

* warna,
* tabel,
* tombol,
* form input,
* dan tata letak halaman.

Tampilan dapat diubah sesuai kebutuhan pengguna.

---

# Dokumentasi Screenshot 📸

## Screenshot 1
<img width="1366" height="420" alt="Screenshot (211)" src="https://github.com/user-attachments/assets/a33c4554-cc36-4ee9-89f4-b1f54887a76c" />

Tampilan awal halaman VueJS pada browser localhost.

Data artikel berhasil ditampilkan dari REST API CodeIgniter menggunakan Axios dan VueJS dalam bentuk tabel yang terdiri dari:

* ID,
* Judul,
* Isi artikel.


## Screenshot 2
<img width="1366" height="408" alt="Screenshot (212)" src="https://github.com/user-attachments/assets/7e05f1fd-bd72-438f-892a-b0ede7288436" />

Tampilan form tambah artikel.

Pengguna dapat:

* mengisi judul artikel,
* mengisi isi artikel,
* lalu menekan tombol:

```text
Simpan Artikel
```

Data kemudian dikirim ke REST API menggunakan method POST.


## Screenshot 3
<img width="1366" height="484" alt="Screenshot (214)" src="https://github.com/user-attachments/assets/b6ddc3f5-1fe4-44ae-b571-68cead60d16d" />

Tampilan fitur hapus artikel.

Pada setiap artikel tersedia tombol:

```text
Hapus
```

Saat tombol ditekan, muncul notifikasi konfirmasi:

```text
Yakin ingin menghapus artikel ini?
```

Jika pengguna memilih OK, artikel langsung dihapus dari database melalui REST API menggunakan method DELETE.

---

# 📚 Praktikum 12 - Vue Router (Single Page Application)

## 🎯 Tujuan

Membuat aplikasi **Single Page Application (SPA)** menggunakan **Vue.js** dan **Vue Router**, sehingga perpindahan halaman dapat dilakukan tanpa me-reload browser.

---

## 🛠️ Struktur File

```text
LAB8_VUEJS
│
├── assets
│   ├── css
│   │   └── style.css
│   │
│   └── js
│       ├── components
│       │   ├── Home.js
│       │   ├── Artikel.js
│       │   └── About.js
│       │
│       └── app.js
│
└── index.html
```

---

## 💻 Cuplikan Kode

### Home.js

```javascript
const Home = {
    template: `
        <div>
            <h2>Beranda</h2>
            <p>Selamat datang di aplikasi VueJS.</p>
        </div>
    `
};
```

### app.js

```javascript
const routes = [
    { path: '/', component: Home },
    { path: '/artikel', component: Artikel },
    { path: '/about', component: About }
];

const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes
});

const app = Vue.createApp({});
app.use(router);
app.mount('#app');
```

---

## 📸 Hasil Program

### 🏠 Halaman Beranda
<img width="1366" height="768" alt="Screenshot (294)" src="https://github.com/user-attachments/assets/e92459c0-4f16-41d8-a275-22270441dee2" />

Menampilkan halaman utama aplikasi beserta pesan selamat datang.

### 📰 Halaman Kelola Artikel
<img width="1366" height="768" alt="Screenshot (294)" src="https://github.com/user-attachments/assets/25f921b4-5077-4024-96b3-aafa330f6891" />

Menampilkan halaman untuk pengelolaan data artikel.

### 👤 Halaman About
<img width="1366" height="768" alt="Screenshot (296)" src="https://github.com/user-attachments/assets/82eb4953-e6a2-484c-827e-ba79e80f1366" />

Menampilkan informasi identitas mahasiswa.

---

## ✨ Penjelasan Singkat

* 🚀 Menggunakan **Vue.js 3** sebagai framework frontend.
* 🔗 Menggunakan **Vue Router** untuk navigasi SPA.
* 🏠 Route `/` menampilkan halaman Beranda.
* 📰 Route `/artikel` menampilkan halaman Kelola Artikel.
* 👤 Route `/about` menampilkan halaman About.
* ⚡ Perpindahan halaman berlangsung tanpa refresh browser karena menggunakan konsep Single Page Application (SPA).

---

# Praktikum 13 - Implementasi Login dan Authentication pada SPA VueJS

## Deskripsi

Pada praktikum ini dilakukan pengembangan aplikasi Single Page Application (SPA) berbasis VueJS dan CodeIgniter 4 dengan menambahkan fitur autentikasi pengguna. Fitur yang ditambahkan meliputi halaman login, penyimpanan status login menggunakan Local Storage, pembatasan akses halaman menggunakan Navigation Guard, serta fitur logout.

## Hasil Praktikum

### 1. Struktur Tabel User

Pada tahap awal dibuat tabel `user` pada database `lab_ci4` yang digunakan untuk menyimpan data pengguna aplikasi. Tabel ini terdiri dari beberapa field, yaitu:

* `id` : sebagai primary key dengan tipe data INT dan auto increment.
* `username` : menyimpan nama pengguna dengan tipe data VARCHAR.
* `email` : menyimpan alamat email pengguna dengan tipe data VARCHAR.
* `password` : menyimpan password pengguna yang telah dienkripsi menggunakan MD5.

**Screenshot Struktur Tabel User**

<img width="1195" height="297" alt="Screenshot (298)" src="https://github.com/user-attachments/assets/bbbbb3f7-bc8d-4346-b1eb-3c5e8ae66608" />

### 2. Data User pada Database

Setelah tabel berhasil dibuat, ditambahkan data pengguna yang akan digunakan untuk proses login aplikasi. Data tersebut terdiri dari username, email, dan password yang tersimpan di dalam tabel user.

**Screenshot Data User**

<img width="982" height="188" alt="Screenshot (299)" src="https://github.com/user-attachments/assets/53ba167a-ae59-478b-952c-b3da7c263415" />

### 3. Halaman Login Aplikasi

Aplikasi SPA kemudian dikembangkan dengan menambahkan halaman login. Pengguna dapat memasukkan username dan password untuk mengakses halaman yang telah diproteksi oleh sistem autentikasi.

**Screenshot Halaman Login**

<img width="1159" height="481" alt="Screenshot (329)" src="https://github.com/user-attachments/assets/c7947437-7c80-4578-9d12-e5a7891ac3b7" />

### 4. Fitur Logout

Setelah berhasil login, pengguna dapat keluar dari sistem menggunakan tombol Logout. Sistem akan menampilkan konfirmasi sebelum proses logout dijalankan.

**Screenshot Konfirmasi Logout**

<img width="1013" height="415" alt="Screenshot (330)" src="https://github.com/user-attachments/assets/b65de251-7952-4326-9a7f-efb8f05c424a" />

### 5. Proteksi Halaman Menggunakan Navigation Guard

Halaman tertentu hanya dapat diakses oleh pengguna yang telah login. Apabila pengguna mencoba mengakses halaman yang diproteksi tanpa autentikasi, sistem akan menampilkan pesan penolakan akses dan mengarahkan pengguna ke halaman login.

**Screenshot Akses Ditolak**

<img width="1037" height="283" alt="Screenshot (331)" src="https://github.com/user-attachments/assets/4a2cd76f-b3e4-4381-9c3b-0d76bd2dea2f" />

## Kesimpulan

Praktikum 13 berhasil mengimplementasikan sistem autentikasi pada aplikasi SPA menggunakan VueJS dan CodeIgniter 4. Fitur login, logout, penyimpanan status login menggunakan Local Storage, serta Navigation Guard telah berjalan dengan baik sehingga akses ke halaman tertentu dapat dibatasi sesuai status autentikasi pengguna.
