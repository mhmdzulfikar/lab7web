<h2>1.</h2> Untuk menjalankan web server dari menu XAMPP Control.

• Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost
Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.
• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\
• Database MySQL
Direktori: \xampp\mysql\
Manajemen database: http://localhost/phpmyadmin

![image](https://github.com/user-attachments/assets/ae61d79a-5a70-46fa-ab95-bf1c61a77c35)

<h2>2.</h2>
Buat folder lab7_php_dasar pada root directory web server (d:\xampp\htdocs)

![image](https://github.com/user-attachments/assets/7f072318-bc41-4de9-95a9-1e20e8672ef0)
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/

![image](https://github.com/user-attachments/assets/84af907b-e25c-4b95-9800-0b2ddbd993a8)

<h2>3.</h2>
PHP Dasar
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.

    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>PHP Dasar</title>
    </head>
    <body>
      <h1>Belajar PHP Dasar</h1>
        <?php
        echo "Hello World";
        ?>
    </body>
    </html>
    
Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

![image](https://github.com/user-attachments/assets/85bfdd00-92d6-4df7-9ef8-d4829e2d697a)

<h2>4.</h2>
Variable PHP
Menambahkan variable pada program.

    <?php
    $nim = "0411500400";
    $nama = 'Abdullah';
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>

![image](https://github.com/user-attachments/assets/33d4d7ff-a99e-4efb-a331-b879a4e091f0)

<h2>5.</h2>
Predefine Variable $_GET

    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>

http://localhost/lab7_php_database/latihan2.php?nama=Zulfikar
?nama=Zulfikar= yang membuat memunculkan nama

![image](https://github.com/user-attachments/assets/0508600b-e5c9-4ae9-8c4e-6c21105dfc45)

<h2>6.Membuat Form Input</h2>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>PHP Dasar</title>
    </head>
    <body>
      <h2>Form Input</h2>
      <form method="post">
      <label>Nama: </label>
      <input type="text" name="nama">
      <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
    </body>
    </html>

![image](https://github.com/user-attachments/assets/3840d534-f914-4ffc-b8fd-c64c1e8d1106)

<h2>7.Operator</h2>

    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>

![image](https://github.com/user-attachments/assets/412f11c6-b5f0-4ef9-86c5-809d4345b929)

Penjelasannya:
Gaji sebelum pajak adalah Rp. 1.000.000.
Pajak yang dikenakan sebesar 10% (0.1 * 1.000.000 = 100.000).
Gaji yang dibawa pulang adalah Rp. 900.000 (1.000.000 - 100.000).

<h2>8.Kondisi IF</h2>

    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
    ?>

![image](https://github.com/user-attachments/assets/9e19e709-7dcd-4a53-ac25-7bf9327b9752)

Penjelasannya:
Mengecek hari saat ini menggunakan date("l"), yang akan mengembalikan nama hari dalam bahasa Inggris (misalnya "Sunday" untuk Minggu). Kemudian, program memeriksa apakah hari tersebut "Sunday", "Monday", atau hari lainnya. Jika hari "Sunday", maka ditampilkan "Minggu". Jika hari "Monday", akan ditampilkan "Senin". Untuk hari lain, seperti "Tuesday", akan menampilkan "Selasa". Jadi, ini adalah cara untuk menampilkan nama hari dalam bahasa Indonesia berdasarkan hari saat ini.

<h2>9.Kondisi Switch</h2>

      <?php
      $nama_hari = date("l");
      switch ($nama_hari) {
      case "Sunday":
      echo "Minggu";
      break;
      case "Monday":
      echo "Senin";
      break;
      case "Tuesday":
          echo "Selasa";
          break;
          default:
          echo "Sabtu";
          ?>
          
![image](https://github.com/user-attachments/assets/868a6b1c-35df-480a-ab26-707f725968ab)

  
Penjelasannya:
date("l"): Mengambil nama hari saat ini dalam format teks penuh (misalnya "Sunday", "Monday").
switch: Struktur kontrol untuk memeriksa nilai variabel $nama_hari dan mengeksekusi blok kode yang sesuai dengan nilai tersebut.
case: Memeriksa apakah $nama_hari cocok dengan nilai yang diberikan (misalnya, "Sunday", "Monday").
default: Menangani kondisi jika nilai $nama_hari tidak cocok dengan nilai apa pun yang ada dalam case.
break: Menghentikan eksekusi dari switch setelah menemukan kasus yang cocok.

<h2>10.Perulangan For</h2>

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    ?>

![image](https://github.com/user-attachments/assets/a3aedf63-467b-490e-9b26-0b293d187bf1)

Penjelasannya:
Perulangan 1 sampai 10:

Menggunakan for untuk melakukan perulangan dari 1 hingga 10.
Di dalam setiap iterasi, nilai variabel $i ditampilkan menggunakan echo.
Perulangan Menurun dari 10 ke 1:

Perulangan ini juga menggunakan for, tetapi dimulai dari 10 dan berkurang hingga 1 (dengan $i--).
Outputnya akan menampilkan dua jenis perulangan:

Dari 1 hingga 10.
Dari 10 hingga 1.

<h2>11.Perulangan While</h2>

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>

![image](https://github.com/user-attachments/assets/866e61a1-a98e-438b-83be-603d815ff349)

Penjelasannya:
Inisialisasi: Variabel $i diinisialisasi dengan nilai 1.
Perulangan while: Perulangan ini akan terus berjalan selama nilai $i kurang dari atau sama dengan 10.
Eksekusi di dalam while: Di setiap iterasi, nilai $i ditampilkan menggunakan echo, kemudian $i ditambah 1 ($i++).
Output: Program akan menampilkan "Perulangan ke: 1", "Perulangan ke: 2", dan seterusnya hingga 10.


<h2>12.Perulangan Dowhile</h2>

    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
    ?>

![image](https://github.com/user-attachments/assets/62f3a90d-88df-4fc9-9166-2c4cd6143e73)

Penjelasannya:
Inisialisasi: Variabel $i diinisialisasi dengan nilai 1.
Perulangan do: Kode di dalam blok do akan dieksekusi minimal sekali, sebelum memeriksa kondisi.
Kondisi while: Setelah setiap iterasi, kondisi $i<=10 diperiksa. Jika true, perulangan akan terus berjalan.
Output: Program mencetak "Perulangan ke: 1", "Perulangan ke: 2", hingga 10.

<h2>13.Pertanyaan dan Tugas</h2>
Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form Input</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form method="post">
            <label>Nama: </label><input type="text" name="nama"><br>
            <label>Tanggal Lahir: </label><input type="date" name="tanggal_lahir"><br>
            <label>Pekerjaan: </label>
            <select name="pekerjaan">
                <option value="developer">Developer</option>
                <option value="designer">Designer</option>
                <option value="manager">Manager</option>
            </select><br>
            <input type="submit" value="Kirim">
        </form>
    
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['nama'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];
    
            
            $tanggal_lahir = new DateTime($tanggal_lahir);
            $sekarang = new DateTime();
            $umur = $sekarang->diff($tanggal_lahir)->y;
    
            
            $gaji = 0;
            if ($pekerjaan == "developer") {
                $gaji = 8000000;
            } elseif ($pekerjaan == "designer") {
                $gaji = 6000000;
            } elseif ($pekerjaan == "manager") {
                $gaji = 10000000;
            }
    
            
            echo "<h3>Hasil Input</h3>";
            echo "Nama: $nama<br>";
            echo "Tanggal Lahir: " . $tanggal_lahir->format('d-m-Y') . "<br>";
            echo "Umur: $umur tahun<br>";
            echo "Pekerjaan: " . ucfirst($pekerjaan) . "<br>";
            echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.') . "<br>";
        }
        ?>
    </body>
    </html>


![image](https://github.com/user-attachments/assets/314c8e2a-dc3c-4a44-85a6-c7e9977ae9b6)

Penjelasannya:
Form Input: Form input terdiri dari nama, tanggal lahir, dan pilihan pekerjaan. Data akan dikirimkan melalui metode POST ke PHP.
Menghitung Umur: Menggunakan DateTime() untuk menghitung selisih tahun antara tanggal lahir dan tanggal saat ini.
Gaji Berdasarkan Pekerjaan: Gaji ditentukan dengan kondisi if berdasarkan pilihan pekerjaan yang dipilih di form.
Menampilkan Output: Setelah form disubmit, hasilnya berupa nama, umur, pekerjaan, dan gaji ditampilkan di halaman yang sama.

