<?php
    // connect with database
    require('connectstar.php');

    //Get the value sent from the input and send the value in variable
    $rating = $_POST["rating"];
    $comment=$_POST["comment"];
    //save data
    $sql = "INSERT INTO comment_star(rating,comment)
     VALUES('$rating','$comment')";

    $resual = mysqli_query($connect,$sql);// run code sql
    if($resual){
        header("location:indexstar.php");
        exit(0);
    }
    else{
        echo mysqli_errno($connect);
    }
