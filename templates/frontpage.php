<?php include 'inc/header.php';?>
<div class="container">
    
    <!-- Uses a get method to access the index of the category-->
    <div class='sign'>
        <h1>Find a recipe</h1>
        <form method="GET" action="index.php">
            <select name="category" class="form-control">
                <option value="0">Choose category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                        <?php echo $category->name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" value="FIND">
        </form>
    </div>
    
    <h3><?php echo $title;?> </h3>
    <?php foreach($recipes as $recipe): ?>
    <div class="rec-container">
        <div>
            <div>
                <h4><?php echo $recipe ->recipe_title; ?></h4>
                <p><?php echo $recipe ->description;?></p>
            </div> 
            <div><a href="recipe.php?id=<?php echo $recipe->id; ?>">View</a></div>
        </div>
    </div>
    <?php endforeach; ?>
<?php include 'inc/footer.php';?>