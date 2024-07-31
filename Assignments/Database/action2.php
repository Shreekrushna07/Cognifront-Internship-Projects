
<?php
include 'database2.php';


if (isset($_POST["submit"])) {
    // Retrieve form data
    $name = $_POST["name"];
    $phoneno = $_POST["phoneno"];
    $address = $_POST["address"];
    $review = $_POST["review"];
    $spedish = $_POST["spedish"];
    $foodtype = $_POST["foodtype"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO info (name,phoneno,address,review,spedish,foodtype) 
            VALUES ('$name', '$phoneno', '$address', '$review', '$spedish', '$foodtype')";

    if (mysqli_query($con,$sql)) {
        echo "<script> alert( 'Record inserted successfully');</script>";
        echo "<script>window.open('form2.php','_self')
        ;</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>