<head>
    <title>navbar</title>
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/style.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <style>
        .d-flex {
            height: 450px;
            background-color: #FEA5A5;
            margin: 0px;
            align-items: left;
        }

        .row {
            margin: 30px 0px 10px 0px;
        }

        .col-sm {
            margin-left: 5%;
            margin-right: 5%;
        }

        .card {
            margin: 10px 0px 20px 0px;
        }

        .p1 {
            font-size: 14px;
            align-items: left;
            color: #4E3B3B;
        }
    </style>
</head>
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