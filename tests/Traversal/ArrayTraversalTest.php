<?php


namespace Tests\Traversal;


use App\ArrayTraversal;
use PHPUnit\Framework\TestCase;

class ArrayTraversalTest  extends TestCase
{
    public $array;
    protected function setUp():void
    {
        parent::setUp();
        $this->array = new ArrayTraversal();
    }

    public function testArrayTraverse()
    {
        $a = array (
                "key1" => 1,
                "key2" => array (
                    "key3" => 1,
                    "key4" => array (
                        "key5" => 4
                    ),
                ),
            );

        $this->array->printArray($a);

        $match_string = 'key1 1
key2 1
key3 2
key4 2
key5 3
';

        $this->expectOutputString($match_string);
    }
}
