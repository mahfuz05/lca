<?php


namespace App;


class Node {
    public function __construct($value,$parent) {
        $this->value = $value;
        $this->parent = $parent;
    }
}
