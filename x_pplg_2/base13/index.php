<?php include 'proses.php';
if (cek_data_get("status") == "imigran"){
    echo "
    <script>
    alert('JANGAN MASUK, ANDA ILEGAL!');
    </script>
    ";
}
?>

<html>
    <head>
        <title>Login dengan Register menggunakan mysql</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="" method="post">
            <label for="">Username</label>
            <input type="text" name="user">
            <br>
            <label for="">password</label>
            <input type="password" name="pass">
            <br>
            <input type="submit" name="dor" value="Login">
        </form>  
        <hr>
        <p>tidak punya akun? buat<a href="register.php">disini</a></p>
    </body>
</html>