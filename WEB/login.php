<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="CSS/login.css">
    <!-- Embed Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,800;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "text-logo">
        <center><a href="index.php">Mans Chompair</a></center>
    </div>
    <div class="wrapper">
        <header>
            <a href="index.php">
                <img src="Image/Logo.png" alt="Logo">
            </a>
            <div class="box-signUp">
                <center><h1>LOGIN</h1></center>
                <form action="home.php" methode ="POST">
                    <label for ="email">Email</label>
                        <center><input type="email" name ="Email" required></center>
                    <label for ="psw">Password</label>
                        <center><input type="password" name ="Password" required> </center>
                    <label for = "box"> Remember Me 
                    <input type = "checkbox" name = "box"></label>
                    <div class="btn-login">
                        <button type = "submit" name = "submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </header>
    </div>

</body>
</html>