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
        // membuat fungsi/function dg parameter
        function perkenalan($salam, $nama) {
            echo $salam." <br>";
            echo "Selamat datang di channel ".$nama."<br/>";
            echo "Jangan lupa like, komen, dan subcribe ya<br/>";
            echo "<hr>";
        }
        // memanggil fungsi dg parameter
        perkenalan("Assalamualaikum", "Afandi Studio");

        $salam = "Selamat pagi";
        $nama = "Polines Official";
        perkenalan($salam, $nama);
    ?>
</body>
</html>