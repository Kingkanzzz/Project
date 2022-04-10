<?php
    // connect with database
    require('connectdb.php');


    //Get the value sent from the input and send the value in variable
    $dname = $_POST["dname"]; 
    $price = $_POST["price"];
    $status1= $_POST["status1"];
    $room_people = $_POST["room_people"]; 
    $room_total = $_POST["room_total"];
    $distance   = $_POST["distance"];
    $type_dorm= $_POST["type_dorm"];
    $emstyle_dorm=implode(",",$_POST["style_dorm"]);
    $room_style= $_POST["room_style"];
    $emfurniture=implode(",",$_POST["furniture"]);
    $utilities = $_POST["utilities"];
    $water_bill  = $_POST["water_bill"];
    $electric_bill= $_POST["electric_bill"];
    $internet_bill= $_POST["internet_bill"];
    $total_price= $_POST["total_price"];

    //save data
    $sql = "INSERT INTO dormitory(dname,price,status1,room_people,
    room_total,distance,type_dorm,style_dorm,room_style,furniture,utilities
    ,water_bill,electric_bill,internet_bill,total_price)
     VALUES('$dname','$price','$status','$room_people','$room_total','$distance'
     ,'$type_dorm','$emstyle_dorm','$room_style','$emfurniture','$utilities'
     ,'$water_bill','$electric_bill','$internet_bill','$total_price')";

    $resual = mysqli_query($connect,$sql);// run code sql
    if($resual){
        header("location:index.php");
        exit(0);
    }
    else{
        echo mysqli_errno($connect);
    }
