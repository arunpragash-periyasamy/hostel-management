<?php
    session_start();
    $Mail=$_SESSION['mail'];
    $url = 'http://myclientsinfo.com/arun/mail.php';
    $ch = curl_init($url);
    $data = array(  'to' => $Mail,'subject'=>'Kongu Hostels Registration' ,   'message' => ' <b>Kongu Hostel Registartion is registered successfully<b><br><p style="color:Red">Thank you for using KEC HOSTEL SERVICES</p>' );
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    print_r($result );

?>