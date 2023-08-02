<?php include_once 'config/init.php'; ?>
<?php

// recipe instance - object 
$recipe = new Recipe;
// Frontpage 
$template = new Template('templates/frontpage.php');


// $category = isset($_GET['category']) ? $_GET['category'] : null;
// gets the value from the name='category' of the form
if (isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    $category = null;
}

// if category is true 
if($category){
    // get a recipe depending on its id
    $template->recipes = $recipe->getByCategory($category);
    // get categories in the select for all pages 
    $template->categories =$recipe->getAllCategories();
    
    $template->title = 'Latest Recipes with '.$recipe->getCategory($category)->name;
} else {
    // all recipes on the screen 
    $template->recipes = $recipe->getAllRecipes();
    // All categories in the select
    $template->categories =$recipe->getAllCategories(); 
    $template->title = 'Latest Recipes';
}

// It calls the toString using the variables from above 
echo $template;

