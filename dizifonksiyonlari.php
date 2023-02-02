<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

    function eslestir($dizi,$value){
        $filteredArray = array_filter($dizi);
        $randomArray = array_rand($filteredArray,$value);
        $op = array_map(function ($e) use ($filteredArray){
            return $filteredArray[$e];
        },$randomArray);
    return $op;
    }
    echo "<pre>";
        print_r(eslestir($planets, 2));
        print_r(eslestir($planets, 3));
        print_r(eslestir($planets, 2));
        print_r(eslestir($planets, 4));
        print_r(eslestir($planets, 5));





