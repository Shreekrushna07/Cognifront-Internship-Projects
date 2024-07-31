<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotels";
    $con = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
    <title>HOTEL INFO FORM</title>
    <style>
        body {
            background-color: rgb(252, 62, 252);
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        center {
            text-align: left;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
        }

        input[type="text"] {
            width: calc(100% - 16px);
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <h2>Hotel Information Form</h2>
        <form method="post" action="action2.php">
            <table>
                <tr>
                    <td>NAME: </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>PHONE NO:</td>
                    <td><input type="NO" name="phoneno"></td>
                </tr>
                <tr>
                    <td>ADDRESS:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>REVIEW: </td>
                    <td><input type="text" name="review"></td>
                </tr>
                <tr>
                    <td>SPECIAL DISH: </td>
                    <td><input type="text" name="spedish"></td>
                </tr>
                <tr>
                    <td>FOOD TYPE:</td>
                    <td><input type="text" name="foodtype"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>