<?php

session_start();

include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
    // pokaz index
} else {
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty ($username) or empty($password)) {
            $error = 'All fields are required!';
        }

    }
    ?>

    <html>
<head>

    <title><?php echo $pagetitle ?></title>
    <link rel="stylesheet" href="../includes/templates/default/style.css" />
</head>
<body>
<div class="container">

    <a href="index.php" id="Logo"><?php echo $pagetitle ?> | admin panel</a>
    <br /><br />



    <form action="index.php" method="post" autocomplete="off">

        <input type="text" name="username" placeholder="Username"/>
        <input type="password" name="password" placeholder="Password"/>
        <input type="submit" value="Login" />


    </form>
    <?php if (isset($error)) { ?>
        <small style="color:#aa0000;"><?php echo $error; ?></small>
        <br/>
    <?php } ?>

    <br/>
    <a href="../index.php">&larr; Wstecz</a>

</div>

</body>
    </html>


<?php

}


?>