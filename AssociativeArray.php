<?php


$person = [ 'age '=> 13,
            'Hair Color ' => 'Brown',
            'Carear ' => 'WEb Developer',

];
$person['name'] = ' Alina';
unset($person['age']);
require 'AssociativeArrayView.php';
?>