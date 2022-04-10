<?php

require('connectdb.php');
$sql = "SELECT * FROM dormitory ORDER BY id ASC";
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
            margin: 30px;
        }

        .margin-h1 {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <body background="BgPAGEALL.png">
        <div class="font  && inner">
            <h1 class="text-center && margin-h1  ">ข้อมูลหอพักทั้งหมด</h1>
            <?php if ($count > 0) { ?>
                <form action="searchDatauser.php" class="form-group" method="POST">
                    <label for="">ค้นหาหอพัก</label>
                    <input type="text" placeholder="ชื่อหอ" name="emdname" class="form-control">
                    <input type="submit" value="Search" class="btn btn-dark my-2">
                </form>
                <table class="table table-bordered && font && margin-tb ">
                    <thead>
                        <tr class="text-center ">
                            <th>ลำดับที่</th>
                            <th>ชื่อหอพัก</th>
                            <th>ราคา</th>
                            <th>ประเภทหอพัก</th>
                            <th>รูปแบบ</th>
                            <th>เฟอร์นิเจอร์</th>
                            <th>ดูข้อมูลเพิ่มเติม</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr class="text-center">
                                <td><?php echo $order++;
                                    ["id"] ?></td>
                                <td><?php echo $row["dname"] ?></td>
                                <td><?php echo $row["price"] ?></td>
                                <td><?php echo $row["type_dorm"] ?></td>
                                <td><?php echo $row["style_dorm"] ?></td>
                                <td><?php echo $row["furniture"] ?></td>
                                
                                <td>
                                    <a href="dormshow2.php?
                                iddorm=<?php echo $row["id"]; ?>
                                " class="btn btn-info" >เพิ่มเติม </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            <?php } else { ?>
                <div class="alert alert-danger">
                    <b>ไม่มีข้อมูลหอพักงาน !!!<b>
                </div>
            <?php } ?>

            <?php if ($count > 0) { ?>

            <?php } ?>
            </form>

        </div>

    </body>

    <script>
        function checkAll() {
            var form_element = document.forms[0].length;
            for (i = 0; i < form_element - 1; i++) {
                document.forms[0].elements[i].checked = true;
            }
        }

        function uncheckAll() {
            var form_element = document.forms[0].length;
            for (i = 0; i < form_element - 1; i++) {
                document.forms[0].elements[i].checked = false;
            }
        }
    </script>
    
</html>