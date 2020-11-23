<?php
class Test {
    public $name = "Welt";
}


$str = 'a:2:{s:10:"Schlüssel";s:10:"Hallo Welt";s:4:"test";O:4:"Test":1:{s:4:"name";s:4:"Welt";}}';

$a = unserialize($str);

var_dump($a);

//$a= ["Schlüssel"=> "Hallo Welt", "test"=>new Test()];
//
//echo serialize($a);

