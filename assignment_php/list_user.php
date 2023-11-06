<?php
require_once 'DB.php';
require_once 'userForm.php';

$db = new DB();
$userForm = new UserForm($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $userForm->saveUser($name, $email, $gender, $city);
}

$userForm->displayUsers();
?>


