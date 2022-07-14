<?php
include '../php/conn.php';
$sql="SELECT * from admission where id=6";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$Pro=base64_decode($sql);
// echo "<img src='$sql' width=300px height=250px alt='red'> ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="<?php echo $row['Profile']; ?>" width=300px height=250px alt="Red dot" />
</body>
</html>