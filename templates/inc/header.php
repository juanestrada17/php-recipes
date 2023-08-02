<!-- Header html with cut body, that's going to go into the footer -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <nav>
            <ul class='nav-items'>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Create recipe</a></li>
            </ul>
        </nav>
            <!-- The title from the config --> 
            <h3><?php echo SITE_TITLE; ?></h3>
    </div>
    <!-- Dispkays a message of successful creation of a new recipe--> 
    <?php displayMessage(); ?>
