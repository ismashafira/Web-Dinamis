<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- cimplukan -->
</head>
<body>
    <?php 
        // membuat fungsi 
        function hitunganUmur($tgl_lahir) {
            $umur = date('Y') - $tgl_lahir;
            return $umur;
        }
        function perkenalan($channel, $salam="Assalamualaikum") {
            echo $salam.", ";
            echo "Selamat datang di ".$channel."<br/>";
            // memanggil fungsi lain
            echo "Sekarang youtuber berusia ". hitunganUmur(1990)." tahun <br>";
            echo "Nice to meet you :)";
        }
        // memanggil fungsi perkenalan
        perkenalan("Afandi studio");
    ?>
</body>
</html>