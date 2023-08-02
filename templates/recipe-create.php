<?php include 'inc/header.php'; ?>
    <h2>Create a new recipe </h2>
    <form method="post" action='create.php'>

        <div>
            <label>Category</label>
            <select name="category_id">
                <option value=0>Choose Category</option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label>Recipe title</label>
            <input type="text" name="recipe_title">
        </div>

        <div>
            <label>Ingredients</label>
            <textarea name="ingredients"></textarea>
        </div>

        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label>Instructions</label>
            <textarea name="instructions"></textarea>
        </div>

        

        <input type="submit" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>