<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.blade.php">Trang chủ</a></li>
  <li><a href="gioithieu.blade.php">Giới Thiệu</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sản phẩm</a>
    <div class="dropdown-content">
      <a href="sanphamban.blade.php">Bàn</a>
      <a href="sanphamghe.blade.php">Ghế</a>
    </div>
  </li>
  <li><a href="lienhe.blade.php">Liên hệ</a></li>
</ul>

<h1>Đây là trang chủ.</h1>

</body>
</html>


