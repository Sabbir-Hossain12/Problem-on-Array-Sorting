<!--Task: Problem on Array Sorting-->
<!--Task Overview:-->
<!--Given an array of different numbers and a target number, after sorting this array, return the-->
<!--index if the target is found. If not, return the index where it would be if it were inserted in order.-->


<?php


function ArraySearchIndex($inputArray, $targetNumber)
{
//  sort array in ascending order.
    sort($inputArray);
    $l=0;
    $r=count($inputArray)-1;


    while($l<=$r)
    {
        $mid=(floor(($l+$r)/2));
        if($inputArray[$mid]==$targetNumber)
        {
            return $mid;
        }
        elseif($targetNumber>$inputArray[$mid])
        {
            $l=$mid+1;
        }
        else
        {
            $r=$mid-1;
        }

    }
    return $l;

    
}

# Test cases
$nums1 = [1, 7, 3, 5, 6, 9, 15];
$target1 = 5;
print(ArraySearchIndex($nums1, $target1));  # Output: 2

$nums2 = [5, 6, 1, 3];
$target2 = 2;
print(ArraySearchIndex($nums2, $target2));  # Output: 1

$nums3 = [1, 3, 5, 6];
$target3 = 7;
print(ArraySearchIndex($nums3, $target3));  # Output: 4