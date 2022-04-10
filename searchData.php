<?php

require('connectdb.php');
$name = $_POST["emdname"];
$sql = "SELECT * FROM dormitory WHERE dname LIKE '%$name%' ORDER BY dname ASC";
$result = mysqli_query($connect, $sql);
$count = mysqli_num_rows($result);
$order = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>
        save data
    </title>
    <style>
        .font {
            color: whitesmoke;
            size: 10cm;
        }

        .margin-tb {
            margin-top: 40px;
        }
        .margin-h1 {
            margin-top: 40px;
        }
        .inner {
            margin:30px;        
        }
    </style>
</head>

<body>
    <body background="BgPAGEALL.png">
        <div class="font  && inner">
        <h1 class="text-center && margin-h1  ">ข้อมูลหอพัก</h1>
        <?php if ($count > 0) { ?>
            <form action="searchData.php" class="form-group" method="POST">
        <label for="">ค้นหาหอพัก</label>
        <input type="text" placeholder="ชื่อหอ" name="emdname" class="form-control">
        <input type="submit" value="Search" class="btn btn-dark my-2">
    </form>
    <table class="table table-bordered && font && margin-tb ">
        <thead >
            <tr class="text-center ">
            <th>ลำดับที่</th>
            <th>ชื่อหอพัก</th>
            <th>ราคา</th>
            <th>ระยะทาง</th>
            <th>ประเภทหอพัก</th>
            <th>เฟอร์นิเจอร์</th>
            <th>แก้ไขข้อมูล</th>
            <th>ลบข้อมูล</th>
            <th class="text-center">ลบข้อมูล<br>(เลือกแถวที่ต้องการ)</th>
            </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr class="text-center ">
                            <td><?php echo $order++ ;["id"] ?></td>
                            <td><?php echo $row["dname"] ?></td>
                            <td><?php echo $row["price"] ?></td>
                            <td><?php echo $row["distance"] ?></td>
                            <td><?php echo $row["type_dorm"] ?></td>
                            <td><?php echo $row["furniture"] ?></td>
                            <td>
                                <a href="editdata.php?id=<?php echo $row["id"]?>" class="btn btn-info"> 
                                แก้ไขข้อมูล</a>
                            </td>
                                
                            <td>
                                <a href="DeleteQueryStr.php?
                                iddorm=<?php echo $row["id"]; ?>
                                " class="btn btn-info" onclick="return confirm('ยืนยันการลบข้อมูล')">ลบข้อมูล </a>
                            </td>
                            <form action="multipleDel.php" method="post">
                                <td>
                                    <input type="checkbox" class="" name="idcheckbox[]" value="<?php echo $row["id"]; ?>">
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger">
                <b>ไม่พบข้อมูลหอพัก !!!<b>
            </div>
        <?php } ?>
        <a href="index.php" class="btn btn-success">หน้าแรก</a>
        <?php if ($count > 0) { ?>
            <input type="submit" value="ลบข้อมูล(Checkbox)" class="btn btn-danger">
            <?php } ?>
        </form>
        <button class="btn btn-dark" onclick="checkAll()">เลือกทั้งหมด </button>
        <button class="btn btn-info" onclick="uncheckAll()">ยกเลิกค่ะ</button>
        </div>
    </body>

    <script>
function checkAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=true;
    }
}
function uncheckAll(){
    var form_element=document.forms[1].length; 
    for(i=0;i<form_element-1;i++){
        document.forms[1].elements[i].checked=false;
    }
}
    </script>

</html>