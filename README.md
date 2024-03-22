## Task: 
Problem on Array Sorting.

## Task Overview:
Given an array of different numbers and a target number, after sorting this array, return the
index if the target is found. If not, return the index where it would be if it were inserted in order.
<hr>

## Explanation and Algorithm:
- Binary search Algorithm is utilized to efficiently find the index where the target number is located in the sorted array or where it should be inserted.
- Before performing binary search, the input array $inputArray is sorted in ascending order using the sort() function. Sorting is essential for binary search to work correctly, as it requires the array to be sorted.
- Two pointers, $l (left) and $r (right), are initialized. $l is set to the index of the first element of the sorted array (0), and $r is set to the index of the last element of the sorted array (count($inputArray) - 1).
- The while loop will run as long as left variable is equal or less than right element.
- At each iteration, the middle index $mid is calculated as the average of the left and right pointers (floor(($l + $r) / 2)).
- If the middle element is equal to the target number, the function returns the index of the middle element.
- If the target number is greater than the middle element, the search is narrowed to the right half of the array by updating the left pointer $l to $mid + 1.
- If the target number is less than the middle element, the search is narrowed to the left half of the array by updating the right pointer $r to $mid - 1.
- If the while loop completes without finding the target number in the array, it means that the target number should be inserted into the array at the position specified by the left pointer $l.
- Therefore, the function returns the value of the left pointer $l, which indicates the index where the target number should be inserted in the sorted array.

<hr>

<p style="text-align: center; font-size: 12px">-Thank you-</p>

