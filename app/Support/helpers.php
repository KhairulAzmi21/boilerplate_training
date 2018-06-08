<?php 

use App\Category;

function get_category(){

	
	$categories = Category::get();

	// $categories = App\Category::get();

	return $categories;
}

function name_user(){
	return "khairul azmi";
}