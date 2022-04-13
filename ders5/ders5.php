<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Php'de Diziler Devam </h3>
<?php


$isimler = array();
$isimler[] = "Ahmet";
$isimler[] = "Mehmet";
$isimler[0] = "Ayşe";
$isimler[] = "Nur";

echo "<pre>";
print_r($isimler);
echo "</pre>";

$isimler2 = array();

$isimler["isim1"] = "Kerim";
$isimler["isim2"] = "Yılmaz";
$isimler["isim3"] = "Burcu";
$isimler[] = "Hüseyin";
$isimler[] = "Gülcan";

echo "<pre>";
print_r($isimler2);
echo "</pre>";

$ogrenciDetay=array(
    "id"      => 1,
    "adi"     => "Nurullah",
    "soyadi"  => "Yıldız",
    "bolum"   => "Bilgisayar",
    "yas"     => "25",
    "dersler" => array(
        "ders1"  => "Veri Tabanı",
        "ders2"  => "Web Programlama",
        "ders3"  => "Mobil Programlama"
    ),
    "sinif"   => "2",

echo "<pre>";
print_r($ogrenciDetay);
echo "</pre>";
 
echo "Öğrencinin Dersleri: <br> ";

$ogrenciDetay["dersler"]["ders1"] . "<br>";
$ogrenciDetay["dersler"]["ders2"] . "<br>";
$ogrenciDetay["dersler"]["ders3"] . "<br>";


















?>
<hr>
<h3>Koşul İfadeleri (İf - Else)</h3>
<p> İf - Else Bloklarında Öncelikle Koşul Belirtilir Ve Sonraki Dallanma Koşula Göre Devam Eder.</p>



<h5>Karşılaştırma Operatörleri</h5>
<ol>
    <li> == ($a == $b) Eşit İse. (Genellikle Matematiksel Bir Karşılaştırma Yapılır.)</li>
    <li> === ($a === $b) Denk İse. (Genellikle String Bir Karşılaştırma Yapılır.)</li>
    <li> != ($a != $b) Eşit Değil İse. (Genellikle Matematiksel Bir Karşılaştırma Yapılır.)</li>
    <li> !== ($a !== $b) Denk Değil İse. (Genellikle String Bir Karşılaştırma Yapılır.)</li>
    <li> > ($a > $b) Büyük İse.</li>
    <li> > ($a >= $b) Büyük Veya Eşit İse.</li>
    <li> > ($a < $b) Küçük İse.</li>
    <li> > ($a <= $b) Küçük Eşit İse.</li>

</ol>

<h5>Mantıksal Operatörler</h5>
<ol>
    <li> ! (olumsuzsa) (!$a) --> $a'nın değeri olumsuz yani False ise True döner.  Aksini yapar olumsuz mu diye sorar. </li>
    <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri doğru ise True döner, iki koşul da sağlanak zorundadır. Koşullardan biri False dönerse genel değer False olur.</li>
    <li>|| - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    <ol>

    <h4>Not:</h4>

    <ol>
        <li>
            Elseif sürekli devam eden sorgu bloğu açar.</li>
            <li>Else son kapanış yoludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>

<?php
 
/* if(condition) {
    #code...
}elseif (condition) {
    if(condition) {
    #code...
}elseif (condition) {
    if(condition) {
    #code...
}elseif (condition) {
    if(condition) {
    #code...
}else {
    #code...
}  */


$sayi1 = 123;
$sayi2 = 345;
$metin = "Adü";
/* Değer Yoksa */
if($sayi1) {
    echo "If bloğu çalıştı : $sayi1";
} else {
    echo "Else bloğu çalıştı :";
}

/* Eşitlik Varsa */
if ($sayi1 == $sayi2) {
echo "<br>Sayılar Eşit: $sayi1 != $sayi2";
} else {
    echo "<br>Sayılar Eşit Değil: $sayi1 = $sayi2";
}
 
/* Eşitlik Yoksa Varsa */
if ("ogrenci" === "ogrenci "){
    echo "<br>Girilen değerler aynı değil.";
}

/* And Örneği */
if($sayi1 < $sayi2 and ("ogrenci" === "ogrenci")) {
    echo "<br>Koşullar Sağlandı";
}else {
    echo "<br>Koşullar Sağlanmadı.";
}

/* OR Örneği */
if(($sayi1 < $sayi2) or (15 > 25)){
    echo"<br>Koşullar sağlandı";
}else{
    echo"<br>Koşullar sağanmadı";
}


if ($sayi1 > $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
}else{
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2"
}

if ($sayi1 >= $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir.$sayi1>=$sayi2";
}else{
    echo"<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür veya eşittir.$sayi1=<$sayi2";
}












?>





</ol>


</body>
</html>