<?php

// Reading progress for Dune
$totalPages = 300;
$pagesRead = 75;

// Calculate how many pages remain
$pagesRemaining = $totalPages - $pagesRead;

echo "Pages remaining: $pagesRemaining\n";

// Multiplication and division
// Calculate reading progress as a percentage
$progress = ($pagesRead / $totalPages) * 100;

// Formatting Numbers
echo "Reading progress: " . number_format($progress, 2) . "%\n";

// Assignment operators
$pagesRead += 30;
$pagesRead += 25;

echo "$pagesRead\n";

// modulo operator %
$totalBooks = 14;
$bookShelf = 5;
$booksRemaining = $totalBooks % $bookShelf;

echo "Books left over: $booksRemaining\n";
