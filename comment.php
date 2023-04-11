<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "js project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the post ID and comment from the form
    $post_id = $_POST['id_post'];
    $comment = $_POST['comment'];

    // Insert the comment into the database
    $sql = "INSERT INTO comments (id_post, content) VALUES ($post_id, '$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "Comment added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
