<?php
require('connectdb.php');

$sql = "SELECT * FROM dormitory WHERE  id >=97 AND id <98";
$result=mysqli_query($connect,$sql);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo "ชื่อหอพัก = ".$row["dname"]."<br>";
    echo "ราคา = ".$row["price"]."<br>";
    echo "ห้องที่ว่าง = ".$row["status1"]."<br>";
    echo "ห้อง:คน  = ".$row[""]."<br>";
    echo "ระยะทาง = ".$row["distance"]."<br>";
    echo "จำนวนห้องทั้งหมด = ".$row["room_total"]."<br>";
    echo "ประเภทหอพัก = ".$row["type_dorm"]."<br>";
    echo "รูปแบบหอพัก = ".$row["style_dorm"]."<br>";
    echo "ลักษณะห้องพัก  = ".$row["room_style"]."<br>";
    echo "ค่าสาธารณูปโภค = ".$row["utilities"]."<br>";
    echo "ค่าน้ำ = ".$row["water_bill"]."<br>";
    echo "ค่าไฟ = ".$row["electric_bill"]."<br>";
    echo "ค่าอินเทอร์เน็ต = ".$row["internet_bill"]."<br>";
    echo "เหมาจ่าย = ".$row["total_price"]."<br>";
    echo "เฟอร์นิเจอร์ = ".$row["furniture"]."<br>";



             

?>