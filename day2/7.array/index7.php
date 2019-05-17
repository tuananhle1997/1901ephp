<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>các hàm xử lý mảng</h1>

<?php
    $student = array("tuấn", "hùng", "nam", "linh", "chi");
    echo "<br> trước khi sắp xếp";
    echo "<pre>";
    print_r($student);
    echo "</pre>";
    echo "<br> đếm số phần tử trong mảng: " .count($student);
    asort($student);
    echo "<br> sau khi sắp xếp asort() sắp xếp mảng theo chỉ số tăng dần theo AZ dựa vào các giá trị phần tử";

    echo "<pre>";
    print_r($student);
    echo "</pre>";

    rsort($student);
    echo "<br> sau khi sắp xếp asort() sắp xếp mảng theo chỉ số giảm dần theo AZ dựa vào các giá trị phần tử";
    echo "<pre>";
    print_r($student);
    echo "</pre>";

?>
</body>
</html>
