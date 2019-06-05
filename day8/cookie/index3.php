<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

/**
 * Xóa cookie bằng cách đặt thời gian sống cho nó là 1 thời gian đã qua
 * time() là thười gian hiện tại
 * time() - 3600 là thời gian cách đây 1 giờ
 * session sẽ tự chết
 */

$time = time() - 360000;
setcookie("username", "","$time");
/**
 * In ra cookie sau khi xóa
 */

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";