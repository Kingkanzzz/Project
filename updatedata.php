<?php
    // connect with database
    require('connectdb.php');
    $id=$_POST["id"];

    //Get the value sent from the input and send the value in variable
    $dname = $_POST["dname"]; 
    $price = $_POST["price"];
    $status1= $_POST["status1"];
    $room_people = $_POST["room_people"]; 
    $distance   = $_POST["distance"];
    $room_total = $_POST["room_total"];
    $type_dorm= $_POST["type_dorm"];
    $emstyle_dorm=implode(",",$_POST["style_dorm"]);
    $room_style= $_POST["room_style"];
    $utilities = $_POST["utilities"];
    $water_bill  = $_POST["water_bill"];
    $electric_bill= $_POST["electric_bill"];
    $internet_bill= $_POST["internet_bill"];
    $total_price= $_POST["total_price"];
    $emfurniture=implode(",",$_POST["furniture"]);

    $sql = "UPDATE dormitory SET dname = '$dname' , price = '$price' , status1 = '$status1' 
    ,room_people = '$room_people',distance = '$distance' ,room_total = '$room_total' , type_dorm ='$type_dorm'
    ,style_dorm='$emstyle_dorm',utilities='$utilities',water_bill='$water_bill',electric_bill='$electric_bill',internet_bill='$internet_bill'
    ,total_price='$total_price', furniture = '$emfurniture'  WHERE id = $id ";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น".mysqli_error($connect);
}
?>