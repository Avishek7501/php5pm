<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="day1.css">
</head>

<body>
    <?php

    use JetBrains\PhpStorm\Language;

    if (!empty($_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $lang = $_POST['lang'];
        $country = $_POST['country'];
    } else {
        echo "empty";
    }

    ?>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Student Info</h1>
            <hr>
            <div class="col-md-4 page1">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input class="a" type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input class="a" type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <label><input type="radio" name="gender" value="male">Male</label>
                        <label><input type="radio" name="gender" value="female">Female</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="language">Language</label>
                        <label><input type="checkbox" name="lang[]" value="nepali">Nepali</label>
                        <label><input type="checkbox" name="lang[]" value="english">English</label>
                        <label><input type="checkbox" name="lang[]" value="chinese">Chinese</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="country">Country</label>
                        <select class="a" name="country" id="country" class="form-control">
                            <option disabled selected>---Select country---</option>
                            <option value="nepal">Nepal</option>
                            <option value="china">China</option>
                            <option value="us">US</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Add Record</button>
                    </div>

                </form>
            </div>
            <div class="col-md-8 page2">

                <h2>My name is: <?= $name ?></h2>
                <h2>Email:<?= $email ?></h2>
                <h2>Gender:<?= $gender ?> </h2>
                <h2>Language Spoken:<?php foreach ($lang as $language) {
                                        echo $language . "&nbsp;";
                                    }  ?></h2>
                <h2>Country:<?= $country ?> </h2>
            </div>

        </div>
    </div>
    </div>




</body>

</html>