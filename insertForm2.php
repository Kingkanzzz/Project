<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
    </head>
    <style>
        body {
            background-image: url('3.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        } 
        ul.center {
            position: absolute;
            top: 0em;
            left: 23em;
            width: 20em }
        
        ul.centerlow {
            position: absolute;
            top: 10em;
            left: 23em;
            width: 20em }

        ul.righttop {
            position: absolute;
            top: 0em;
            left: 36em;
            width: 20em }

        ul.rightlow {
            position: absolute;
            top: 10em;
            left: 36em;
            width: 20em }

        ul.righttopp {
            position: absolute;
            top: 0em;
            left: 55em;
            width: 20em }

        ul.leftlow {
            position: absolute;
            top: 19em;
            left: -2em;
            width: 20em }
        ul.leftloww {
            position: absolute;
            top: 22em;
            left: 20em;
            width: 20em }

        ul.leftlowww {
            position: absolute;
            top: 33em;
            left: 55em;
            width: 20em }
            

    </style>
<body>
    <form>
    <h1> <font color="#EEE8AA">แก้ไข/เพิ่มเติม</h1></font>
    <form action="insertdata.php" method="POST"><font color="#7FFFD4">
        <h3>
        ชื่อหอพัก : <input type="text" name="dname" id="" >
        <br>
        ราคา : <input type="text" name="ราคา" maxlength=”7”/> บาท
        <br>
        ห้องที่ว่าง : <input type="text" size="7" name="ห้องที่ว่าง"  maxlength=”3”/> ห้อง
        <br>
        ห้อง/คน <input type="radio" name="person" value="1 คน" checked> 1 คน <input type="radio" name="person" value="มากกว่า 1 คน"> มากกว่า 1 คน
        <br>
        จำนวนคน : <input type="text" size="7" name="จำนวนคน" maxlength=”1”/> คน
        <br>
        ระยะทาง : <input type="text" size="7" name="ระยะทาง" maxlength=”7”/> กิโลเมตร
        <br>
        จำนวนห้องทั้งหมด : <input type="text" size="7" name="จำนวนห้องทั้งหมด" maxlength=”3”/> ห้อง
        </font></h3>

    <ul class="centerlow">
        <h2> <font color="#FFB6C1">ประเภทหอพัก</h2></font>
            <input type="radio" name="style" value="ตึก/คอนโด" checked> ตึก/คอนโด <br>
            <input type="radio" name="style" value="บ้านคู่"> บ้านคู่ <br>
            <input type="radio" name="style" value="บ้านเดี่ยว"> บ้านเดี่ยว
            </font>
        
    </ul>

    <ul class="center">
        <h2> <font color="#FFB6C1">รูปแบบ</h2></font>
        
            <input type="radio" name="style" value="หอพักภายใน" checked> หอพักภายใน <br>
            <input type="radio" name="style" value="หอพักภายนอก"> หอพักภายนอก <br>
            <input type="radio" name="style" value="หอพักเครือข่าย"> หอพักเครือข่าย
            </font>
       
    </ul>

    <ul class="righttop">
        <h2> <font color="#FFB6C1">ลักษณะห้องพัก</h2></font>
        
            <input type="radio" name="style" value="ห้องแอร์" checked> ห้องแอร์ <br>
            <input type="radio" name="style" value="ห้องพัดลม"> ห้องพัดลม 
            </font>
        
    </ul>

    <ul class="rightlow">
        <h2> <font color="#FFB6C1" >ติดต่อ</h2></font>
        
            เบอร์โทร : <input type="number" name="เบอร์โทร" <br><br>
            Facebook : <input type="text" name="Facebook" <br><br>
            Line : <input type="text" name="Line" <br><br>
            
            </font>
        
    </ul>

    <ul class="righttopp">
        <h2> <font color="#FFB6C1" >ค่าสาธารณูปโภค</h2></font>
        
            <input type="radio" name="utility bills" value="เหมาจ่าย" checked> เหมาจ่าย <br>
            ค่าน้ำ : <input type="text" size="15" name="ค่าน้ำ"><br>
            ค่าไฟ : <input type="text" size="15" name="ค่าไฟ"><br>
            ค่าอินเทอร์เน็ต : <input type="text" size="7" name="ค่าอินเทอร์เน็ต"><br>
            <input type="radio" name="utility bills" value="ไม่เหมาจ่าย" checked> ไม่เหมาจ่าย <br>
            ค่าน้ำ : <input type="text" size="15" name="ค่าน้ำ"><br>
            ค่าไฟ : <input type="text" size="15" name="ค่าไฟ"><br>
            ค่าอินเทอร์เน็ต : <input type="text" size="7" name="ค่าอินเทอร์เน็ต">
            </font>
        
    </ul>

    <ul class="leftlow">
       
            <h2> <font color="#FFB6C1" >แผนที่</h2></font>
            <font color="#FFFFFF"> 
            <h5>ชื่อหอพัก : <input type="text" name="ชื่อหอพัก"></h5>
            กรุณาเลือกไฟล์แผนที่ :
            <input type="file" name="file" accept="image/png, image/gif, image/jpeg" onchange="renderFile(event)"><br>
            <input type="submit" value= "upload">
            <input type="submit" onclick="formReset()" value="cancle">
            </font>

        
    </ul>

    <ul class="leftloww">
       
           <img id="preview" width="100%" height="100%" type="reset"> 
                <script>
                    var renderFile = function(event) {
                    var r = new FileReader();
                    r.onload = function(){
                    var preview = document.getElementById('preview');
                    preview.src = r.result;
                    };
                r.readAsDataURL(event.target.files[0]);
                }; 
                </script> 
            </img>
        
    </ul>

    <ul class="leftlowww">
            <input type="submit" style="background-color: #99FF99;" value= "บันทึกข้อมูล" >
    </ul>
    </form>

</body>
</html>

</body>
</html>