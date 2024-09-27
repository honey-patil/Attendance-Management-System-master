<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Theme college ATTENDANCE </title>
    
    <!-- BOOTSTRAP STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <!-- TABLE STYLES -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
    <style>
        body {
            background-image: url("img/image5.jpg");
            color: white;
            font-family: 'Open Sans', sans-serif;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 20%;
            margin: auto;
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
    
    <?php include './Database/Controler.php'; ?>
</head>
<body>
    <div class="header">
        <h1>ATTENDANCE MANAGEMENT SYSTEM</h1>
        <img src="img/logo1.png" width="10%" height="15%" alt="Logo"><br>
    </div>

    <div class="login-container">
        <h3 style="background-color: lightseagreen; padding: 10px; border-radius: 5px;">Sign In</h3>
        <form method="post" role="form" enctype="multipart/form-data">
            <input type="text" id="unm" name="unm" placeholder="Enter Username" class="form-control" required autofocus><br>
            <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="form-control" required><br>
            <button type="submit" id="login" name="login" value="submit" class="btn btn-primary" style="width: 50%;">Log In</button>
        </form>
    </div>

    <!-- SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
