<?php
require("connectdb.php");

$id=$_POST["iddormitory"];

$sql="DELETE FROM dormitory WHERE id = $id";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาดเกิดขึ้น";
}

?>