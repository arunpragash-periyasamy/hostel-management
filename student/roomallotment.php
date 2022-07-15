<?php
error_reporting(0);
include '../php/conn.php';
session_start();

$Student_Id=$_SESSION['Rollno'];
unset($_SESSION['Rollno']);
// $Student_Id='19ISR037';
//admission Table
$admission="SELECT * FROM admission WHERE Student_Id='$Student_Id'";
$result=mysqli_query($conn,$admission);
$row=mysqli_fetch_array($result);
$StudentName=$row['StudentName'];
$Branch=$row['Branch'];
$Year=$row['Year'];
$Course=$row['Course'];
$EmailId=$row['EmailId'];

//allot rooms SELECT Hostel, Branch, Course, Year FROM allotrooms WHERE 1
$roomallot="SELECT * FROM allotrooms WHERE Branch='$Branch' and Course='$Course' and Year='$Year'";
$result=mysqli_query($conn,$roomallot);
$row=mysqli_fetch_array($result);
$Hostel=$row['Hostel'];

// echo $Hostel;


//Floor , Rooms and no.of.students SELECT Hostel, Floor, Room, student FROM hostel_rooms WHERE 1
$HostelRoom="SELECT * FROM hostel_rooms WHERE Hostel='$Hostel'";
$result=mysqli_query($conn,$HostelRoom);
$row=mysqli_fetch_array($result);
$Room=$row['Room'];
$Floor=$row['Floor'];
$rows=$row['student'];

// echo  $Room." ".$Floor." ".$rows." ";

//Room Allotment from hostel  SELECT id, Floor, Room_no, Student_Id, Year, Student_Name, EmailId, Branch, Course, Hostel FROM room_allotment WHERE 1
$allotment="SELECT MAX(id) FROM room_allotment WHERE Hostel='$Hostel'";
$result=mysqli_query($conn,$allotment);
$row=mysqli_fetch_array($result);
$roomno=$row['Room_no'];
$roomno1=substr($roomno, -2);;
$Floorno=$row['Floor']; 
$sql="SELECT * FROM room_allotment WHERE Room_no='$roomno'";
$result=mysqli_query($conn,$sql);
$noofrow=mysqli_num_rows($result);
if(!$Student_Id==''){
    if($noofrow<=$rows){
    if($noofrow==$rows){
        if($Room>=$roomno1){
            if($Room==$roomno1){
                if($Floor>=$Floorno){
                    if($Floor==$Floorno){
                        echo "Rooms are fulled";
                    }
                    else{
                        $Floorno=$Floorno+1;
                        $roomno=($Floorno*100);
                    }
                }
            }
            $roomno=$roomno+1;
            $roomno=sprintf("%03d", $roomno);
        }
    }
    else if($noofrow==0){
        $roomno="001";
        $roomno=sprintf("%03d", $roomno);
        $Floorno=0;
    }
    $sql="INSERT INTO room_allotment(Floor, Room_no, Student_Id, Year, Student_Name, EmailId, Branch, Course, Hostel) VALUES ('$Floorno','$roomno','$Student_Id','$Year','$StudentName','$EmailId','$Branch','$Course','$Hostel')";
    $result=mysqli_query($conn,$sql);

    
//mail sent;

$url = 'http://myclientsinfo.com/arun/mail.php';
$ch = curl_init($url);
$data = array(  'to' => $EmailId,'subject'=>'Your Room has been alloted' ,   'message' => ' <p>Hello </p>'.$StudentName.'<br>            Your Room Registration was completed. <br> <b>THANK YOU FOR USING OUR KEC HOSTELS</b>' );
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
print_r($result );


echo '<script> alert("Room alloted Successfully!'.$Student_Id.'"); window.location.href = "studentDashboard.php";</script>';
}
}
else{
    echo "No admission is there";
    echo $Student_Id;
}




































// $Student_Id=$_SESSION['Rollno'];
// $Branch=$_SESSION['Branch'];
// $Course=$_SESSION['Course'];
// $Year=$_SESSION['Year'];
// $EmailId=$_SESSION['Email'];


// $sql1="SELECT * from allotrooms WHERE Branch='$Branch' AND Course='$Course' and Year='Year'";
// $sql2=mysqli_query($conn,$sql);
// $sql=mysqli_fetch_array($hos);
// $Hostel=$sql['Hostel'];

// $room2="SELECT * from room_allotment Where Hostel='$Hostel' and id=MAX(id)";
// $room1=mysqli_query($conn,$room2);
// $room=mysqli_fetch_array($room1);
// $roomno=$room['Room_no']; 
// $Floor=$room['Floor'];


// $stu1="SELECT * from hostel_rooms WHERE Hostel='$Hostel'";
// $stu2=mysqli_query($conn,$stu1);
// $stu=mysqli_fetch_array($stu2);
// $floor=$stu['Floor'];
// $Room=$stu['Room'];
// $student=$stu['student'];

// $room2="SELECT * from room_allotment Where Room_no='$roomno'";
// $room1=mysqli_query($conn,$room2);
// $room3=mysqli_fetch_array($room1);
// $room=mysqli_num_rows($room1);

// if($student>=$room){
//     $sqli1="SELECT * from admission WHERE Branch='$Branch' AND Course='$Course' AND Year='Year' AND Student_Id='$Student_Id'";
//     $sqli2=mysqli_query($conn,$sqli1);
//     $sqli=mysqli_fetch_assoc($sqli2);
//     $StudentName=$sqli['StudentName'];


//     $insert="INSERT INTO room_allotment(Floor, Room_no, Student_Id, Year, Student_Name, Branch, Course, Hostel) VALUES ('$Floor','$roomno','$Student_Id','$Year','$StudentName','$Branch','$Course','$Hostel')";

// }


// $room=$stu['Room'];
// $floor=$stu['Floor'];
// $student=$stu['student'];


// $sql1=mysqli_fetch_array(mysqli_query($conn,"SELECT * from bharathi WHERE Room_no='$sql'"));
// if($a>0){
  
// }


?>