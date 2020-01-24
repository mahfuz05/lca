<?php
namespace Tests\LCA;

use App\Node;
use PHPUnit\Framework\TestCase;
use App\LowestCommonAncestor;

class LowestCommonAncestorTest extends TestCase
{
    public $lcm,$three,$seven,$one,$two,$four,$five,$six,$eight,$nine;

    protected function setUp():void
    {
        parent::setUp();

        $this->one	= new Node(1,null);
        $this->two	= new Node(2,$this->one);
        $this->three= new Node(3,$this->one);
        $this->four	= new Node(4,$this->two);
        $this->five	= new Node(5,$this->two);
        $this->six	= new Node(6,$this->three);
        $this->seven= new Node(7,$this->three);
        $this->eight= new Node(8,$this->four);
        $this->nine	= new Node(9,$this->four);

        $this->lcm = new LowestCommonAncestor();
    }

    public function testNodeThreeAndSeven() {
        self::assertEquals(3, $this->lcm->lca($this->three, $this->seven));
    }

    public function testNodeSixAndSeven() {
        self::assertEquals(3, $this->lcm->lca($this->six, $this->seven));
    }

    public function testNodeEightAndSeven() {
        self::assertEquals(1, $this->lcm->lca($this->eight, $this->seven));
    }
    public function testNodeEightAndFive() {
        self::assertEquals(2, $this->lcm->lca($this->eight, $this->five));
    }

    /**
     * @dataProvider additionProvider
     * @param $expected
     * @param $a
     * @param $b
     */
    public function testLCM($expected, $a, $b)
    {
        $this->assertSame($expected, $this->lcm->lca($a, $b));
    }


    public function additionProvider()
    {
        $this->one	= new Node(1,null);
        $this->two	= new Node(2,$this->one);
        $this->three= new Node(3,$this->one);
        $this->four	= new Node(4,$this->two);
        $this->five	= new Node(5,$this->two);
        $this->six	= new Node(6,$this->three);
        $this->seven= new Node(7,$this->three);
        $this->eight= new Node(8,$this->four);
        $this->nine	= new Node(9,$this->four);

        return [
            [3, $this->six, $this->seven],
            [1, $this->eight, $this->seven],
            [2, $this->eight, $this->five]
        ];
    }
}
