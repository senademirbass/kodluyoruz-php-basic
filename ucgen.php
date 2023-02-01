<?php

function ucgen($döndür){
    $s = 0;
    while ($s <= $döndür) {
        for ($i = 0; $i <= $s; $i++) {
            echo "0";
        }
        $s++;
        echo "<br>";
    }
}
ucgen(10);

