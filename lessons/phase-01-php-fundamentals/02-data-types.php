<?php

$bookTitle = "Dune";
$totalPages = 412;
$averageRating = 4.8;
$currentlyReading = true;

// Inspect the type and value
var_dump($bookTitle);
var_dump($totalPages);
var_dump($averageRating);
var_dump($currentlyReading);

// Conversion
// Page Count as text
$pageCount = "412";

// Convert Str to Int
$totalPages = (int) $pageCount;

// Inspect both values
var_dump($pageCount);
var_dump($totalPages);

// Example
$ratingInput = "4.8";

$averageRating = (float) $ratingInput;

var_dump($averageRating);
