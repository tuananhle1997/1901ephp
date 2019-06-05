<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Session trong php</h1>
<pre>
    session trong php là cách để lưu trữ thông tin trong biến đồng bộ trên nhiều trang của website
    ví dụ:
    khi tạo ra 1 session đăng nhập này sẽ làm việc trên máy chủ (home.php)
    trang tin tức (new.php) trang danh mục (category.php) ...
    Session thường được sử dụng để lưu trữ thông tin đăng nhập, data giỏ hàng của khách hàng
    trên các trang mua sắm ...
    Để bắt dầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
    hàm này sẽ khởi đầu session trong php
    Biến session được đặt trong 1 biến global của php là $_SESSION
</pre>
</body>
</html>