<?php include_once 'config/init.php'; ?>
<?php

// recipe instance - object 
$recipe = new Recipe;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];

    if($recipe->delete($del_id)){
        redirect('index.php', 'Job Deleted', 'success');
    } else {
        redirect('index.php', 'Error trying to delete job', 'error');
    }

}
// Frontpage 
$template = new Template('templates/recipe-single.php');

// Gets the id from the URL  
if (isset($_GET['id'])){
    $recipe_id = $_GET['id'];
} else {
    $recipe_id = null; 
}

// We pass it the recipe_id we get from the URL 
$template->recipe = $recipe->getRecipe($recipe_id);

// It calls the toString using the variables from above 
echo $template;