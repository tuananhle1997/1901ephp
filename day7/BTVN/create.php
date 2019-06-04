<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php

include_once "config.php";
if (isset($_POST['id']) && isset($_POST['ten']) && isset($_POST['giatien']) && isset($_POST['tonkho']) && isset($_POST['nhacungcap']) && isset($_POST['ngaytao'])) {
    if ($_POST['id'] && $_POST['ten'] && ($_POST['giatien'] > 0) && $_POST['tonkho'] && $_POST['nhacungcap'] && $_POST['ngaytao'] ) {
        $id = $_POST['id'];
        $ten = $_POST['ten'];
        $giatien = $_POST['giatien'];
        $tonkho = $_POST['tonkho'];
        $nhacungcap = $_POST['nhacungcap'];
        $ngaytao = $_POST['ngaytao'];
        $sqlInsert = "INSERT INTO product (id, ten, giatien, tonkho, nhacungcap, ngaytao) VALUES ('$id', '$ten', $giatien, '$tonkho', '$nhacungcap', '$ngaytao')";
        if (mysqli_query($connection, $sqlInsert)) {
            echo "Insert thành công";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            echo "Insert thất bại";
        }
    }
}
echo "<pre>";
print_r($_POST);
echo "</pre>";

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>

            <div>
                <form name="create" action="" method="post">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="giatien">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="tonkho">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="nhacungcap">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="ngaytao">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>