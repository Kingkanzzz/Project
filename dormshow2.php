<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Update
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .fff{
            font-size: x-large;
            color: aliceblue;   
        }
        .margin{
            margin-top: 30px;
        }
    </style>
</head>

<body background="BgPAGEALL.png">
    
<div class="container  " >

    
    <h2 class="text-center && fff && margin   ">ข้อมูลหอ</h2>
    <div class="fff">
    <div align="center">
             <br>
              <img src="7799.jpg" width="400">
            </div>
    <?php
    
require('connectdb.php');

$sql = "SELECT * FROM dormitory WHERE  id=".$_GET["iddorm"];
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
</div>
</div>
</body>

</html>
