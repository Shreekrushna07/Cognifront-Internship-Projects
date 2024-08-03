<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Masti Store - Sign In</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body style="background-image: url('i1.jpeg');">
    <div class="container">
        <h2>Sign In</h2>
        <form action="signin_process.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit" style="background-color: #4CAF50">Sign In</button>
        </form>
    </div>
</body>
</html>
