<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ekle</title>
</head>
<body>
    <form enctype="multipart/form-data" action="index.php" method="post">
        <p>Öğrencinin İsmi: <input type="text" name="isim"></p>
        <p>Öğrencinin Soyismi: <input type="text" name="soyisim"></p>
        <p>Öğrenci Numarası: <input type="number" name="no"></p>
        <p>Öğrencinin Bölümü: <input type="text" name="bolum"></p>
        <p>Öğrencinin Cinsiyeti: <input type="text" name="cinsiyet"></p>
        <p>Öğrencinin Doğum Yeri: <input type="text" name="dogumyer"></p>
        <p>Öğrencinin Yaşı: <input type="number" name="yas"></p>
        <p>Öğrencinin Telefon Numarası: <input type="number" name="telno"></p>
        <button type="submit">Kayıt Ekle</button>
    </form>
</body>
</html>