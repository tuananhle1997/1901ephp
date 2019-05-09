<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Biến trong php: lưu trưữ thông tin à thay đổi trong quá trình chạy</h1>
<pre>
    Khai báo biến trong php như thế nào?
    $tên_biến
    Biến trong php thì không cần khóa var giống js
    và bắt đầu bằng $ tiếp theo là tên biến
    tên biến phải viết liền , không được dùng tiếng việt có dấu
    không được dùng ký tự đặc biệt như @#...
    tên biến chỉ chứa các số và chữ cái A đến Z và ký tự _
    tên biến có phân biệt hoa thường ví dụ $a khác $A
    trong js nối chuỗi bằng +
    trong php nối chuỗi bằng .
</pre>

<?php
$a = 5;
$b = 7;
$c = $a + $b;
echo '$c : ' . $c;
echo "<br>";
echo $a . $b;
?>

</pre>
</body>
</html>