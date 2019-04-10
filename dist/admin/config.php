<?php

$db = parse_ini_file('../../../config.ini');

$dbh = "mysql:dbname={$db['name']};host={$db['host']};charset=utf8mb4";
