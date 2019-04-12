<?php

include 'Subscribe.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

Subscribe::delete($id);
