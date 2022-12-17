<?php


function dumper($one, $two, $three){
          var_dump($one, $two, $three);

}
dumper('hello','beg','world');
function dd($data){
        echo "<pre>";
        die(var_dump($data));
        echo "</pre>";
}
dd("Hello World");
$animal = ['Dog', 'Cat', 'Mouse'];
echo "<pre>";
die(var_dump($animal));
echo "</pre>";
//require 'functions.view.php';
?>