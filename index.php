<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <form method="POST" action ='login.php'>
            <label>Username:</label>
            <input type="text" name="username" title="username">
            <label>Password:</label>
            <input type="text" name="password" title="password">
            <button name ="submit">Submit</button>
        </form>
    <p><?php echo loginFailMessage(); ?></p>
    </body>
</html>