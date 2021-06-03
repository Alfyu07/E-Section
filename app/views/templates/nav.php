<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $_SESSION['id_role'];?></title>
    <link rel="stylesheet" type="text/css" href="<?=BASEURL?>/css/style.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .d-flex {
            /* height: 450px; */
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
        #navbar1 .navbar-nav{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .p1 {
            font-size: 14px;
            align-items: left;
            color: #4E3B3B;
        }
        .btn.btn-primary {
            background-color: #be4c4c;
            border-color: #eeeeee;
        }

        p.card-text {
            font-weight: bold;
        }
    </style>
</head>

<body style="font-family: 'Raleway', sans-serif;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 65px;"">
        <a class="navbar-brand" href="#"><img src="<?=BASEURL?>/img/logo.png" style="width: 80px; margin: 4px 12px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1"
            aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ">
            <li class="nav-item" style="margin-left: 25%">
                <form class="form-inline my-2">
                    <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search"
                        style="width:350px">
                    <button class="btn btn-outline-danger" type="submit">
                        Search
                    </button>
                </form>
            </li>
            <!-- <div class="d-flex" style="background-color: transparent;"> -->
            <li class="nav-item dropdown" style="margin-right: 65px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?=BASEURL?>/img/profile.png" style="width: 45px;">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <img src="<?=BASEURL?>/img/profile.png" width="50px"  >
                    <a href="#" style="left: 60%;">Profile</a> <br>
                    <div class="dropdown-divider"></div>
                    <img src="<?=BASEURL?>/img/logout.png" width="50px" >
                    <a href="<?=BASEURL?>/C_User/logout" style="left: 60%;">Log Out</a> <br>
                </div>
            </li>
        </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 30px; background-color: #BE4C4C !important">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" style="padding-right: 400px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MATERI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="box-shadow: 0px 8px 18px 0px rgba(0,0,0,0.1); border-radius: 10%; ">
                            <img src="<?=BASEURL?>/img/Anak.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="<?=BASEURL?>/C_Admin/list_konten/4" style="left: 60%;">Anak</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Remaja.png" width="50px" height="50px" style="margin-right: 30px ;">
                            <a href="<?=BASEURL?>/C_Admin/list_konten/3" style="left: 60%;">Remaja</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Dewasa.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="<?=BASEURL?>/C_Admin/list_konten/2" style="left: 60%;">Dewasa</a> <br>
                        </div>
                    </li>

                    <li class="nav-item dropdown" style="padding-right: 400px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            TES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="box-shadow: 0px 8px 18px 0px rgba(0,0,0,0.1); border-radius: 10%; ">
                            <img src="<?=BASEURL?>/img/Anak.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Anak</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Remaja.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Remaja</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Dewasa.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Dewasa</a> <br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SOURCE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                            style="box-shadow: 0px 8px 18px 0px rgba(0,0,0,0.1); border-radius: 10%; ">
                            <img src="<?=BASEURL?>/img/Anak.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Anak</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Remaja.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Remaja</a> <br>
                            <div class="dropdown-divider"></div>
                            <img src="<?=BASEURL?>/img/Dewasa.png" width="50px" height="50px" style="margin-right: 30px;">
                            <a href="#" style="left: 60%;">Dewasa</a> <br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>