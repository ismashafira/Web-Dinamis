<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungai Return</title>
    <!-- cimplukan -->
</head>
<body>
    <?php 
        // membuat fungsi yang mengembalikan nilai
        function hitunganUmur($tgl_lahir) {
            $umur = date('Y') - $tgl_lahir;
            return $umur;
        }
        // memanggil fungsi dengan return
        echo "Umur saya adalah ". hitunganUmur(1990);
    ?>
</body>
</html>