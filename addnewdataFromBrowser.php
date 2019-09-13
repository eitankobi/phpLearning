
<?php require 'includes/header.php'; ?>

<h2>New Article</h2>

<form method="post">

  <div>
      <label for="title">Title</label>
      <input type="text" name="title" id="title" placeholder="Article title">

  </div>

  <div>

      <label for="content">Content</label>
      <textarea name="content" rows="4" cols="40" id="content" placeholder="Title content"></textarea>

  </div>

  <div>
    
      <label for="published_at">Publication time and </label>
      <input type="datetime-local" name="published_at" id="published_at">

  </div>

  <button>Add</button>

</form>

<?php require 'includes/footer.php'; ?>



<!-- //////////////////  -->

<!-- Connecting with db && Inserting items on 'article' Table on 'cms' database. -->

<?php require 'includes/database.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $sql = "INSERT INTO article (title, content, published_at)
          VALUES ('" . $_POST['title'] . "',
                  '" . $_POST['content'] . "',
                  '" . $_POST['published_at'] . "')";



    //mysqli_query()-> Performs a query on the database
    $results = mysqli_query($conn, $sql);

    if ($results === false) {

        //mysqli_error()-> Returns a string description of the last error
        echo mysqli_error($conn);

    } else {

        //Takes the autogenerated id from the db.
        $id = mysql_insert_id($conn);
        echo "Inserted record with ID: ". $id;

    }

}

?>

