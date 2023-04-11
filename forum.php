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
    // Get the title and content from the form
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert the post into the database
    $sql = "INSERT INTO message (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $sql)) {
        echo "Post added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Get all the posts from the database
$sql = "SELECT * FROM message";
$result = mysqli_query($conn, $sql);

// Loop through all the posts and display them
while ($row = mysqli_fetch_assoc($result)) {
    $id_post = $row['id'];
    $post_title = $row['title'];
    $post_content = $row['content'];

    // Display the post
    echo "<h2>$post_title</h2>";
    echo "<p>$post_content</p>";

    // Get all the comments for this post
    $comment_sql = "SELECT * FROM comments WHERE id_post = $id_post";
    $comment_result = mysqli_query($conn, $comment_sql);

    // Loop through all the comments and display them
    while ($comment_row = mysqli_fetch_assoc($comment_result)) {
        $comment_content = $comment_row['content'];
        echo "<div class='comment'>$comment_content</div>";
    }

    // Add a form to submit a new comment
    echo "<form action='comment.php' method='post'>";
    echo "<input type='hidden' name='id_post' value='$id_post'>";
    echo "<label for='comment'>Add a comment:</label><br>";
    echo "<textarea name='comment' id='comment' cols='30' rows='10'></textarea><br>";
    echo "<input type='submit' value='Add Comment'>";
    echo "</form>";
}

mysqli_close($conn);
?>

	
