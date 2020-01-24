<?php
namespace App;

use App\Traits\Traversal;


class ObjectTraversal {

    use Traversal;

    function printArray($array) {
            $this->traverseData($array, 1);
    }
}
