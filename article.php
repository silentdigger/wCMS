<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 2015-01-30
 * Time: 15:33
 */


include_once ('includes/connection.php');
include_once ('includes/article.php');

$article = new Article();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    ?>
    <html>
    <head>

        <title><?php echo $pagetitle ?></title>
        <link rel="stylesheet" href="includes/templates/default/style.css" />
    </head>
    <body>
    <div class="container">

        <a href="index.php" id="Logo"><?php echo $pagetitle ?></a>

        <h4><?php echo $data['article_title'] ?> -
            <small>
                 <?php echo date('l jS', $data['article_timestamp']) ?>
            </small>

        </h4>

        <p><?php echo $data['article_content']; ?></p>

        <a href="index.php">&larr; Wstecz</a>

    </div>





    </body>
    </html>



<?php

} else {
    header('Location: index.php');
    exit();

}