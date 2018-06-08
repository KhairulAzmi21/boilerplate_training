<?php

use App\Category;

function get_category()
{
    $categories = Category::get();
    return $categories;
}

function name_user()
{
    return "khairul azmi";
}
