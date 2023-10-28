<?php
require("../includes/database_connect.php");

$email = $_POST['email'];
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$college_name = $_POST['college_name'];


$sql = "UPDATE `users` SET `full_name` = '$full_name' , `phone` = '$phone', `college_name` = '$college_name' where email='$email'";
$result = mysqli_query($conn, $sql);
if(!$result){
    $response = array("success" => false , "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your profile has been updated successfully!");
echo json_encode($response);

mysqli_close($conn);

echo '<script>window.location="../dashboard.php"</script>';