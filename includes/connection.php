<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 2015-01-30
 * Time: 14:38
 */
$pagetitle = "silentCMS";
try {


    $pdo = new PDO('mysql:host=localhost;dbname=wcms', 'root', 'Misiu1987');
} catch (PDOException $e) {
    exit('Brak połączenia z bazą');
}
