
//mail sent;

<?php
$var=56483;
$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => 'arunpragashap.19msc@kongu.edu','subject'=>'Welcome to kec hostels' ,   'message' => ' <b style="color:red;"> OTP verification: $var<b>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );
?>