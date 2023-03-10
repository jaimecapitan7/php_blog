<?php
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Create Blog</title>
</head>
<body>
    <header>
        <nav class="navbar bg-primary fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="index.php">
                    Home
                </a>
                <a class="btn btn-dark" data-bs-toggle="offcanvas" href="#myMenu" role="button" aria-controls="myMenu">
                    <i class="bi bi-list"></i>
                </a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="myMenu" aria-labelledby="myMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="myMenuLabel">PHP Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <a href="create.php" class="text-decoration-none">
                                Create a new post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5 py-5">
        <form method="POST">
            <input type="text" name="title" placeholder="TITLE" class="form-control"><br><br><br>
            <textarea name="content" placeholder="Blog Content..." class="form-control my-3"></textarea>
            <button name="new_post" class="btn btn-success float-end">Add Post</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>