<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee";
    $con = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
    <style>
        body
        {
            background-color: #df84ee;
            font-family: Arial, sans-serif;
        }

        center
        {
            margin-top: 50px;
        }

        h2
        {
            color: #333;
        }

        form
        {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #b98fff;
            border: 2px solid black;
            border-radius: 10px;
        }

        table
        {
            width: 100%;
        }

        td
        {
            padding: 10px;
        }

        input[type="text"],
        textarea
        {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="reset"]
        {
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover
        {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h2>Employee Information Form</h2>
        <form method="post" action="action.php">
            <table>
                <tr>
                    <td>Emp ID:</td>
                    <td><input type="text" name="empid"></td>
                </tr>
                <tr>
                    <td>Emp Name:</td>
                    <td><input type="text" name="empname"></td>
                </tr>
                <tr>
                    <td>Emp Qualification:</td>
                    <td><input type="text" name="empqualification"></td>
                </tr>
                <tr>
                    <td>Emp Salary:</td>
                    <td><input type="text" name="empsalary"></td>
                </tr>
                <tr>
                    <td>Emp Designation:</td>
                    <td><input type="text" name="empdesignation"></td>
                </tr>
                <tr>
                    <td>Emp Address:</td>
                    <td><textarea name="empaddress"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
