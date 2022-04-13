<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri Ve Programlama-3</title>
</head>
<body>



    <?php

    /* Uygulama Ödevi 
    Kuyruk Ve Yığın Veri Yapılarının php üzerinde dizileri kullanılarak
    örneklendirmesini gerçekleştiriniz.
    */

    /* Uygulama: Rastgele Üretilen Sayı
    50'den Büyükse
       Geçtiniz: Notunuz: xx
    50'den Küçükse 
       Kaldınız: Notunuz: xx
    Uygulamasını Gerçekleştiriniz.
       */
    $rasgtele_Sayi = rand(10, 100);
    if ($rasgtele_Sayi >= 50) {
       echo "Geçtiniz - Notunuz: $rasgtele_Sayi ";
    }else {
        echo "Kaldınız - Notunuz: $ogr_notu ";
    }





    ?>
</body>
</html>