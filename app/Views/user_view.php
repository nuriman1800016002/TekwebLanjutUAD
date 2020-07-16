<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>

    <h2>Tabel User</h2>
    <p>
        <button class="btn btn-primary" type="button" onclick="window.location='../user/add_new'">
            Add User
        </button>
    </p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">Nama</th>
                <th scope="col">E-mail</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $row) : ?>
                <tr>
                    <td><?= $row['user_id']; ?></td>
                    <td><?= $row['user_nama']; ?></td>
                    <td><?= $row['user_email']; ?></td>

                    <td><a href="/user/edit/<?= $row['user_id']; ?>" class="btn btn-success">Edit</a>
                        <a href="/user/delete/<?= $row['user_id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Akan Menghapus?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn btn-primary" href="<?= base_url('login/logout') ?>" role="button">Logout</a>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>