<?php
require_once "connection.php";

$sQuery = "SELECT * FROM students ORDER BY id";
$sResponse = mysqli_query($connection, $sQuery);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-4" style="border:1px solid; padding:5px;">
            <form action="insert.php" method="POST">
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Gender</label>
                    <label><input type="radio" name="gender" id="gender" value="male">male</label>
                    <label><input type="radio" name="gender" id="gender" value="female">female</label>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" >
                </div>
                <div>
                    <button class="btn btn-success">Submit</button>
                </div>

            </form>
        </div>
        <div class="col-md-8">
            <table class="table table-hover" style="border: 1px black solid">
                    <thead>
                    <tr>
                        <th>S.n</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($sResponse as $key => $student) : ?>
                        <?php $id=$student['id']; ?>
                        <tr>
                            <td><?= ++$key; ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['gender'] ?></td>
                            <td><?= $student['phone'] ?></td>
                            <td><?= $student['address'] ?></td>
                            <td style="display: flex; gap:1rem;">
                                <a href="edit.php?id=<?=$id?>" class="btn btn-success">Edit</a>
                                <a href="delete.php?id=<?=$id?>" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>
</body>


