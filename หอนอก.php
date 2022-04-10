<?php

require('connectdb.php');
$sql = "SELECT * FROM dormitory WHERE type_dorm = 'หอพักภายนอก' ORDER BY dname ASC";
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
        .inner {
            margin:30px;        
        }
        .margin-h1 {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <body background="BgPAGEALL.png">
        <div class="font  && inner">

            <h1 class="text-center && margin-h1  ">ข้อมูลหอพักภายนอก</h1>

            <?php if ($count > 0) { ?>

                <table class="table table-bordered && font && margin-tb ">
                    <thead >
                        <tr class="text-center ">
                        <th>ลำดับที่</th>
                        <th>ประเภทหอพัก</th>
                        <th>ชื่อหอพัก</th>
                        <th>ราคา</th>
                        <th>ระยะทาง</th>
                        <th>เฟอร์นิเจอร์</th>
                        
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr class="text-center">
                            <td><?php echo $order++ ;["id"] ?></td>
                            <td><?php echo $row["type_dorm"] ?></td>
                            <td><?php echo $row["dname"] ?></td>
                            <td><?php echo $row["price"] ?></td>
                            <td><?php echo $row["distance"] ?></td>
                            <td><?php echo $row["furniture"] ?></td>

                        </tr>
                    <?php } ?>
                    </tbody>
            </table>

        <?php } else { ?>
            <div class="alert alert-danger">
                <b>ไม่มีข้อมูลหอพัก!!!<b>
            </div>
        <?php } ?>
        <a href="HOME1.php" class="btn btn-success">หน้าแรก</a>

        </form>
        
        </div>
        
    </body>
</html>