<?php
require_once "connection.php";
if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $query= "INSERT INTO students(name,email,address,gender,phone)
            VALUES('$name','$email','$address','$gender','$phone')";
    $response = mysqli_query($connection , $query);
    if ($response) {
        $_SESSION['success'] = "Data was inserted";
        header('Location:form.php');
    } else {
       $_SESSION['error'] = "Data not inserted";
        header('Location:form.php');
    }
} else {
    $_SESSION['error'] = "Invalid access";
    header('Location:form.php');

}