<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>truyền tham số và truyền tham trị của function</h1>
<pre>
    - truyền tham trị là chỉ truyền giá trị
    - truyền tham chiếu hiểu 1 cách đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ
    khi 1 biến thay đổi thì biến còn lại cũng thay đổi
    - truyền tham chiếu trk tên biến sẽ có 1 dãy &
    function truyenthamchieu(&$d){
        $d = $d *2;
    }
</pre>


<?php

// truyền tham tri

$a = 5;
function truyenthamtri($b){
    /**
     * biến b tính toán trong hàm
     * không liên quan đến cái biến được truyền trong hàm
     */
    $b = $b *2;
    echo "<br> $b trong hàm là" . $b;
}

truyenthamtri($a);
echo "<br> "

?>
</body>
</html>