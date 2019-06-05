<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>chuyển 1 chuỗi thời gian về dạng unix timestamp</h1>
<pre>
    sử dụng hàm strtotime()
    hàm strtotime() sẽ chuyển 1 chuỗi thời gian về dạng unix timestamp
    chú ý hàm này không hoàn hảo chú ý định dạng truyền vào
</pre>


<?php
$d = strtotime("10:30pm April 15 2014");
echo "<br> Created date is " . date("Y-m-d h:i:sa", $d);
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
</body>
</html>