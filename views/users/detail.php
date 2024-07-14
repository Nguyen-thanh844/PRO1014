<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>userDetail</title>
</head>

<body>
    <h1>Chi tiết người dùng: <?= $user['name'] ?> </h1>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
        </thead>
        </tr>
        <tbody>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>