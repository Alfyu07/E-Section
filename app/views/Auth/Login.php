<body style="font-family: 'Raleway', sans-serif">
    <div class="login-box">
        <h1 style="text-align: center; font-size: 22px; margin-top: -21%; margin-bottom: 80px;">Selamat Datang Kembali
        </h1>
        <form action="<?=BASEURL?>/C_Auth/validasi" method="post">
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Username</label><br>
            <div class="login"><input type="text" name="uname" placeholder="Username"></div>
            <label style="font-size: 12px; text-align: left; margin-left: 6%; font-weight: bolder;">Password</label><br>
            <div class="login"><input type="Password" name="password" placeholder="Password"></div>
            <input type="submit" name="submit" value="Login" style="margin-bottom: 80px;">
            
            <h style="margin-left:-20px; font-size: 12px; ">Belum Punya Akun ?</h>
            <a href="<?=BASEURL?>/C_Auth/Register">Daftar</a>
        </form>
    </div>
    <div class="float-right">
        <img src="<?=BASEURL?>/img/login.png" style=" width: 600px; height: 400px;">
    </div>
</body>