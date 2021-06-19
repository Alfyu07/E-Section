

<body style="font-family: 'Raleway', sans-serif;">
    <?php foreach($data as $row): ?>
    <div class="d-flex p-2" style="height: 250px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
       
        <?php if($row['avatar'] == ''){ ?> 
        <img src="<?= BASEURL?>/img/user.jpg" class="circle" style="margin-left: 41%;">
        <?php }else{?>
        <img src="<?= BASEURL?>/img/upload/<?= $data['gambar'];?>" class="circle" style="margin-left: 41%;"> 
        <?php }?>
    </div>
    <br>
    <div style="margin-top: 125px; margin-left: -3%; font-weight: bolder; text-align: center; color: #BE4C4C;">
        <h5>
            @<?= $row['uname'];?>
        </h5>
    </div>
    <div class="container" style="width: 800px; margin-bottom: 5%;">
        <ul class="nav nav-tabs" style="background-color: #EEEEEE; width: fit-content;">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile" style="color: #BE4C4C">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tes" style="color: #BE4C4C">TES</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile"
                style="border:2px solid#BE4C4C;">
                <div class="container"
                    style="width: 360px; height: 40px; border:1px solid#BE4C4C; margin: 30px 30px 30px 30px; background-color: white;">
                    <p3><?= $row['tgl_lahir'];?></p3>
                </div>
                <div class="container"
                    style="width: 360px; height: 40px; border:1px solid#BE4C4C; margin: 30px 30px 30px 30px; background-color: white;">
                    <p3><?= $row['email'];?></p3>
                </div>
                <?php if ($row['avatar']=='') {$row['avatar']='user.jpg';} ?>
                <form action="<?= BASEURL?>/C_User/edit_profile/<?= $row['email'];?>/<?= $row['uname'];?>/<?= $row['avatar']?>" method="post">
                    <button type="submit" class="btn btn-danger"
                        style="background-color: #BE4C4C; margin: 0px 0px 10px 30px">
                        Edit Profile
                    </button>
                </form>
            </div>
            <div class="tab-pane fade " id="tes" role="tabpanel" aria-labelledby="tes"
                style="border:2px solid#BE4C4C; background-color: #EEEEEE;">
                <h6 style="font-weight: bold; margin: 10px 10px 10px 10px">
                    <button type="button" class="btn btn-danger"
                        style="background-color: #fff; color:#BE4C4C; font-weight: bold;">
                        Tes Depresi
                    </button>
                </h6>
                <div class="container"
                    style="width: 360px; height: 40px; border:1px solid#BE4C4C; margin: 0px 10px 10px 10px; background-color: white; color: #BE4C4C;">
                    <p3>Diambil Pada 03-05-2021</p3>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</body>

</html>