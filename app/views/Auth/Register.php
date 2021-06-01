<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Raleway', sans-serif">
    <div class="login-box">
        <h1 style="text-align: center; font-size: 22px; margin-top: -21%; margin-bottom: 33px;">Selamat Datang </h1>
        <form action="<?=BASEURL?>/C_Auth/regist" method="post">
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Username</label><br>
            <div class="login"><input type="text" name="uname" placeholder="Username"></div>
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">E-Mail</label><br>
            <div class="login"><input type="text" name="email" placeholder="E-Mail"></div>
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Password</label><br>
            <div class="login"><input type="Password" name="password" placeholder="Password"></div>
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Tanggal
                Lahir</label><br>
            <div class="login1" id="left"><input type="text1" name="tahun" placeholder="TTTT"></div>
            <div class="login1" id="left"><input type="text1" name="bulan" placeholder="BB"></div>
            <div class="login1" id="left"><input type="text1" name="tanggal" placeholder="HH"></div>
            
            <input type="submit" name="submit" value="Sign Up">
            <h style="margin-left:-20px; font-size: 12px;">Sudah Punya Akun ?</h>
            <a href="<?=BASEURL?>">Login</a>
        </form>
    </div>
    <div class="float-right">
        <img src="<?=BASEURL?>/img/signin.png" style="width: 600px; height: 400px;">
    </div>
</body>

</html>