<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
if (isset($_GET) && !empty($_GET)){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}
?>

<h1>form html</h1>
<pre>
    $_GET gửi dữ liệu đi qua URL
    ví dụ mặc định https://github.com/dathalongbay/1901ephp/blob/master/day3/1.senddata/get.php
    khi form có method ="get" gửi dữ liệu đi:
    http://localhost:8080/1901ephp/day3/1.senddata/GET.php?username=tuananhle250597%40gmail.com&username=dsfdgd&submit=%C4%90%C4%83ng+Nh%E1%BA%ADp
    lúc này php sẽ đưa các tên ở ô input trong form và giá trị của chúng lên trên query string của URL
</pre>
<form action="" name="register" method="get">
    <div>
        <lable>Username</lable>
        <input name="username" value="" type="text" placeholder="Nhập username">
    </div>

    <div>
        <lable>Password</lable>
        <input name="username" value="" type="password" placeholder="Nhập password">
    </div>

    <div>
        <input type="submit" name="submit" value="Đăng Nhập">
    </div>
</form>
</body>
</html>