<?php

$sayi = $_GET['sayi'];

    function Bolunebilme($sayi){
        if ($sayi % 3 == 0){
            echo "Bu sayı 3'e bölünebilir.";
        }
        elseif ($sayi % 3 !== 0){
            $kontrolSayi = $sayi;
            $kontrolSayi++;
            while($sayi % 3 !== 0){
                $kontrolSayi++;
            }
            echo "Bu sayı 3'e bölünemez, bölünebilecek ilk sayı" + $kontrolSayi + "dır.";
        }
        elseif ($sayi == ""){
            echo "Boş bırakılamaz!";
        }
    }
    header('Refresh:10 ; URL=form.php');