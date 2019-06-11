<?php
// 2 biến global
$city = "hà nội";
$country = "Việt Nam";

$go = function ($vehicle) use ($city, $country ){
  echo "<br> Go to travel city " . $city . "country" . $country . "by" . $vehicle;
};
