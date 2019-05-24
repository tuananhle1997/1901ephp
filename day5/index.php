<?php
/**
 * khai báo class trong php
 *  class student
 */
class student{

    /**
     * Khai báo các thuộc tính (properties) của class
     * @var
     */

    public $name;

    public $age;

    public $location;

    public $point;

    /**
     * Khai báo các phương thức (method của class)
     */

    /**
     *Hàm khởi tạo class. Hàm này sẽ chạy ngay khi khởi tạo đối tượng từ class
     * Student contructor
     */

    public function __construct($name_param, $age_param, $location_param)
    {
        /**
         * trong các phương thức của class để gọi đến chính bản thân của class
         * thì ta sử dụng $this
         */

        $this->name = $name_param;

        $this->age = $age_param;

        $this->location = $location_param;

    }

    public function calculatePoint($point_arr_param){

       if (is_array($point_arr_param) && !empty($point_arr_param)){

           $count = 0;
           $total = 0;
           foreach ($point_arr_param as $key => $value){
               // $total = $total + value;
               $total += $value;
               $count++;
           }

           $point = $total/$count;
           $this->point = $point;
       }
        return false;
    }
}


/**
 * Khởi tạo đối tượng class
 */

$name = 'LeTuanAnh';
$age = 22;
$location = 'HaNoi';
$anh = new Student ($name,$age,$location);

echo "<pre>";
print_r($anh);
echo "</pre>";

$point = array(
  'java' => 5,
  'adroid' => 6,
  '.net' => 3,
  '.net2' => 5,
  'web' => 9,
  'php' => 8,
  'html' => 4,
  'css' => 4,
);

// gọi đến phương thức của class

$anh->calculatePoint($point);

$cal_point = $anh->point;

echo "Điểm trung bình :" . $cal_point;

echo "<pre>";
print_r($anh);
echo "</pre>";