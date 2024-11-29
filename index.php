<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection failed".mysqli_connect_error());    
        } 

        $name = $_POST['name'];
        $age =  $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

    $sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `phone`, `course`, `dt`)
     VALUES ( '$name', '$age', '$gender', '$phone', '$course', current_timestamp());";

    // echo $sql;

    if($con->query($sql)==true){
        // echo "Succesfully Inserted";
        $insert = true;
    }
    else{
        echo "Failed to Insert : $sql <br>  $con->error";
    }

    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My FIrst PHP Project </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaro:opsz@6..72&family=Sirin+Stencil&display=swap"
        rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="text">
        <h3>Welcome To Pragnya Degree College Field Trip | WONDERLA 2K25</h3>
        <p>Fill the Form To confirm your participation</p>
        <?php
        if($insert==true){
        echo "<p class='submitMsg'>Thank u for Submitting Form | We will see u at Trip &#128075;
        </p>";
        }
        ?>
    </div>
    <div class="main">
        <img src="logo.jpg" alt="pragya_img" class="bg_img">

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Full Name" required>
            <input type="text" name="age" id="age" placeholder="Enter Your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
            <input type="number" name="phone" id="phone" placeholder="Phone number" required>
            <input type="text" name="course" id="" placeholder="Enter Your course" required>
            <button id="btn" class="btn">Submit</button>
            <button id="btn2" class="btn">Reset</button>

        </form>
    </div>
</body>

</html>
<!-- 
INSERT INTO `trip` (`Sno`, `Name`, `Age`, `Gender`, `phone`, `course`, `dt`) VALUES ('1', 'Testname', '23', 'male',
'6302540622', 'BCA', current_timestamp()); -->


<!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `phone`, `course`, `dt`) VALUES ('1', 'testname', '20', 'male',
 '1234567890', 'BCA', current_timestamp()); -->