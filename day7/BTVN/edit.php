<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
/*
 * Nạp kết nối CSDL vào file này
 */
include_once "config.php";
$id = '';
$ten = '';
$giatien = '';
$tonkho = '';
$nhacungcap = '';
$ngaytao = '';
if (isset($_GET['id'])) {
    $sanpham_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM sanpham WHERE id = " . $sanpham_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đk la true : câu lệnh chạy khi dk = false
    $id = isset($row['id']) ? $row['id'] : '';
    $ten = isset($row['ten']) ? $row['ten'] : '';
    $giatien = isset($row['giatien']) ? $row['giatien'] : '';
    $tonkho = isset($row['tonkho']) ? $row['tonkho'] : '';
    $nhacungcap = isset($row['nhacungcap']) ? $row['nhacungcap'] : '';
    $ngaytao = isset($row['ngaytao']) ? $row['ngaytao'] : '';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa nhân viên </h1>

            <div>
                <form name="edit" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int) $_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $ten ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá tiền</label>
                        <input type="text" class="form-control" name="giatien" value="<?php echo $giatien ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="tonkho" value="<?php echo $tonkho ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="nhacungcap" value="<?php echo $nhacungcap ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="ngaytao" value="<?php echo $ngaytao ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>