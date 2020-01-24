<?php


namespace Tests\Traversal;


use App\ObjectTraversal;
use App\Person;
use PHPUnit\Framework\TestCase;

class ObjectTraversalTest extends TestCase
{
    public $obj;
    protected function setUp():void
    {
        parent::setUp();
        $this->obj = new ObjectTraversal();
    }

    public function testObjectTraversal()
    {
        $person_a = new Person("User", "1", NULL);
        $person_b = new Person("User", "2", $person_a);
        $a = array (
            "key1" => 1,
            "key2" => array (
                "key3" => 1,
                "key4" => array (
                    "key5" => 4,
                    "User" => $person_b,
                ),
            ),
        );
        //var_dump($a);

        $this->obj->printArray($a);
        $match_string = 'key1 1
key2 1
key3 2
key4 2
key5 3
user: 3
first_name: 4
last_name: 4
father: 4
first_name: 5
last_name: 5
father: 5
';
        $this->expectOutputString($match_string);

    }

}
