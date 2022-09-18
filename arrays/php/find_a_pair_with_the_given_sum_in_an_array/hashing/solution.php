<?php

function findPair($nums, $n, $target) {
    // create an empty hash table
    $hash_table = [];
    $timeStarted = microtime(true);
    for($i = 0; $i < $n; $i++) {
        // check if pair (nums[i], target - nums[i]) exists
        $required = $target - $nums[$i];
        // if the difference is seen before, print the pair
        if(isset($hash_table[$required])) {
            echo "Time taken: ". (microtime(true) - $timeStarted);
            echo "Pair found ". $nums[$i]. " ". $required;
            return;
        }
        // store index of the current element in the map
        $hash_table[$nums[$i]] = $i;
    }
    // we reach here if the pair is not found
    echo "Pair not found\n";
}

$nums = [14, 7, 1, 5, 3, 6 ];
$target = 9;
$n = sizeof($nums);
findPair($nums, $n, $target);