<?php
/**
 * tạo ra 4 hằng số kết nối đến CSDL
 *
 */

// cách khai báo hằng số

define("SERVERNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DBNAME","shopping");

$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

/**
 * kiểm tra kết nối đến CSDL có thành công hay không
 * nếu thành công thì sẽ ngắt chương trình
 */

if (!$connection){
    die("kết nối CSDL lỗi!" . mysqli_connect_error());
}
