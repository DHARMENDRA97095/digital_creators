<?php
function createSlug($string)
{
    $slug = strtolower($string);              // lowercase
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug); // remove special chars
    $slug = preg_replace('/\s+/', '-', $slug); // spaces → hyphen
    $slug = trim($slug, '-');                  // trim -

    return $slug;
}
