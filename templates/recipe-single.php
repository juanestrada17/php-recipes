<?php include 'inc/header.php'; ?>

    <h2><?php echo $recipe->recipe_title; ?></h2>
    <p><?php echo $recipe->post_date; ?></p>
    <h2>Ingredients</h2>
    <p><?php echo $recipe->ingredients; ?></p>
    <p><?php echo $recipe->instructions; ?></p>

    <a href="index.php">Go back </a>

    <div>
        <a href="edit.php?id=<?php echo $recipe->id; ?>"> Edit</a>
        <form method="post" action="recipe.php">
            <input type='hidden' name="del_id" value="<?php echo $recipe->id; ?>">
            <input type='submit' value="Delete">
        </form>
    </div>
    

<?php include 'inc/footer.php'; ?>