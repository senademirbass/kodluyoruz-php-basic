<?php
/*
$ogr_isim;
$ogr_soyisim;
$ogr_no;
$ogr_bolum;
$ogr_cinsiyet;
$dgm_yeri;
$ogr_yasi;
$ogr_tel;
*/

$ac = fopen("ogrenci_list.txt","a");
if(!$ac)
{
    echo "Hata !";
}
$ogr_isim = $_POST["isim"];
$ogr_soyisim = $_POST["soyisim"];
$ogr_no = $_POST["no"];
$ogr_bolum = $_POST["bolum"];
$ogr_cinsiyet = $_POST["cinsiyet"];
$dgm_yeri = $_POST["dogumyer"];
$ogr_yasi = $_POST["yas"];
$ogr_tel = $_POST["telno"];

$eklenecek_metin = $ogr_isim . " " . $ogr_soyisim . " " . $ogr_no . " " . $ogr_bolum . " " . $ogr_cinsiyet . " " . $dgm_yeri . " " . $ogr_yasi . " " . $ogr_tel . "<br><br><br>";


echo $eklenecek_metin;
fwrite($ac,$eklenecek_metin);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veriler</title>
</head>
<body>
    <h1>Kaydı Eklenen Öğrenci Bilgileri</h1>
    İsim: <?php echo $_POST["isim"]; ?><br>
    Soyisim: <?php echo $_POST["soyisim"]; ?>
    Öğrenci No: <?php echo $_POST["no"]; ?><br>
    Bölüm: <?php echo $_POST["bolum"]; ?>
    Cinsiyet: <?php echo $_POST["cinsiyet"]; ?><br>
    Doğum Yeri: <?php echo $_POST["dogumyer"]; ?>
    Yaş: <?php echo $_POST["yas"]; ?><br>
    Telefon Numarası: <?php echo $_POST["telno"]; ?>
</body>
</html>

