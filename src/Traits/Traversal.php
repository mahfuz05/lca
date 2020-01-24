<?php
namespace App\Traits;

trait Traversal {

    function traverseData($data, $depth, $is_obj = false){
        foreach($data as $key => $value){
            if ($is_obj | is_object($value)) {
                $key = strtolower($key);
                echo "{$key}: $depth\n";
            } else {
                echo "$key $depth\n";
            }

            if(is_array($value)){
               self::traverseData($value,$depth+1);
            }else if(is_object($value)){
                self::traverseData(get_object_vars($value),$depth+1, true);
            }
        }
    }
}
