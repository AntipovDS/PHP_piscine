<?php

Class ExempleA {

    public function __construct() {
        print ('Constructor ExempleA called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print ('Destructor ExempleA called' . PHP_EOL);
        return;
    }

    public function foo() {
        print ('Function foo from class A' . PHP_EOL);
    }

    public function test() {
        self::foo();
        //static::foo();
        return;
    }
}

Class ExempleB extends ExempleA {

    public function __construct()
    {
        print ('Constructor ExempleB called' . PHP_EOL);
        return;
    }

    public function __destruct() {
        print ('Destructor ExempleB called' . PHP_EOL);
        return;
    }

    public function foo() {
        print ('Function foo from class B' . PHP_EOL);
    }
}

$instanceA = new ExempleA();
$instanceB = new ExempleB();

$instanceA->foo();
$instanceB->foo();

$instanceA->test();
$instanceB->test();

?>