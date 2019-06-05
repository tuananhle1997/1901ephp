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
<h1>Sửa Session trong php</h1>

<?php

// Tạo session
$_SESSION["user_name"] = "admin";


// xem tất cả session đang hoạt động
echo "In ra session trk khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// sửa session
$_SESSION["user_name"]= "mod";
// xem tất cả session đang hoạt động
echo "In ra session sau khi sửa";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


?>
</body>
</html>