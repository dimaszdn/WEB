<?php

echo '<h2>Регулярные выражения</h2>';

echo '<h3>a)</h3>';
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = array();
preg_match_all('/a..b/', $str, $matches);
var_dump($matches);


echo '<h3>b)</h3>';
$strWithDigits = 'a1b2c3';
$result = preg_replace_callback('~([a-z])([0-9]+)~',
    function($match) {
        return $match[1] . $match[2] ** 3;
    },
    $strWithDigits);
echo "<p>$result</p>";