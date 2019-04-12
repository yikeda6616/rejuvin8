<?php

include './function.php';
include './Subscribe.php';

// Validate

$subscribe = new Subscribe();

$name = $subscribe->sanitizeName();
$email = $subscribe->sanitizeEmail();

$valid_name = $subscribe->validateName($_POST['name']);
$valid_email = $subscribe->validateEmail($_POST['email']);

if ($valid_name && $valid_email) {
    $subscribe->add($name, $email);
}
