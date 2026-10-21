<?php

$totalPages = 412;
$pagesRead = 200;

// // Check whether the book is finished
// if ($pagesRead == $totalPages) {
//     echo "Finished!\n";
// } elseif ($pagesRead == 0) {
//     echo "Not Started!\n";
// } else {
//     echo "Currently reading!\n";
// }

// // Comparison operators
// if ($pagesRead > $totalPages) {
//     echo "Pages cannot exceed total pages!\n";
// }

// // Logical operators OR (one side must be true)

// if ($pagesRead < 0 || $pagesRead > $totalPages) {
//     echo "Error: Invalid reading progress!\n";
// }

// // Logical AND (&&) (both sides must be true)

// if ($pagesRead > 0 && $pagesRead < $totalPages) {
//     echo "Currently Reading!\n";
// }

// Final Practice
if ($pagesRead < 0 || $pagesRead > $totalPages) {
    echo "Error: Invalid reading progress!\n";
} elseif ($pagesRead == 0) {
    echo "Not Started!\n";
} elseif ($pagesRead == $totalPages) {
    echo "Finished!\n";
    // }elseif($pagesRead > 0 && $pagesRead < $totalPages){
} else {
    echo "Currently Reading!\n";
}
