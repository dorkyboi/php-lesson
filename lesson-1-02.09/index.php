<?php

trait HasUUID {
    public function getIdType() {
        return "uuid";
    }
}

interface Model {
    public function getQuery();
}

class MyClass extends LibraryClass {
    public function getId() {
//        ijrngjkerk ae
    }
}

$user = new User();
$user->getIdType();
