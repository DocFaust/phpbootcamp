<?php

interface TestInterface {

    public function printHallo();
}

abstract class Test implements TestInterface {

    public function printHallo() {
        var_dump("Hallo");
    }

    abstract public function hello();
}

class ExtendedTest extends Test {

    public function hello() {
        $this->printHallo();
    }

}

$test = new ExtendedTest();
$test->hello();


