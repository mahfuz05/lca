<?php
namespace App;

use App\Traits\Traversal;

class ArrayTraversal {

    use Traversal;

    function printArray($array) {
            $this->traverseData($array, 1);
    }
}
