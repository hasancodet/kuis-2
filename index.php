<?php

$wsdl_url =
  "http://api.radioreference.com/soap2/?wsdl&v=latest";
$client     = new SoapClient($wsdl_url);
var_dump($client->getCountryList());

$result =array(
  'ID'     =>  $GET['coid'], 
  'Nama'   =>  $GET['countryName'], 
  'Kode'   =>  $GET['countryCode']
);
echo $result;

//$country = array("coid"=>"ID", "countryName" => "Name", "countryCode"=> "Kode");
//echo ($country);

?>