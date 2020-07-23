<?php
require('./config/config.php');
require('./config/db.php');

// Checking for Delete
if (isset($_POST['delete'])) {
    // Get Form Data
    $delete_id =
        mysqli_real_escape_string($conn, $_POST['delete_id']);


    $query = "DELETE FROM posts WHERE id = $delete_id";
    // die($query);
    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR ' . (mysqli_error($conn));
    }
}

// GET ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create query
$query = 'SELECT * from posts WHERE id =' . $id;

// Get result 
$result = mysqli_query($conn, $query);

// Fetch Data 
$post = mysqli_fetch_assoc($result);
// var_dump($posts);
// Free Result 
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);
?>

<?php include('./inc/header.php'); ?>
<div class="container">
    <h1> <?php echo $post['title']; ?> </h1>

    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Go Back</a>
    <hr>
    <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
    </form>
    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>">Edit Post</a>
</div>
<?php include('./inc/footer.php'); ?>