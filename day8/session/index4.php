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
<h1>Tạo Session trong php</h1>

<?php

//$_SESSION là 1 mảng
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";

$location = "Hà Nội";

$_SESSION["user_location"] = $location;

// xem tất cả session đang hoạt động
echo "<pre>";
print_r($_SESSION);
echo "</pre>"

?>


<div>
    <?php
        // Kiểm tra 1 session có tồn tại k
        if (isset($_SESSION['user_name'])):
    ?>
    <p>username là: <?php echo $_SESSION['user_name'] ?></p>
    <?php endif; ?>


    <?php
    if (isset($_SESSION['user_email'])):
        ?>
        <p>username là: <?php echo $_SESSION['user_email'] ?></p>
    <?php endif; ?>


    <?php
    if (isset($_SESSION['user_location'])):
        ?>
        <p>username là: <?php echo $_SESSION['user_location'] ?></p>
    <?php endif; ?>

</div>
</body>
</html>