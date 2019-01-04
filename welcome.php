<?php
$name = $_POST["name"];
$pass = $_POST["pwd"];
$oriName = $_POST["originalName"];
$oriPass = $_POST["originalPassword"];
?>


<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.1.0" rel="stylesheet"/>
</head>

<body>
<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/bg3.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand text-center">
                    <h1>Your title here</h1>
                    <h3 class="title text-center">Subtitle</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">
                <?php
                if ($name == "username" && $pass == "password") {
                    echo "welcome " . $name;
                    echo '<br><a href="login.php" >Log out</a>';
                } else {
//                    header("Location: login.php?logged=false"); /* Redirect browser */
//                    exit();
                }
                ?>
            </h2>
        </div>
    </div>
</div>
</body>

</html>