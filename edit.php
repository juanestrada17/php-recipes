<?php include_once "config/init.php"; ?>

<?php

$recipe = new Recipe;

if (isset($_GET['id'])){
    $recipe_id = $_GET['id'];
} else {
    $recipe_id = null; 
}

if (isset($_POST['submit'])) {
    $data = array();
    $data['category_id'] = $_POST['category_id'];
    $data['ingredients'] = $_POST['ingredients'];
    $data['recipe_title'] = $_POST['recipe_title'];
    $data['description'] = $_POST['description'];
    $data['instructions'] = $_POST['instructions'];
    

    if($recipe->update($recipe_id, $data)){
        redirect('index.php', 'Your job has been Updated',  'success');
    } else {
        redirect('index.php', 'Something went wrong creating the recipe',  'error');
    }
    
} 

$template = new Template("templates/recipe-edit.php");


// Access the id of the recipe and sets it to a $recipe_id variable


// gets the recipe using it's id
$template->recipe = $recipe->getRecipe($recipe_id);
$template->categories = $recipe->getAllCategories();
echo $template;