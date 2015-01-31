<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 2015-01-30
 * Time: 12:16
 */


include_once ('includes/connection.php');
include_once ('includes/article.php');



$article = new Article;
$articles = $article->fetch_all();



?>

<html>
<head>

<title><?php echo $pagetitle ?></title>
    <link rel="stylesheet" href="includes/templates/default/style.css" />
</head>
<body>
<div class="container">

    <a href="index.php" id="Logo"><?php echo $pagetitle ?></a>
<ol>
    <?php foreach ($articles as $article) { ?>
    <li>
        <a href="article.php?id=<?php echo $article['article_id']; ?>">
            <?php echo $article['article_title']; ?>
        </a>
        - <small>
            dodano <?php echo date('l jS', $article['article_timestamp']); ?>
        </small>
    </li>
    <?php } ?>
</ol>

    <br />
    <small><a href="admin">admin</a></small>


</div>





</body>
</html>