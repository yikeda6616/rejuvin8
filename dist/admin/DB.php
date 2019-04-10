<?php


function connect()
{
    try {
        $db = parse_ini_file('../../../config.ini');
        $dbh = "mysql:dbname={$db['name']};host={$db['host']};charset=utf8mb4";
        $pdo = new PDO(
            $dbh,
            $db['user'],
            $db['pass'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );

        return $pdo;
    } catch (PDOException $e) {
        header('Content-Type: text/plain; charset=UTF-8', true, 500);
        exit($e->getMessage());
    }
}
