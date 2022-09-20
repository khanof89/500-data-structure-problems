<?php

function findDuplicate($nums) {
    $visited = [];
    foreach($nums as $num) {
        if(isset($visited[$num])) {
            echo "The duplicate element is $num";
            return;
        }
        $visited[$num] = '';
    }
}

$nums = [1, 2, 3, 4, 2];
findDuplicate($nums);