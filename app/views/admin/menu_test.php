<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container" style="margin-top: 9%; margin-left: 5%; height: 300px; width: 400px; float: left;">
            <h1 style="text-align: left; font-size: 30px;">TEST
            </h1>
            <p1 style="font-size: 14px; align-items: left;">
                E-Section menyediakan serangkaian test yang
                mencangkup berbagai topik mulai dari hubungan
                sehat hingga kesehatan mental
            </p1>
        </div>
        <div class="container" style="margin-top: 5%;margin-right: 15%; height: 300px; width: 400px; float: right;">
            <img src="<?=BASEURL?>/img/A4.png" style="width: auto; height: 320px;">
        </div>
    </div>
    <br>
    <?php if($_SESSION['id_role']==1):?>
        <div class="container" style="margin-left: 10%;">
            <form action="<?=BASEURL?>/C_Admin/add_test/<?= $data['id_role']?>" method="get">
                <button class="btn btn-danger" style="background-color: #BE4C4C; font-weight: bold;">TAMBAH</button>
            </form>
        </div>
    <?php endif;?>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container">
        <?php $num = $data['jum'];
                $i = 1;
                foreach($data['isi'] as $row): ?>
                    <?php if($i%3 == 1):?>
                        <div class="row">
                            <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                                <a href="<?= BASEURL?>/C_User/mengtes/<?= $row['judul']?>/<?= $row['id_judul']?>" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                                    <?= $row['judul']?>
                                </a>
                                <p2 class="isi">
                                    <?= $row['deskripsi']?>
                                </p2>
                                <?php if($_SESSION['id_role']==1){?>
                                <div class="btn">
                                    <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="<?= BASEURL?>/C_Admin/update_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >EDIT</a>
                                </div>
                                <div class="btn">
                                <a onclick="return confirm('Apakah Anda yakin?');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="<?= BASEURL?>/C_Admin/delete_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >DELETE</a>
                                </div>
                                <?php }?>
                            </div>
                        <?php if($i==$num):?>
                                </div>
                        <?php endif;?>
                    <?php elseif($i%3==2):?>
                            <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                                <a href="<?= BASEURL?>/C_User/mengtes/<?= $row['id_judul']?>" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                                    <?= $row['judul']?>
                                </a>
                                <p2 class="isi">
                                    <?= $row['deskripsi']?>
                                </p2>
                                <?php if($_SESSION['id_role']==1){?>
                                <div class="btn">
                                    <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="<?= BASEURL?>/C_Admin/update_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >EDIT</a>
                                </div>
                                <div class="btn">
                                <a onclick="return confirm('Apakah Anda yakin?');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="<?= BASEURL?>/C_Admin/delete_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >DELETE</a>
                                </div>
                                <?php }?>
                            </div>
                        <?php if($i==$num):?>
                                </div>
                        <?php endif;?>
                    <?php elseif($i%3==0 || $i==$num):?>
                            <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                                <a href="<?= BASEURL?>/C_User/mengtes/<?= $row['id_judul']?>" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                                    <?= $row['judul']?>
                                </a>
                                <p2 class="isi">
                                    <?= $row['deskripsi']?>
                                </p2>
                                <?php if($_SESSION['id_role']==1){?>
                                <div class="btn">
                                    <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="<?= BASEURL?>/C_Admin/update_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >EDIT</a>
                                </div>
                                <div class="btn">
                                <a onclick="return confirm('Apakah Anda yakin?');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="<?= BASEURL?>/C_Admin/delete_test/<?= $row['id_judul'];?>/<?= $row['id_role'];?>" >DELETE</a>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    <?php endif;?>
                <?php $i+=1;
                    endforeach;?>
        </div>
    </div>
</body>

</html>