<?php include 'inc/header.php'; ?>
    <h2>Edit a recipe </h2>
    <form method="post" action='edit.php?id=<?php echo $recipe->id;?>'>

        <div>
            <label>Category</label>
            <select name="category_id">
                <option value=0>Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <!-- If the current recipe matches the current category then mark it as selected, else, display
                    select default-->
                    <?php if($recipe->category_id == $category->id) : ?>
                        <option value="<?php echo $category->id; ?>" selected>
                        <?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo 
                            $category->name; ?></option>
                    <?php endif; ?>                
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label>Recipe title</label>
            <input type="text" name="recipe_title" value="<?php echo $recipe->recipe_title; ?>">
        </div>

        <div>
            <label>Ingredients</label>
            <textarea name="ingredients"><?php echo $recipe->ingredients;?></textarea>
        </div>

        <div>
            <label>Description</label>
            <textarea name="description"><?php echo $recipe->description;?></textarea>
        </div>

        <div>
            <label>Instructions</label>
            <textarea name="instructions"><?php echo $recipe->instructions;?></textarea>
        </div>

        

        <input type="submit" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>