<?php
// fungsi untuk memulai session
session_start();

//cek cookie
if( isset($_COOKIE['login'])){
    if( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

if ( isset($_SESSION["login"]) ) {
    header("location: index.php");
    exit;
}
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($username == 'rezasuci' AND $password == '123456'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman index
        $_SESSION['email'] = $email;
        header('Location: index.php');

        //cek remember me
        if( isset($_POST['remember'])) {
            //buat cookie
            setcookie('key', hash('sha256', $row['username']), time() + 60);
        }
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
 
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Login</title>
</head>
<body>
 
    <div id="card">
        <div id="card-content">
        <div id="card-title">
         <h2>Login Flower Store</h2>
         <div class="underline-title"></div>
            <form method="post" action="login.php" class="form">
               <label for="user-email" style="padding-top:13px">&nbsp;Username</label> 
               <input id="user-email" class="form-content" type="text" name="username">
               <div class="form-border"></div>

               <label for="user-password" style="padding-top:22px">&nbsp;Password</label> 
               <input id="user-password" class="form-content" type="password" name="password" autocomplete="on" required />
               <div class="form-border"></div>
              <br>
               <label for="remember"><input type="checkbox" name="remember" value="true" id="remember" /> Remember Me</label>

                <input id="submit-btn" type="submit" name="submit" value="Login">
            </form>


        </div>
    </div>
</div>

 
   
    
</body>
</html>