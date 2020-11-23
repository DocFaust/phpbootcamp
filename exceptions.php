<?php

class MyException extends Exception {
    
}

function inverse($a) {
    if ($a == 0) {
        throw new MyException("That!");
    } else {
        return -$a;
    }
}

var_dump("What?");
try {
    echo inverse(0);
} catch (MyException $ex) {
    var_dump($ex);
} catch (Exception $ex) {
    var_dump($ex);
}
var_dump("What!?");
?>
