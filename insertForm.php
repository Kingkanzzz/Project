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

<body>
    <body background="BgPAGEALL.png">
        <div class="font  && inner">
        <h1 class="text-center && margin-h1  ">บันทึกข้อมูลหอพัก</h1>
    <!-- choose the Data recording Format
        action = send information to insertdata.php
        insertdata.php = receive information
        method = send data type method post  -->
    <form action="insertdata.php" method="POST" enctype="multipart/form-data" >
        <!-- create   2 text field-->
       
        <div>
            <label for="">ชื่อหอพัก</label>
            <input type="text" name="dname" id="">
        </div>
        <div>
            <label for="">ราคา</label>
            <input type="text" name="price" id="">
        </div>
        <div>
            <label for="">ห้องที่ว่าง</label>
            <input type="text" name="status1" id="">
        </div>
        <div class="form-group">
            <label for="">ห้อง:คน</label>
            <input type="radio" name="room_people" value="1 คน">1 คน
            <input type="radio" name="room_people" value="2 คน">2 คน
            <input type="radio" name="room_people" value="3 คน">4 คน
        </div>
        <div>
            <label for="">ระยะทาง</label>
            <input type="text" name="distance" id="">
        </div>
        <div>
            <label for="">จำนวนห้องทั้งหมด</label>
            <input type="text" name="room_total" id="">
        </div>
       
        <div class="form-group">
            <label for=""> ประเภทหอพัก </label>
            <input type="radio" name="type_dorm" value="หอพักภายใน">หอพักภายใน
            <input type="radio" name="type_dorm" value="หอพักภายนอก">หอพักภายนอก
            <input type="radio" name="type_dorm" value="หอพักเครือข่าย">หอพักเครือข่าย
        </div>
        <div class="form-group">
            <label for=""> รูปแบบหอพัก </label>
            <input type="checkbox" name="style_dorm[]" value="ตึก/คอนโด">ตึก/คอนโด
            <input type="checkbox" name="style_dorm[]" value="บ้านเดี่ยว">บ้านเดี่ยว
            <input type="checkbox" name="style_dorm[]" value="บ้านคู่">บ้านคู่
        </div>
        <div class="form-group">
            <label for="">ลักษณะห้องพัก
            <input type="radio" name="room_style" value="ห้องแอร์">ห้องแอร์
            <input type="radio" name="room_style" value="ห้องพัดลม">ห้องพัดลม
            <input type="radio" name="room_style" value="ห้องพัดลม">ห้องพัดลม/ห้องแอร์
            </label>
        </div>
        
        <div class="form-group">
            <label for="">ค่าสาธารณูปโภค</label>
            <input type="radio" name="utilities" value="เหมาจ่าย">เหมาจ่าย
            <input type="radio" name="utilities" value="ไม่เหมาจ่าย">ไม่เหมาจ่าย
        </div>
        <div class="form-group">
            <input type="text" name="water_bill" value=""> ค่าน้ำ
        </div>
        <div class="form-group">
            <input type="text" name="electric_bill" value=""> ค่าไฟ
        </div>
        <div class="form-group">
            <input type="text" name="internet_bill" value=""> ค่าอินเทอร์เน็ต
        </div>
        <div class="form-group">
            <input type="text" name="total_price" value=""> เหมาจ่าย
        </div>
        <div class="form-group">
            <label for="">เฟอร์นิเจอร์/เครื่องใช้ไฟฟ้า
                <input type="checkbox" name="furniture[]" value="พัดลม">พัดลม
                <input type="checkbox" name="furniture[]" value="แอร์">แอร์
                <input type="checkbox" name="furniture[]" value="ทีวี">ทีวี
                <input type="checkbox" name="furniture[]" value="ตู้เสื้อผ้า">ตู้เสื้อผ้า
                <input type="checkbox" name="furniture[]" value="โต๊ะ">โต๊ะ
                <input type="checkbox" name="furniture[]" value="เก้าอี้">เก้าอี้
                <input type="checkbox" name="furniture[]" value="ตู้เย็น">ตู้เย็น<br>
                <input type="checkbox" name="furniture[]" value="เตารีด">เตารีด
                <input type="checkbox" name="furniture[]" value="ไมโครเวฟ">ไมโครเวฟ
                <input type="checkbox" name="furniture[]" value="เครื่องทำน้ำอุ่น">เครื่องทำน้ำอุ่น
                <input type="checkbox" name="furniture[]" value="ซิงค์ล้างจ้าน">ซิงค์ล้างจ้าน
                <input type="checkbox" name="furniture[]" value="เครื่องซักผ้า">เครื่องซักผ้า
                <input type="checkbox" name="furniture[]" value="เครื่องอบผ้า">เครื่องอบผ้า
                <input type="checkbox" name="furniture[]" value="เครื่องกดน้ำ">เครื่องกดน้ำ
            </label>
            
        
        <input type="submit" value="บันทึกข้อมูล">
        <input type="reset" value="ยกเลิกการบันทึกข้อมูล">
    </form>
    <a href="index.php">กลับสู่หน้าหลัก</a>
</div>
</div>
</body>

</html>