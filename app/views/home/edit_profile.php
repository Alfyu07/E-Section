<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <script type="javascript">
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
                event.target // newly activated tab
                event.relatedTarget // previous active tab
            })
        </script>
    <style>
        .circle {
            background-color: aliceblue;
            width: 250px;
            height: 250px;
            align-items: center;
            border-radius: 50%;
            border: 3px solid #BE4C4C;
            margin-top: 125px;
            margin-left: 40%;
        }

        .nav-item:active,
        .nav-item:hover {
            background-color: #FEA5A5;
        }

        .active {
            background-color: #EEEEEE !important;
            border-top-color: #BE4C4C !important;
            border-left-color: #BE4C4C !important;
            border-right-color: #BE4C4C !important;
        }

        .form-control.mx-sm-3 {
            background-color: #ffff !important;
            border-color: #BE4C4C !important;
        }

        .col {
            padding: 10px 20px 20px 10px;
            margin-left: 30px;
        }
    </style>
</head> -->

<body style="font-family: 'Raleway', sans-serif;">
<div class="d-flex p-2" style="height: 250px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
    <?php if($data['gambar'] == null){ ?> 
    <img src="<?= BASEURL?>/img/user.jpg" class="circle" style="margin-left: 41%;">
    <?php }else{?>
    <img src="<?= BASEURL?>/img/upload/<?= $data['gambar'];?>" class="circle" style="margin-left: 41%;"> 
    <?php }?>
    </div>
    <br>
    <div class="container" style="width: 250px; margin: 120px 100px 10px 620px; text-align: center;">
        <form action="<?=BASEURL?>/C_User/save_profile/<?=$data['uname'];?>" enctype="multipart/form-data" method="post">
            <input type="file" id="myFile" name="upload" required>
            <button type="submit" name="submit" style="width: 75px; height: 30px; margin-top: 7px;" > tambah </button>
        </form>
        <br>
        <h5 style="color: #BE4C4C;">
            @Sarah_33
        </h5>
    </div>

    <div class=" container" style="width: 800px; margin-bottom: 5%;">
        <ul class="nav nav-tabs" style="background-color: #EEEEEE; width: fit-content;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" style="color: #BE4C4C">PROFILE</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile"
                style="border:2px solid#BE4C4C;">
                <form action="<?= BASEURL?>/C_User/mengedit/<?= $data['email'];?>/<?= $data['uname'];?>" method="post">
                    <div class="container" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col">
                                <label for="inputPassword6">Email Baru: </label>
                            </div>
                            <div class="col" style="margin-left: -150px;">
                                <input name="email" type="text" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline" value="<?= $data['email'];?>" required>
                            </div>
                            <div class="col" style="margin-left: -5px;">
                                <small id="passwordHelpInline" class="text-muted">
                                    Masukkan Email Baru
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="inputPassword6">Password Lama: </label>
                            </div>
                            <div class="col" style="margin-left: -150px;">
                                <input name="passlam" type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline" required>
                            </div>
                            <div class="col" style="margin-left: -5px;">
                                <small id="passwordHelpInline" class="text-muted">
                                    Masukkan Password Lama
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="inputPassword6">Password Baru: </label>
                            </div>
                            <div class="col" style="margin-left: -150px;">
                                <input name="passbar" type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline" required>
                            </div>
                            <div class="col" style="margin-left: -5px;">
                                <small id="passwordHelpInline" class="text-muted">
                                    Password harus 8-20 karakter
                                </small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="inputPassword6">Confirm Password: </label>
                            </div>
                            <div class="col" style="margin-left: -150px;">
                                <input name="confirm" type="password" id="inputPassword6" class="form-control mx-sm-3"
                                    aria-describedby="passwordHelpInline" required>
                            </div>
                            <div class="col" style="margin-left: -5px;">
                                <small id="passwordHelpInline" class="text-muted">
                                    Masukkan ulang password
                                </small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger"
                        style="background-color: #BE4C4C; margin: 0px 0px 10px 30px">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>