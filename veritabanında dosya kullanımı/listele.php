<?php

$dosya = fopen('ogrenci_list.txt', 'r');
$icerik = fread($dosya, filesize('ogrenci_list.txt'));
echo $icerik;
fclose($dosya);

?>