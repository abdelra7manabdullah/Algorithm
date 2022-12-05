<?php

function merge($array){
    
    if(count($array) <= 1): return $array; endif;
    $mid = (int) count($array) / 2;
    $LHS = merge(array_slice($array , 0 , $mid));
    $RHS = merge(array_slice($array , $mid ));


    return mergeSort($LHS,$RHS);
}



function mergeSort($LHS,$RHS){
    
    $sortedArray = [];
    $L_Index = $R_Index = 0;
    
    $leftLenght = count($LHS);
    $rightLength = count($RHS);
    
    while($L_Index < $leftLenght && $R_Index < $rightLength):
        if($LHS[$L_Index] < $RHS[$R_Index]):
            $sortedArray[] = $LHS[$L_Index];
            $L_Index++;
        else:
            $sortedArray[] = $RHS[$R_Index];
            $R_Index++;
        endif;
    endwhile;
    
     while($L_Index < $leftLenght){
        $sortedArray[] = $LHS[$L_Index];
        $L_Index++;
    }
    while ($R_Index < $rightLength){
        $sortedArray[] =$RHS[$R_Index];
        $R_Index++;
    }
    
    return $sortedArray;
}


print_r(merge([8,5,6,2,4,9]));




















