<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    if (isset($_POST) && !empty($_POST)){
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>

    <h1>form html</h1>
    <pre>
        isset() được sử dụng để kiểm tra xem có sự tồn tại của biến trong hàm isset hay không
        nếu có hàm trả về true không tồn tại trả về false
        && và thỏa các điều kiện
        || hoặc tức là chỉ cần thỏa 1 trong các điều kiện
        $_POST khi gửi form đi và method="post" trong form
        this $_POST khi gửi đi sẽ là 1 mảng dữ liệu
        với key là các ô input trong form
        và value là giá trị các ô bên trong input đó
    </pre>
    <form action="" name="register" method="post">
        <div>
            <lable>Username</lable>
            <input name="username" value="" type="text" placeholder="Nhập username">
        </div>

        <div>
            <lable>Password</lable>
            <input name="password" value="" type="password" placeholder="Nhập password">
        </div>

        <div>
            <input type="submit" name="submit" value="Đăng Nhập">
        </div>
    </form>
</body>
</html>