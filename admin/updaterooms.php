<?php
include '../php/conn.php';

$Hostel = $_REQUEST['Hostel'];
$Floor = $_REQUEST['Floor'];
$Room = $_REQUEST['Room'];
$student = $_REQUEST['student'];
$Room_type = $_REQUEST['Room_type'];

switch($Hostel){
    case "Bharathi":{
        
        $sql = "SELECT id FROM 'bharathi' WHERE Room_no='$Room'";
        $result=mysqli_query($conn,$sql);
        if($result>0){
         while($result>$Room){
             $max="SELECT max(id) FROM 'bharathi' WHERE Room_no='$Room'";
             $sql1="DELETE FROM 'bharathi' WHERE id=$max";
             $sql1.="UPDATE `bharathi` set Id=Id-1 where Id > $max";
             $result1=mysqli_multi_query($conn,$sql1);
         }
        }
        $sql="UPDATE `bharathi` SET `Room_type`='$Room_type' WHERE `Room_no`=$Room";
        $result=mysqli_query($conn,$sql);
        
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Dheeran":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Ilango":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Kamban":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Ponnar":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Sankar":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Valluvar":{
        
        $sql = "SELECT id FROM 'valluvar' WHERE Room_no='$Room'";
        $result=mysqli_query($conn,$sql);
        if($result>0){
        $sql2="UPDATE valluvar SET Room_type=$Room_type WHERE Room_no=$Room";
        $result2=mysqli_query($conn,$sql2);
        }
        // echo '<script> alert("Rooms added Successfully!"); window.location.href = "../updateroom.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Amaravathi":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Bhavani":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
    case "Kaveri":{
        
 
        echo '<script> alert("Rooms added Successfully!"); window.location.href = "../addrooms.html";</script>';
            mysqli_close($conn);
        break;
    }
}
?>