<?php

$genre = "fantasy";

// Choose a shelf based on the book's genre;
$shelf = match ($genre) {
    "fantasy" => "Fantasy Shelf",
    "Science Fiction" => "Sci-Fi Shelf",
    "Mystery" => "Mystery Shelf",
    default => "General Shelf",
};

echo "Place book on: $shelf\n";

// Multiple values in one match arm;
$genre = "Science Fiction";

// Multiple genres can share the same shelf
$shelf = match ($genre) {
    "Fantasy", "Science Fiction" => "Speculative Fiction Shelf",
    "Mystery", "Thriller" => "Suspense Shelf",
    "Romance" => "Romance Shelf",
    default => "General Shelf",
};

echo "Place book on: $shelf\n";

// Strict comparison
$shelfNumber = "1"; // A string, not an integer

$shelf = match ($shelfNumber) {
    1 => "Fantasy Shelf",
    2 => "Mystery Shelf",
    default => "Unknown Shelf",
};

echo $shelf; // Unknown shelf because "1" === 1.;


