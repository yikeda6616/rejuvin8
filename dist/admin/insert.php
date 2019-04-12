<?php

include './function.php';
include './Subscribe.php';

// Validate

$subscribe = new Subscribe();

$name = $subscribe->validateName($_POST['name']);

$email = $subscribe->validateEmail($_POST['email']);

$subscribe->add($name, $email);
