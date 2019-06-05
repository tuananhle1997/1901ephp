<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Xóa Session trong php</h1>

<?php

//$_SESSION là 1 mảng
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";

$location = "Hà Nội";

$_SESSION["user_location"] = $location;

// xem tất cả session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>

<?php
    // hủy toàn bộ session trong php
    session_unset();
    session_destroy();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
</body>
</html>