<?php
require('connectdb.php');
$id=$_GET["id"];

$sql ="SELECT * FROM dormitory WHERE id = $id";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($result);
$furniture_arr=array("พัดลม","แอร์","ทีวี","ตู้เสื้อผ้า","โต๊ะ","เก้าอีีิ","ตู้เย็น","เตารีด","ไมโครเวฟ","เครื่องทำน้ำอุ่น","ซิงค์ล้างจาน","เครื่องซักผ้า","เครื่องอบผ้า","เครื่องกดน้ำ","xxxeee"); 
$style_dorm_arr=array("ตึก/คอนโด","บ้านเดี่ยว","บ้านคู่");

?>
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
</head>

<body>
    <!-- -->
    <div class="container" >
    
    <h2 class="text-center" class="d-flex vh-100" >แก้ไขข้อมูลหอ</h2>
    <!-- choose the Data recording Format
        action = send information to insertdata.php
        insertdata.php = receive information
        method = send data type method post  -->
    <form action="updatedata.php" method="POST"  >
        <!-- create   2 text field-->
       
        <div class="form-group">
            <label for="">ชื่อหอพัก</label>
            <input type="text" name="dname" id="" class="form-control" value="<?php echo $row["dname"];?>">
        </div>
        <div class="form-group">
            <label for="">ราคา</label>
            <input type="text" name="price" id="" class="form-control" value="<?php echo $row["price"];?>">
        </div>
        <div class="form-group">
            <label for="">ห้องที่ว่าง</label>
            <input type="text" name="status1" id="" class="form-control" value="<?php echo $row["status1"];?>">
        </div>
        <div class="form-group">
                <label for=""> ห้อง:คน </label>
                <?php
                if ($row["room_people"] == "1 คน") {
                    echo "<input type='radio' name='room_people' value='1 คน'checked>1 คน";
                    echo "<input type='radio' name='room_people' value='2 คน'>2 คน";
                    echo "<input type='radio' name='romm_people' value='4 คน'>4 คน";
                } else if ($row["room_people"] == "2 คน") {
                    echo "<input type='radio' name='room_people' value='1 คน'>1 คน";
                    echo "<input type='radio' name='room_people' value='2 คน'checked>2 คน ";
                    echo "<input type='radio' name='room_people' value='4 คน'>4 คน";
                } else if ($row["room_people"] == "4 คน") {
                    echo "<input type='radio' name='room_people' value='1 คน'>1 คน";
                    echo "<input type='radio' name='room_people' value='2 คน'>2 คน";
                    echo "<input type='radio' name='room_people' value='4 คน'checked>4 คน";
                } else {
                    echo "<input type='radio' name='room_people' value='1 คน'>1 คน";
                    echo "<input type='radio' name='room_people' value='2 คน'>2 คน";
                    echo "<input type='radio' name='room_people' value='4 คน' >4 คน";
                }
                ?>
            </div>
        <div class="form-group">
            <label for="">ระยะทาง</label>
            <input type="text" name="distance" id="" class="form-control" value="<?php echo $row["distance"];?>">
        </div>
        <div class="form-group">
            <label for="">จำนวนห้องทั้งหมด</label>
            <input type="text" name="room_total" id="" class="form-control" value="<?php echo $row["room_total"];?>">
        </div>
       
        <div class="form-group">
            <label for=""> ประเภทหอพัก </label>
            <?php
                if($row["type_dorm"] == "หอพักภายใน"){
                    echo "<input type='radio' name='type_dorm' value='หอพักภายใน' checked>หอพักภายใน";
                    echo "<input type='radio' name='type_dorm' value='หอพักภายนอก'>หอพักภายนอก";
                    echo "<input type='radio' name='type_dorm' value='หอพักเครือข่าย'>หอพักเครือข่าย";
                }else if($row["type_dorm"] == "หอพักภายนอก"){
                    echo "<input type='radio' name='type_dorm' value='หอพักภายใน'>หอพักภายใน";
                    echo "<input type='radio' name='type_dorm' value='หอพักภายนอก' checked>หอพักภายนอก";
                    echo "<input type='radio' name='type_dorm' value='หอพักเครือข่าย'>หอพักเครือข่าย";
                }else if ($row["type_dorm"] == "หอพักเครือข่าย"){
                    echo "<input type='radio' name='type_dorm' value='หอพักภายใน'>หอพักภายใน";
                    echo "<input type='radio' name='type_dorm' value='หอพักภายนอก'>หอพักภายนอก";
                    echo "<input type='radio' name='type_dorm' value='หอพักเครือข่าย' checked>หอพักเครือข่าย";
                }
                else {
                    echo "<input type='radio' name='type_dorm' value='หอพักภายใน'>หอพักภายใน";
                    echo "<input type='radio' name='type_dorm' value='หอพักภายนอก'>หอพักภายนอก";
                    echo "<input type='radio' name='type_dorm' value='หอพักเครือข่าย' >หอพักเครือข่าย";
                }
                ?>
        </div>
        <div class="form-group">
                <label for="">รูปแบบหอพัก</label>
                <?php 
                $style_dorm=explode(",",$row["style_dorm"]); 
                
                foreach($style_dorm_arr as $value){
                    if(in_array($value,$style_dorm)){
                        echo "<input type='checkbox' name='style_dorm[]' value='$value' checked> $value";
                    }else{
                        echo "<input type='checkbox' name='style_dorm[]' value='$value'> $value";
                    }
                }
                ?>
            </div>
        <div class="form-group">
        <label for=""> ลักษณะห้องพัก </label>
            <?php
                if($row["room_style"] == "ห้องแอร์"){
                    echo "<input type='radio' name='room_style' value='ห้องแอร์' checked>ห้องแอร์";
                    echo "<input type='radio' name='room_style' value='ห้องพัดลม'>ห้องพัดลม";
                }else if ($row["room_style"] == "ห้องพัดลม"){
                    echo "<input type='radio' name='room_style' value='ห้องแอร์'>ห้องแอร์";
                    echo "<input type='radio' name='room_style' value='ห้องพัดลม' checked>ห้องพัดลม";
                }
                else {
                    echo "<input type='radio' name='room_style' value='ห้องแอร์'>ห้องแอร์";
                    echo "<input type='radio' name='room_style' value='ห้องพัดลม' >ห้องพัดลม";
                }
                ?>
        </div>
        <div class="form-group">
        <label for=""> ค่าสาธารณูปโภค </label>
            <?php
                if($row["utilities"] == "เหมาจ่าย"){
                    echo "<input type='radio' name='utilities' value='เหมาจ่าย' checked>เหมาจ่าย";
                    echo "<input type='radio' name='utilities' value='ไม่เหมาจ่าย'>ไม่เหมาจ่าย";
                }else if ($row["utilities"] == "ไม่เหมาจ่าย"){
                    echo "<input type='radio' name='utilities' value='เหมาจ่าย'>เหมาจ่าย";
                    echo "<input type='radio' name='utilities' value='ไม่เหมาจ่าย' checked>ไม่เหมาจ่าย";
                }
                else {
                    echo "<input type='radio' name='utilities' value='เหมาจ่าย'>เหมาจ่าย";
                    echo "<input type='radio' name='utilities' value='ไม่เหมาจ่าย' >ไม่เหมาจ่าย";
                }
                ?>
        </div>
        <div class="form-group" >
            <label for=""></label>
            <input type="text" name="water_bill" id="" class="form-control" value="<?php echo $row["water_bill"];?>">ค่าน้ำ
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="text" name="electric_bill" id="" class="form-control" value="<?php echo $row["electric_bill"];?>">ค่าไฟ
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="text" name="internet_bill" id="" class="form-control" value="<?php echo $row["internet_bill"];?>">ค่าอินเทอร์เน็ต
        </div>
        <div class="form-group">
            <label for=""></label>
            <input type="text" name="total_price" id="" class="form-control" value="<?php echo $row["total_price"];?>">เหมาจ่าย
        </div>
        <div class="form-group">
                <label for="">เฟอร์นิเจอร์</label>
                <?php 
                $furniture=explode(",",$row["furniture"]); 
                
                foreach($furniture_arr as $value){
                    if(in_array($value,$furniture)){
                        echo "<input type='checkbox' name='furniture[]' value='$value' checked> $value";
                    }else{
                        echo "<input type='checkbox' name='furniture[]' value='$value'> $value";
                    }
                }
                ?>
            </div>
        <input type="submit" value="อัปเดตข้อมูล" class="btn btn-info" >
        <input type="reset" value="ล้างการบันทึกข้อมูล" class="btn btn-info">
    
    <a href="index.php" class="btn btn-info" >กลับสู่หน้าหลัก</a>
    </form>
</div>
</body>
</html>