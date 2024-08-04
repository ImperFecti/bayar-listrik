# APLIKASI LISTRIK PASCABAYAR

Jika Anda merasa repositori ini bermanfaat dan ingin menggunakannya, silakan pertimbangkan untuk memberikan bintang. Ini akan menunjukkan dukungan Anda terhadap repositori ini dan membantu orang lain menemukannya.

Open this [`README.md`](https://github.com/ImperFecti/bayar-listrik/blob/master/README_EN.md) in english version.

## Persyaratan Pengembangan Situs Web Ini

Berikut adalah apa yang perlu Anda unduh untuk pertama kali jika Anda ingin mengembangkan situs web ini dengan kode sumber terbaru saya:

- [Composer 2.7.5](https://getcomposer.org/)
- [CodeIgniter 4 4.5.3](https://github.com/codeigniter4/CodeIgniter4/releases/tag/v4.5.3)
- [XAMPP 8.2.12 Windows](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/)
- [Git](https://git-scm.com/downloads)

## Fitur

- Login dan Registrasi untuk pelanggan
- Pelanggan dapat menghitung berapa banyak tagihan listrik per bulan menggunakan kalkulator terintegrasi di dalam situs web ini
- Pelanggan dapat membuat tagihan listrik untuk pembayaran
- Akun admin untuk mengelola pelanggan
- Admin dapat mengelola data pelanggan dan data tagihan pelanggan
- Fitur Edit Profil untuk akun admin dan akun pelanggan
- Fitur Pembaruan Kata Sandi untuk akun admin dan akun pelanggan

## Apa yang Saya Gunakan dalam Situs Web Ini ?

- CodeIgniter 4 v4.5.3
- Bootstrap v5.3
- Myth/Auth v1.2.1
- GroceryCRUD v2.0.1

## Pengaturan

- Pastikan bahwa Anda sudah menginstal semua persyaratan pengembangan situs web di atas.
- [<b>Download](https://github.com/ImperFecti/bayar-listrik/archive/refs/heads/master.zip) file proyek ini </b> dan ekstrak di mana pun Anda inginkan.
  -Atau Anda dapat menggunakan <b>git bash</b> dengan `git bash here` ke folder yang ditentukan dan mulai mengkloning repositori ini dengan perintah ini `git clone https://github.com/ImperFecti/bayar-listrik.git`.
- Salin dan tempel file `env` lalu tempelkan kode ini untuk mengatur database:

```
# ENVIRONMENT

CI_ENVIRONMENT = development

# APP

app.baseURL = 'http://localhost:8080'
# If you have trouble with `.`, you could also use `_`.
# app_baseURL = ''
# app.forceGlobalSecureRequests = false
# app.CSPEnabled = false

# DATABASE

database.default.hostname = localhost
database.default.database = bayarlistrik
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

- Untuk mengimpor database, buka [`phpmyadmin`](http://localhost/phpmyadmin) dan buat database baru dengan nama `bayarlistrik`.
- Di [`phpmyadmin`](http://localhost/phpmyadmin), pilih database `bayarlistrik` yang Anda buat dan kemudian pilih impor.
- Impor database bernama `bayarlistrik.sql` di dalam file direktori `APPPATH\app\Database`.
- itus web ini saat ini menggunakan [`http://localhost:8080/`](http://localhost:8080/) dari spark. Untuk memulai localhost dengan [spark](https://codeigniter.com/user_guide/cli/spark_commands.html), jalankan perintah ini `php spark serve` dari terminal Anda untuk mengaktifkan localhost.
- Jika Anda ingin mengembangkan situs web ini menggunakan XAMPP, Anda dapat mengubah <b>baseURL</b> di `App.php` dan pastikan file proyek disimpan di `htdocs`.

## Akun Admin

Jika Anda menggunakan database yang telah saya sediakan, Anda dapat menggunakan akun admin yang telah terdaftar di bawah ini:

- Username `admin` password `letslogintoadminaccount`
- Username `admin2` password `letslogintoadminaccount`

## Pengaturan Library Myth\Auth

- Jalankan `composer update` dari terminal untuk memperbarui dependensi dengan <b>composer</b>.
- Setelah pembaruan selesai, Anda dapat menemukan folder bernama `myth\auth` di dalam `APPPATH\app\Vendor` dan mulai mengatur pustaka ini.
- Jika Anda tidak dapat menemukan pustaka di dalam `Vendor`, coba jalankan perintah ini di dalam terminal.

```
composer require myth/auth
```

- Temukan `Auth.php` di dalam `Vendor\myth\auth\Config\` dan ubah variabel di bawah ini

### Grup Pengguna Default

Ubah nilai variabel `$defaultUserGroup` menjadi:

```
public $defaultUserGroup = 'pelanggan';
```

### Views

Ubah nilai variabel `$views` menjadi:

```
public $views = [
    'login'       => 'Myth\Auth\Views\login',
    'register'    => 'Myth\Auth\Views\register',
    'forgot'      => 'Myth\Auth\Views\forgot',
    'reset'       => 'Myth\Auth\Views\reset',
    'emailForgot' => 'Myth\Auth\Views\emails\forgot',
];
```

### Allow Password Reset via Email

Ubah nilai variabel `$activeResetter` menjadi:

```
public $activeResetter = null;
```

### Allow Persistent Login Cookies (Remember me)

Ubah nilai variabel `$allowRemembering` menjadi:

```
public $allowRemembering = true;
```

### Remember Length

Ubah nilai variabel '$rememberLength' menjadi apa pun yang Anda inginkan:

```
public $rememberLength = 30 * DAY;
```

## Preview

- Landing Page
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268927623938183188/image.png?ex=66ae3471&is=66ace2f1&hm=48ae330efbe80e2dfae69fb15d90dc455e09aff6a6fa593f30c58f62d4cdcbf0&)

- Calculator
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929747476549666/kalkulator.png?ex=66ae366b&is=66ace4eb&hm=97602cac1f9deccc852a60660c6404e34aa809c136aa1903b46a75ac8c885b98&)

- Daftar Tagihan Listrik
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929748189581343/list_tagihan_user.png?ex=66ae366b&is=66ace4eb&hm=8de28fc9c7e3da4d5052698f51f62985ae4f34af768902805fea1bf355ebf485&)

- Invoice
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268931160051023956/image.png?ex=66ae37bc&is=66ace63c&hm=6f5982b197ee402a41ecbfb772bde151bdec6d01df8bcceaa828eb3775e3398f&)

- Admin Dashboard
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929747065372775/admin_dashboard.png?ex=66ae366b&is=66ace4eb&hm=33cae51e9505f3bacf8dc50b1b18a16a2a0bedb5cb7e85b84e46d3ab555661b2&)

- Tabel Manajemen Pengguna
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929746603868301/table_user.png?ex=66ae366b&is=66ace4eb&hm=daeb498fcc8897d5f7253a8804bda1448c666bdf849337611b6148c89a91294f&)

- Tabel Manajemen Daftar Tagihan Pelanggan
  ![](https://cdn.discordapp.com/attachments/563035937949483008/1268929746197151878/table_tagihan.png?ex=66ae366b&is=66ace4eb&hm=f3bc6670d6b48e2d6118d7b924727fd88da7766b79bdfdc2939c2ef576e9f827&)

## Menemukan masalah saat mengembangkan aplikasi ini?

Buat [issue](https://github.com/ImperFecti/bayar-listrik/issues) baru untuk repositori ini atau Anda dapat mencoba menghubungi [email](mailto:adilm8909@gmail.com) / [instagram](https://www.instagram.com/_adilsputra/) / [twitter](https://twitter.com/_adilsputra)

## Ingin berkontribusi pada repositori ini?

Saya menyadari bahwa repositori ini masih belum sempurna dan belum selesai. Jika Anda memiliki ide untuk meningkatkan repositori ini, <b>[Fork](https://github.com/ImperFecti/bayar-listrik/fork)</b> halaman repositori ini untuk membuat salinan repositori Anda sendiri di akun GitHub Anda.
