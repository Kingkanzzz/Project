<?php i
    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first";
        header(['location: login1.php']);
    }
    if(!isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login1.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>
    <div class="header">
        <h3>HOME page</h3>
    </div>
    <div class="content">
        <?php if(isset($_SESSION['username']));?>
        <p>welcome <strong><?php echo $_SESSION['username']?>
        </strong></p>
        <p><a href="index.php?loogout='1'" style="color: red;">logout</a></p>
        <?php endif ?>
    </div>
    </form>

</body>

</html>