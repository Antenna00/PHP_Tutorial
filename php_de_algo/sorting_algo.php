<?php 

//* Sorting Algorithms
//^small Input
$inputArr = [3, 2, 4, 5, 102, 91, 1, 5];
$anotherArr = [5, 2, 4, 6, 1, 3];

//* Insertion Sort O(n^2)
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

/*
*------------------------------------------------------
*/
/*

 * Merge Sort O(nlogn)
 * Merge Sort is divide and conquer approach. 
 * This method divides an array to 2 subarrays recursively until each subarray holds 2 items.
 * Then, 2 items are compared, sorted and merged back to the parent subarray or original array. 
 * 
*/
function merge(&$arr, $left, $middle, $right) {
    //^get the number of elements in each subarrays
    $arrACount = $middle - $left + 1;
    $arrBCount = $right - $middle;

    //^Temporary array to store subarray
    $leftTemp = array();
    $rightTemp = array();

    //^copy data to temporary subarray. Divide subarray to another subarray
    for($i = 0; $i < $arrACount; $i++) 
        $leftTemp[$i] = $arr[$left + $i];
    
    for($j = 0; $j < $arrBCount; $j++)
        $rightTemp[$j] = $arr[$middle + 1 + $j];

    //^sort the array and put it back to original subarray.
    $i = 0;
    $j = 0;
    $k = $left;

    while($i < $arrACount && $j < $arrBCount) {
        if($leftTemp[$i] <= $rightTemp[$j]) {
            $arr[$k] = $leftTemp[$i];
            $i++;
        }else {
            $arr[$k] = $rightTemp[$j];
            $j++;
        }
        $k++;
    }

    while($i < $arrACount) {
        $arr[$k] = $leftTemp[$i];
        $k++;
        $i++;
    }

    while($j < $arrBCount) {
        $arr[$k] = $rightTemp[$j];
        $k++;
        $j++;
    }
}

function mergeSort(&$arr, $left, $right) {
    
    //^check if array / subarray has an element
    if($left < $right) {
        //^calculate the middle index of subarray
        //^When divided into subarrays, middle value is calculated. 
        //^If number is odd, the ceiling number is taken.
        $middle = $left + (int) (($right - $left) / 2); //!Left is required as subarray could start from not 0
        
        //^ Sort first and second halves
        mergeSort($arr, $left, $middle); //^continue to divide until subarray consists 2 items / next recursion will be left == right 
        mergeSort($arr, $middle + 1, $right);
 
        merge($arr, $left, $middle, $right); 
    }
}

/*
*------------------------------------------------------
*/


function heapify() {

}

function heapSort() {
    
}


print_r(insertionSort($anotherArr));
print_r(insertionSortDecend($anotherArr));
mergeSort($anotherArr, 0, count($anotherArr)-1);

print_r($anotherArr);
var_dump($anotherArr);

//^restate anotherArr
$anotherArr = [5, 2, 4, 6, 1, 3];