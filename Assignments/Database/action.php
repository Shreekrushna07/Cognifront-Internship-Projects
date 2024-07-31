
<?php
include 'database.php';


if (isset($_POST["submit"])) {
    // Retrieve form data
    $empid = $_POST["empid"];
    $empname = $_POST["empname"];
    $empqualification = $_POST["empqualification"];
    $empsalary = $_POST["empsalary"];
    $empdesignation = $_POST["empdesignation"];
    $empaddress = $_POST["empaddress"];

    // SQL query to insert data into the database
    $sql = "INSERT INTO data (empid, name, qualification, salary, designation, address) 
            VALUES ('$empid', '$empname', '$empqualification', '$empsalary', '$empdesignation', '$empaddress')";

    if (mysqli_query($con,$sql)) {
        echo "<script> alert( 'Record inserted successfully');</script>";
        echo "<script>window.open('form.php','_self')
        ;</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>