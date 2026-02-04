<?php
function createSlug(string $text): string
{
    //  Convert to lowercase
    $text = strtolower($text);

    //  Remove special characters
    $text = preg_replace('/[^a-z0-9\s-]/', '', $text);

    //  Replace spaces with hyphen
    $text = preg_replace('/[\s-]+/', '-', $text);

    //  Trim hyphens
    return trim($text, '-');
}

// Example
$title = "Create Slug in PHP – Easy!";
echo createSlug($title);
