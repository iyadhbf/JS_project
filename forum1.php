<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forum Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background-color: #FFFFFF;
            color: white;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #ffffff;
        }

        nav li {
            float: left;
        }

        nav li a {
            display: block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li span {
            display: block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }


        nav li a:hover {
            background-color: #ddd;
            color: black;
        }

        main {
            padding: 20px;
        }

        .post {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .post h2 {
            margin-top: 0;
        }

        .post .labels {
            margin-bottom: 10px;
        }

        .post .reply-form {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .post .reply-form textarea {
            width: 100%;
            height: 100px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <a id="logo" href="index.php">
          <img src="img/isik.png" alt="Logo" />
        </a>
        <?php
       
        if(isset($_SESSION["username"])){
        $navbar='<nav>
          <ul>
            <li><a href="presentation.html">Our Institute</a></li>
            <li><a href="">Student Life</a></li>
            <li><a href="forum1.php">Forum</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><span> Hello, ' . $_SESSION["username"] . '</span></li>
          </ul>
        </nav>';
        } else  {
          $navbar='<nav>
          <ul>
            <li><a href="presentation.html">Our Institute</a></li>
            <li><a href="">Student Life</a></li>
            <li><a href="forum1.php">Forum</a></li>
            <li><a href="login1.php">Sign in</a></li>
          </ul>
        </nav>';
        }
        echo $navbar;
        ?>
        </header>
    <main>
        <form action="forum.php" method="POST" id="post-form">
            <h2>Create a new post</h2>
            <label for="post-title">Post Title:</label>
            <input type="text" id="post-title" name="post-title"  required>
            <br>
            <label for="post-content">Post Content:</label>
            <textarea id="post-content" name="post-content" required></textarea>
            <br>
            
            <button type="submit">Submit Post</button>
        </form>
        <div id="posts-container"></div>
    </main>
   
    <!-- <script>
        const postForm = document.getElementById('post-form');
        const postsContainer = document.getElementById('posts-container');

        postForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const postTitle = document.getElementById('post-title').value;
            const postContent = document.getElementById('post-content').value
           
        createPost(postTitle, postContent);
        postForm.reset();
    });

    function createPost(title, content, category) {
        const post = document.createElement('div');
        post.classList.add('post');

        const postLabels = document.createElement('div');
        postLabels.classList.add('labels');
        postLabels.textContent = `Category: ${category}`;

        const postTitle = document.createElement('h2');
        postTitle.textContent = title;

        const postContent = document.createElement('p');
        postContent.textContent = content;

        const replyForm = document.createElement('div');
        replyForm.classList.add('reply-form');
        replyForm.innerHTML = `
            <h3>Reply to this post</h3>
            <form action="forum1.php" >
                <label for="reply-content">Reply Content:</label>
                <textarea id="reply-content" name="reply-content" required></textarea>
                <br>
                <button type="submit">Submit Reply</button>
            </form>
        `;

        const replyFormSubmit = replyForm.querySelector('form');
        replyFormSubmit.addEventListener('submit', (event) => {
            event.preventDefault();
            const replyContent = replyForm.querySelector('#reply-content').value;
            createReply(replyContent);
            replyFormSubmit.reset();
        });

        function createReply(content) {
            const reply = document.createElement('div');
            reply.classList.add('reply');

            const replyContent = document.createElement('p');
            replyContent.textContent = content;

            reply.appendChild(replyContent);
            post.appendChild(reply);
        }

        post.appendChild(postLabels);
        post.appendChild(postTitle);
        post.appendChild(postContent);
        post.appendChild(replyForm);
        postsContainer.appendChild(post);
    }
</script> -->
</body>
</html>
