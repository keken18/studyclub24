<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <?php
    //deklarasi variabel
    $angka = 23;
    ?>

    <!--latihan if else blade-->
    @if($data1 == 1)
    angka 1
    @elseif($data1 >1)
    banyak angka
    @else
    angka mines
    @endif
</body>
</html>