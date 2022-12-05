<?php

function Insertion($array){
    for($i = 1; $i < count($array); $i++):
        $low = $array[$i];
        $j = $i -1;
        while($j >=0 && $low < $array[$j]):
            $array[$j + 1] =  $array[$j];
            $j --;
        endwhile;
        $array[$j +1] = $low;
    endfor;
    print_r($array);
    
}
Insertion([1,2,3,46,5,2,12,58,96]);