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
