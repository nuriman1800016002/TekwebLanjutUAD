<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <form action="/user/save" method="POST">
        <h3>Add User</h3>
        <p>
            <input type="text" name="user_id" placeholder="ID User"><br>
            <input type="text" name="user_nama" placeholder="Nama"><br>
            <input type="text" name="user_email" placeholder="E-mail"><br>
        </p>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</body>

</html>