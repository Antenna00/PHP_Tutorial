<?php 

//* Sorting Algorithms
//^small Input
$inputArr = [3, 2, 4, 5, 102, 91, 1, 5];
$anotherArr = [5, 2, 4, 6, 1, 3];

//* Insertion Sort 
/*
 * The time-complexity is O(n^2) though, 
 * code is very tight thus constant factor in the running time is very small. 
 * Therefore, if input size is small, it is efficient. 
 */
function insertionSort($arr) : array {
    $arrLen = count($arr);

    for($j = 1; $j < $arrLen; $j++) {
        $key = $arr[$j];
        //^ Insert arr[i] into the sorted sequence 
        $i = $j - 1;

        while ($i >= 0 && $arr[$i] > $key) { //^ 3 > 2
            $arr[$i + 1] = $arr[$i];
            $i = $i - 1;
        };
        $arr[$i + 1] = $key;
    }
    return $arr;
};

function insertionSortDecend($arr) : array {
    $arrLen = count($arr);
    
    for($j = $arrLen - 2; $j >= 0; $j--) {
        $key = $arr[$j];
        //^ Insert arr[i] into the sorted sequence 
        $i = $j + 1;

        while ($i <= $arrLen - 1 && $arr[$i] > $key) { 
            $arr[$i - 1] = $arr[$i];
            $i = $i + 1;
        };
        $arr[$i - 1] = $key;
    }   
    return $arr;
}

function mergeSort($arr) : array {
    
    return $arr;
}

print_r(insertionSort($anotherArr));
print_r(insertionSortDecend($anotherArr));
