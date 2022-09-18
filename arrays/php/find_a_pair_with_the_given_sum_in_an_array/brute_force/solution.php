<?php

function findPair($nums, $n, $target) {
    $timeStarted = microtime(true);
    // iterate on array from first index till last
    for($i = 0; $i < $n; $i++ ) {
        // iterate on same array from first index and check if sum matches the target
        for($j = 0; $j < $n; $j++) {
            if(($nums[$i] + $nums[$j]) == $target) {
                echo "Time taken: ". (microtime(true) - $timeStarted);
                echo "Pair found ". $nums[$i]." ". $nums[$j]."\n";
                return;
            }
        }
    }
    echo "Pair not found\n";
}

$nums = [14, 7, 1, 5, 3, 6];
$target = 9;
$n = sizeof($nums);

findPair($nums, $n, $target);