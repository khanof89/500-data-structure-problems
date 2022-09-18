<?php

function findPair($nums, $n, $target) {
    $timeStarted = microtime(true);
    // sort the array in ascending order
    sort($nums);

    // maintain two indices pointing to endpoints of the array
    $low = 0;
    $high = $n - 1 ;

    // reduce the search space `nums[low…high]` at each iteration of the loop

    // loop till the search space is exhausted
    while($low < $high) {
        // sum found
        if ($nums[$low] + $nums[$high] === $target) {
            echo "Time taken: ". (microtime(true) - $timeStarted). "\n";
            echo "Paid found: ". $nums[$low]. " ". $nums[$high];
            return;
        }
        // increment `low` index if the total is less than the desired sum;
        // decrement `high` index if the total is more than the desired sum
        ($nums[$low] + $nums[$high] < $target) ? $low++ : $high--;
    }
    echo "Pair not found\n";
}

$nums = [14, 7, 1, 5, 3, 6 ];
$target = 9;
$n = sizeof($nums);
findPair($nums, $n, $target);