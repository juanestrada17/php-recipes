<?php include_once "config/init.php"; ?>

<?php

$recipe = new Recipe;

if (isset($_POST['submit'])) {
    $data = array();
    $data['category_id'] = $_POST['category_id'];
    $data['ingredients'] = $_POST['ingredients'];
    $data['recipe_title'] = $_POST['recipe_title'];
    $data['description'] = $_POST['description'];
    $data['instructions'] = $_POST['instructions'];
    

    if($recipe->create($data)){
        redirect('index.php', 'Your job has been listed',  'success');
    } else {
        redirect('index.php', 'Something went wrong creating the recipe',  'error');
    }
    
} 

$template = new Template("templates/recipe-create.php");

$template->categories = $recipe->getAllCategories();

echo $template;