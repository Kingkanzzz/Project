<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Home</title>
  <style>
    .flex-container {
      background-position: center;
      background-size: cover;
      background-attachment: fixed;
    }

    .item {
      flex-grow: 4;
      margin: 100px;
      flex-basis: auto;

    }

    .background {
      width: 100%;
      height: 100%;
    }

    .font {
      color: aliceblue;
      size: 10cm;
    }

    .container {
      flex-direction: row;
    }

    .div-r-reveiw {
      position: relative;
      width: 400px;
      height: 4000px;
      top: -250px;
      left: 35px;
      ;
    }

    .div-r-rearch {
      position: relative;
      width: 10px;
      height: 10px;
      top: 90px;
      left: 1200px;
      ;
    }

    .div-r-Home {
      position: relative;
      width: 100px;
      height: 100px;
      top: -110px;

      right: 1150px;
      ;
    }

    .div-r-reveiw {
      position: relative;
      width: 100px;
      height: 100px;
      top: 30px;

      right: 200px;
      ;
    }

    .div-r-type {
      position: absolute;
      width: 300px;
      height: 100px;
      top: 90px;
      left: 820px;

    }

    .div-r-Count-contact {
      position: absolute;
      width: 200px;
      height: 100px;
      top: 670px;
      left: 50px;

    }

    .div-r-login {
      position: absolute;
      width: 400px;
      height: 100px;
      top: 400px;
      left: 50px;
    }

    .div-r-button {
      position: absolute;
      width: 400px;
      height: 100px;
      top: 70px;
      left: 800px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #e9e9e9;
    }

    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #2196F3;
      color: white;
    }

    .topnav .search-container {
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search-container button:hover {
      background: #ccc;
    }

    @media screen and (max-width: 600px) {
      .topnav .search-container {
        float: none;
      }

      .topnav a,
      .topnav input[type=text],
      .topnav .search-container button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
    }
    body {
            background-image: url('BgPAGEALL.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
  </style>
</head>

<body background="BgPAGEALL.png">
  <div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#about" data-bs-toggle="dropdown">ประเภท</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="หอใน.php">หอพักภายใน</a></li>
        <li><a class="dropdown-item" href="หอนอก.php">หอพักภายนอก</a></li>
        <li><a class="dropdown-item" href="หอเครือข่าย.php">หอพักในเครือข่าย</a></li>
      </ul>
    <a href="#contact" data-bs-toggle="dropdown">รูปแบบ</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="ตึก.php">ตึก/คอนโด</a></li>
          <li><a class="dropdown-item" href="บ้านเดี่ยว.php">บ้านเดี่ยว</a></li>
          <li><a class="dropdown-item" href="บ้านคู่.php">บ้านคู่</a></li>
        </ul>
    <a href="#contact" data-bs-toggle="dropdown">ราคา</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="range1.php">2,000-10,000</a></li>
          <li><a class="dropdown-item" href="range2.php">10,001-14,999</a></li>
          <li><a class="dropdown-item" href="range3.php">15,000ขึ้นไป</a></li>
        </ul>
    <div class="search-container">
      <form action="searchDatauser.php" method="POST">
        <input type="text" placeholder="Search.." name="emdname">
        <input type="submit" value="ค้นหา" i class="ิbtn btn-dark">
      </form>
    </div>
  </div>
    <!--
  <div style="padding-left:16px">
    <h2>Responsive Search Bar</h2>
    <p>Navigation bar with a search box and a submit button inside of it.</p>
    <p>Resize the browser window to see the responsive effect.</p>
  </div>
  -->

  <div style=" width: 500px; border-radius: 20px; padding: 45px 16px 77px 16px " class="div-r-reveiw">
    <h1 class="font">แนะนำหอพัก<br>มก.ฉกส.</h1>
    <h4 class="font">เว็บไซต์แนะนำหอพักรอบมหาวิทยาลัย<br>เกษตรศาสตร์วิทยาเขตเฉลิมพระเกียรติ<br>จังหวัดสกลนคร</h4>
    <br>
    <h6>
      <a href="indexstar.php" class="font">แสดงความคิดเห็น </a>
    </h6>
    <h6>
      
      <a href="comment.php" class="font">รีวิว</a>
    </h6>
  </div>
  <div class="div-r-Count-contact && font">
    <h4> <a href="Tabledata.php">ดูข้อมูลทั้งหมด</a></h4>
  </div>
  <div class="div-r-login">
    <a href="index2.php">เข้าสู่ระบบ</a>
  </div>
  </div>
      <!-- 
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">รีวิว</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">5 ดาว</a></li>
          <li><a class="dropdown-item" href="#">4 ดาว</a></li>
          <li><a class="dropdown-item" href="#">3 ดาว</a></li>
          <li><a class="dropdown-item" href="#">2 ดาว</a></li>
          <li><a class="dropdown-item" href="#">1 ดาว</a></li>
        </ul>
      </div>
  -->
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>