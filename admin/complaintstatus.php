<?php
include '../php/conn.php';

//accept the complaint

if(isset($_GET['accept'])){
    $id=$_GET['accept'];
    $sql="UPDATE complaints SET Accept='Yes' where id='$id'";
    mysqli_query($conn,$sql);
    $sql="SELECT EmailId FROM complaints WHERE id='$id'"; 	
    $res=mysqli_query($conn,$sql);
    
$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $res,'subject'=>'Kongu Hostels Complaint Status' ,   'message' => ' <b>Kongu Hostel Complaints <br>  your complaint is accepted. As soon as possible problem will be solved.<b><br><p style="color:Red">Thank you for using KEC HOSTEL SERVICES </p>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );
echo '<script> alert("Complaint has been Accepted"); window.location.href = "viewcomplaints.php";</script>';

}

//Solved the complaint
if(isset($_GET['resolve'])){
    $id=$_GET['resolve'];
    $sql="UPDATE complaints SET Resolve='Yes' where id='$id'";
    mysqli_query($conn,$sql);

    
$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $res,'subject'=>'Kongu Hostels Complaints' ,   'message' => ' <b>Your complaint is Rectified and solved.<b><br><p style="color:Red">Thank you for using KEC HOSTEL SERVICES </p>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );

echo '<script> alert("Complaint has been Solved"); window.location.href = "viewcomplaints.php";</script>';
}
?>