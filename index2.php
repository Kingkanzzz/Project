<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <div>
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
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
        <?php if (isset($_SESSION['username'])) : ?>
            <body align="center">
            <p style="color:beige"> <font size = "6">Welcome</font><strong> &nbsp; <?php echo $_SESSION['username']; ?></strong></p></h2>
            <p><a href="index2.php?logout='1'" style="color: #CCFFFF;">Logout</a></p>
            <p><a href="index.php" style="color: red;">ข้อมูลหอพัก</a></p>
            </body>
        <?php endif ?>
    </div>

</body>
</html>