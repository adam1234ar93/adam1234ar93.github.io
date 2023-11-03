<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=FontName&display=swap">
</head>
<body>
    <!-- <audio autoplay>
    <source src="../lagu/Hissatsu_Teleport.mp3" type="audio/mpeg">
    </audio> -->
<img src="../Image/Logo.png" id="logo" alt="Logo Life N Co">
    <p class="title">Login</p>
    <form method="POST" action="proses_login.php"> <!-- Form dengan metode POST yang akan mengirim data ke "proses.php" -->
    <div id="tombolContainer">
    <div class="form">
    <label for="Username"><input type="text" id="username" name="username" placeholder="Username" class="input"> <!-- Textbox input --></label> <!-- Label untuk input -->
    </div>
    <div class="form">
    <label for="Password"><input type="password" id="password" name="password" placeholder="Password" class="input" > <!-- Textbox input --></label> <!-- Label untuk input -->
    </div>
    <div>
        <input type="submit" value="submit" id="tombollogin" class="tombolinput" > <!-- Tombol submit untuk mengirimkan data -->
    </div>
    </div>
    </form>
</body>
</html>
