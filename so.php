<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aso</title>
</head>
<body>
    <form method="post" action="wel.php">
        <input type="text" name="username">
        <input type="password" name="pwd">
        <button>Submit</button>
    </form>
    <?php
    if (isset($_GET["logged"])){
        echo "invalid username or password";
    }




    ?>
</body>
</html>