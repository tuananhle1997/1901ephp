<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1> Toán tử ! là toán tử phủ định</h1>
    <?php
        // Mảng chỉ số
    $students = array("Nguyen Van A1","Nguyen Van A2","Nguyen Van A3","Nguyen Van A4");

    echo "<pre>";
    print_r($students);
    echo "</pre>";

    echo "<br> dạng foreach đầy đủ";

    // Dạng foreach đầy đủ

    if (is_array($students) && !empty($students)){
        foreach ($students as $key => $value){
            echo "<br> Key:" .$key . "value:" .$value;
        }
    }

    echo "<br> dạng foreach rút gọn";
    // dạng foreach rút gọn chỉ lặp và xuât ra cái value
    if (is_array($students) && !empty($students)) {
        foreach ($students as $value) {
            echo "<br> Value:" . $value;
        }
    }

    ?>
</body>
</html>