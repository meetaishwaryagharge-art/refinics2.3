<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['full_name'];
    $mobile = $_POST['mobile'];
    $loan = $_POST['loan_type'];
    $message = $_POST['message'];

    $sql = "INSERT INTO loan_applications (full_name, mobile, loan_type, message)
            VALUES ('$name', '$mobile', '$loan', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Form Submitted Successfully'); window.location.href='index.html';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>