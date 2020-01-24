<?php
namespace App;


class LowestCommonAncestor {

    public function __construct() {

    }
    function lca($firstNode, $secondNode) {
        $ancestor1 = $this->ancestors($firstNode);
        $ancestor2 = $this->ancestors($secondNode);

        //reverse so we can generate top to bottom array
        $ancestor1 = array_reverse($ancestor1);
        $ancestor2 = array_reverse($ancestor2);


        $i = 0;
        while($i < count($ancestor1) and $i < count($ancestor2)){
            if ($ancestor1[$i] != $ancestor2[$i]) {
                break;
            }
            $i += 1;
        }
        return $ancestor1[$i-1];
        //Time Complexity: Time complexity of the above solution is O(n)
        //the space-complexity will be O(n).
    }

    function ancestors($node,$ancestors = array()){
        if($node->parent==null){
            if(sizeof($ancestors)==0){
                return array($node->value);
            }else{
                $ancestors[] = $node->value;
                return $ancestors;
            }
        }else{
            $ancestors[] = $node->value;
            return $this->ancestors($node->parent,$ancestors);
        }
    }

}

