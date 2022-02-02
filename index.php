<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = 'root';
    $password = '';

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to the database failed to " . mysqli_connect_error());
    }
    // echo "SUCCESS CONNECTING TO MySql DB";


    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip` .`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `datetime`) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";



    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $con->error " ;
    }

    $con -> close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to IIT Khadakpur - US trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="tel" name="phone" id="phone" placeholder="Enter Your phone number">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your any other information"></textarea>
            <?php
                if($insert == true){
                    echo "<p class='submited'>Thank you for submitting</p>";
                }
            ?>
            <button class='btn'>Submit</button>


        </form>
    </div>
</body>
</html>