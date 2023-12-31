<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['mrg'] = "You must log in frist";
        header('location: login.php');
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>

        <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="homeheader">
    <h2>Home page</h2>
</div>

<div class="homecontent">
    <!-- notification message -->
    <?php if (isset($_SESSION['succes'])) : ?>
        <div class="success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>     
        <?php endif ?>   
     
    <!-- logged in user information -->
    <?php if(isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
</div>  

</body>
</html>