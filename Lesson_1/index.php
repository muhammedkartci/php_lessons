<?php

    /**
     * Değişken Tipleri
     * Integer -> Tam Sayılar
     * String -> Metinler
     * Boolean -> Doğru ya da Yanlış
     * Float -> Ondalıklı Sayılar
    */

    // Integer
    $num1 = 12;
    $num2 = 19;

    echo "Integer 1 : ".$num1;
    echo "<br/>";
    echo "Integer 2 : ".$num2;

    echo "<br/>";
    echo "<br/>";

    // String
    $str1 = "AMEAN";
    $str2 = "DURMUSH";
    $str3 = $str1." Danışmanlık";
    
    echo $str3;
    
    echo "<br/>";
    echo "<br/>";

    // Boolean
        // 1 -> TRUE
        // 0 -> FALSE
    $bool1 = 1;
    $bool2 = 0;

    echo "Bool 1 : ".$bool1; 
    echo "<br/>";
    echo "Bool 2 : ".$bool2;

    echo "<br/>";
    echo "<br/>";

    // Float
    $float1 = 1.2;
    $float2 = 1.5;
    $float2 += $float1;

    echo "Float 1 : ".$float1;
    echo "<br/>";
    echo "Float 2 : ".$float2;

?>