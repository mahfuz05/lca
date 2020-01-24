<?php


namespace App;


class Person {
    public function __construct($first_name, $last_name, $father) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->father = $father;
    }
}
