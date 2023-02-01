<?php

/* SWITCH-CASE
 * switch ($a) {
    case 1:
        echo "kosul 1";
    break;

    case 2:
        echo "kosul 2";
        break;

    case 3:
        echo "kosul 3";
        break;

    default:
        echo "default calıstı";
} */

/* TEK BOYUTLU DİZİLER
 * $dersler = array();

$dersler = array('Bsat','Bmo','Yorg');
echo "<pre>";
print_r($dersler); */

/*$dersler = [
    'ders1' => 'Bmo',
    'ders2' => 'Bsat'
];

echo "<pre>";
print_r($dersler); */

/* ÇOK BOYUTLU DİZİLER
    $hayvanlar =  [
    'Uçan Hayvanlar' => ['Kartal','Şahin','Baykuş'],
    'Sürüngen Hayvanlar'
];

echo "<pre>";
print_r($hayvanlar);
echo $hayvanlar['Uçan Hayvanlar'][2]; */

/*PHP DÖNGÜLER - FOR

$isimler = ['Sena','Can','İdil','Ezgi'];

for($i=0; $i <= 3; $i++){
    echo $isimler[$i]."<br>";
}

//PHP DÖNGÜLER - FOREACH

foreach ($isimler as $anahtar => $value){
    echo $anahtar."-".$value."<br>";
}
*/

/*PHP DÖNGÜLER - WHILE/DO WHILE

$i = 2;
while($i <= 10){
    echo "Sena";
    $i++;
}

do{
    echo $i;
}while($i<=10);
*/

/*PHP - FONKSİYONLAR

function topla($sayi1, $sayi2=30){
    return $sayi1+$sayi2;
}

echo topla(10,20)."<br>";
echo topla(20);
*/

/*PHP - ANONİM FONKSİYONLAR
$islem = [
    'topla' => function($a,$b){return $a+$b;},
    'cıkar' => function($a,$b){return $a-$b;},
    'carp' => function($a,$b){return $a*$b;},
    'bol' => function($a,$b){return $a/$b;}
];

echo $islem['topla'](3,5)."<br>";
echo $islem['cıkar'](3,5)."<br>";
echo $islem['carp'](3,5)."<br>";
echo $islem['bol'](3,5)."<br>";
*/

/*PHP - RECURSIVE FONKSİYONLAR

$categories = [
    [
        'id' =>1,
        'parent' =>0,
        'name' => 'Back-end Teknolojileri'
    ],

    [
        'id' =>2,
        'parent' =>0,
        'name' => 'Front-end Teknolojileri'
    ],

    [
        'id' =>3,
        'parent' =>0,
        'name' => 'Mobil Uygulama'
    ],

    [
        'id' =>4,
        'parent' =>1,
        'name' => 'PHP'
    ],

    [
        'id' =>5,
        'parent' =>1,
        'name' => 'NodeJS'
    ],

    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],

    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],

    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],

    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],

    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];

function categoryList(array $categories, int $parent=0) : string
{
    $html = '<ul>';
    foreach ($categories as $category)
        if($category['parent'] == $parent):
            $html .='<li>'.$category['name'];
            $html .=categoryList($categories,$category['id']);
            $html .='<li>';
        endif;
    $html .='</ul>';
    return $html;
}

echo categoryList($categories);
*/





