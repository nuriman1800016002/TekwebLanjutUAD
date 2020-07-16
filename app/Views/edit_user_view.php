<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Edit User</title>
</head>

<body>
    <form action="/user/update" method="post">
        <h3>Edit User</h3>
        <p>
            <input type="text" name="user_id" value="<?= $user->user_id; ?>" disabled><br>
            <input type="text" name="user_nama" value="<?= $user->user_nama; ?>"><br>
            <input type="text" name="user_email" value="<?= $user->user_email; ?>"><br>
        </p>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>

</body>

</html>