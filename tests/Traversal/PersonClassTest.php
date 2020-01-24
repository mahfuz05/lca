<?php


namespace Tests\Traversal;


use App\Person;
use PHPUnit\Framework\TestCase;

class PersonClassTest extends TestCase
{
    public function testIsObjectCorrect()
    {
        $person_a = new Person("User", "1", NULL);
        $person_b = new Person("User", "1", NULL);

        self::assertEquals($person_a, $person_b);
    }
}
