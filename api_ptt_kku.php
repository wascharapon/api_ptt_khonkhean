<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://www1.pttor.com/oilprice-province1.aspx/SearchOilPrice',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{sProvinceCode: "40", isTH: true}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json; charset=UTF-8'
  ),
)); //sProvinceCode เลือกจังหวัด

$response = curl_exec($curl);
$data =json_decode ($response,true);
//$array = json_decode(json_encode($data), True);
$data_kku=$data['d'][9];
$obj_kku = (object) $data_kku;
//print_r($obj_kku);
echo "".$obj_kku->sDistrict;
echo "<br>nGasoline95 : ".$obj_kku->nGasoline95;
echo "<br>nGasohol91 : ".$obj_kku->nGasohol91;
echo "<br>nGasohol95 : ".$obj_kku->nGasohol95;
echo "<br>nGasoholE20 : ".$obj_kku->nGasoholE20;
echo "<br>nGasoholE85 : ".$obj_kku->nGasoholE85;
echo "<br>nDiesel : ".$obj_kku->nDiesel;
echo "<br>nHyForce : ".$obj_kku->nHyForce;
echo "<br>nDieselB10 : ".$obj_kku->nDieselB10;
echo "<br>nDieselB20 : ".$obj_kku->nDieselB20;
echo "<br>nNGV : ".$obj_kku->nNGV;
?>
</body>
</html>
