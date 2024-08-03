<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Masti Store - Sign Up</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body style="background-image: url('i2.jpeg');">
    <div class="container">
        <h2>Sign Up</h2>
        <form action="signup_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name">
            
            <label for="email">Email:</label>
            <input type="email" name="email">

            <label for="password">Password:</label>
            <input type="password" name="password">

            <button type="submit" style="background-color: #4CAF50">Sign Up</button>

            <button style="margin-top:20px; background-color: red" type="submit"> Login</button>
        </form>
    </div>
</body>
</html>