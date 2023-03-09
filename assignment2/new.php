<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>superhuman Registration</title>
    </head>

    <body>
        <div class="container">
            <header class="mt-3">
                <h1>Superhuman Registration Form</h1>

                <p>
                    <a href="./index.php">Back to index</a>
                </p>
            </header>

            <hr>

            <form class="mt-5" action="./create.php" method="post" novalidate>
                <div class="form-group mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" required max="30" class="form-control" placeholder="Spiderman">
                </div>

                <div class="form-group mb-3">
                    <label for="first_name">Name:</label>
                    <input type="text" name="name" required max="30" class="form-control" placeholder="Peter Parker">
                </div>

                <div class="form-group mb-3">
                    <label for="superpowers">Powers:</label>
                    <input type="text" name="superpowers" required max="30" class="form-control" placeholder="webbing">
                </div>

                <div class="form-group mb-3">
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </body>
</html>