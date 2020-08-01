<?php

class TestObject{

    public function helloWorld(){

        return "Hello Nash";
    }
}

$testObject = new TestObject();
echo $testObject->helloWorld();