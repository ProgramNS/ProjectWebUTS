<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="CSS/signUp.css">
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
                <center><h1>SIGN UP</h1></center>
                <form action="login.php" methode ="POST">
                    <label for ="name">Username</label>
                        <center><input type="text" name ="Nama_Lengkap"></center>
                    <label for ="email">Email</label>
                        <center><input type="email" name ="Email" required></center>
                    <label for ="psw">Password</label>
                        <center><input type="password" name ="Password" required></center>
                    <div>
                        <button type = "submit" name = "submit">DAFTAR</button>
                    </div>
                </form>
            </div>
        </header>
    </div>

</body>
</html>