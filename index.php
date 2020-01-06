<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Algorithms PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="/src/css/main.css" rel="stylesheet">
</head>

<body>

<?php require_once 'process.php' ?>
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label>Name :</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label>Location :</label>
                <input type="text" name="location" class="form-control" placeholder="Enter your location">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
    </div>

    <script src="/src/js/main.js"></script>
</body>

</html>