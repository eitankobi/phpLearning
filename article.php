<?php

require 'includes/database.php';


//isset()-> Determine if a variable is declared and is different than NULL. 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $sql = "SELECT *
            FROM article
            WHERE id = " . $_GET['id'];


    //mysqli_query()-> Performs a query on the database
    $results = mysqli_query($conn, $sql);

    if ($results === false) {

        //mysqli_error()-> Returns a string description of the last error
        echo mysqli_error($conn);

    } else {

        $article = mysqli_fetch_assoc($results);

    }

} else {

    $article = null;
}

?>
<?php require 'includes/header.php'; ?>

    <?php if ($article === null): ?>
        <p>Article not found.</p>
    <?php else: ?>

        <article>
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['content']; ?></p>
        </article>

    <?php endif; ?>

<?php require 'includes/footer.php'; ?>