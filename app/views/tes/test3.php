<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 300px;	background-color: #FEA5A5; margin: 0px; align-items: middle;">
        <div class="container" style="height: 300px; width: 400px;">
            <h1 class="Judul" style="font-size: 30px; font-weight: bolder; margin: 150px 60px 100px 90px;">
            TES <?= $data['judul'];?>
            </h1>
        </div>
    </div>
    <br>
    <div class="d-flex p-2" style="background-color: #EEEEEE;margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container" style="margin-left: 20%; width: 700px;">
            <br>
            <div class="row" style="width: 400px; margin-left: 20%;">
                <div class="col-sm">
                    <div class="container" style="width: 70;">
                        <img src="<?= BASEURL?>/test/star 2.png" style="width: 50px; height: 50px;">
                        <p2 style="font-weight: bold;">Intruksi</p2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="container" style="width: 70px;">
                        <img src="<?= BASEURL?>/test/star 2.png" style="width: 50px; height: 50px;">
                        <p2 style="margin: 10px;">Tes</p2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="container" style="width: 70px;">
                        <img src="<?= BASEURL?>/test/star 1.png" style="width: 50px; height: 50px;">
                        <p2 style="margin: 10px;">Hasil</p2>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 5%;">
                <div class="container" style="width: 600px; background-color:#BE4C4C;">
                    <h6 style="color: #ffff; margin-top: 10px;">Hasil Dari Test Anda Adalah</h6>
                    <h3 style="font-weight: bold; color: #ffff;"><?= $data['kategori']?></h3>
                </div>
            </div>
            <div class="row" style="margin-top: 5%;">
                <div class="container" style="width: 250px; background-color:#DE7E7E; margin: 0px 20px 0px 50px;">
                    <h6 style="color: #ffff; margin-top: 10px; text-align: center;">Total skor anda ialah <?= $data['hasil']?>/<?= $data['maks']?></h6>
                </div>
                <form action="<?=BASEURL?>/C_User/list_test/<?= $data['id_role']?>/<?= $data['judul']?>" method="post">
                <button class="btn btn-danger"
                    style="width: 250px; background-color:#BE4C4C;margin: 0px 40px 0px 80px;">
                    Ambil tes lain
                </button>
                </form>
            </div>
            <br>
            <div class="row" style="margin-top: 5%;">
                <div class="container" style="margin-left: 50px;">
                    <h5 style="font-weight:bold;">
                        Berdasarkan hasil test <?= $data['hasil']?>/<?= $data['maks']?>. Anda memiliki <?= $data['kategori']?>
                    </h5>
                    <h6>Test ini hanya digunakan untuk mengedukasi
                        dan membantu pengguna untuk memahami diri mereka sendiri.
                        Oleh karena itu, Kami menyarankan Anda untuk mengunjungi
                        psikolog terdekat di area Anda.
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <h6 style="font-weight: bold;">Video dan Artikel Terkait</h6>
        <div class="card" style="width: 320px; height: auto;">
            <a href="#">
                <h6 class="card-title" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                    Melukai Diri Sendiri
                </h6>
            </a>
            <img class="card-img-top" src="<?= BASEURL?>/video/Remaja/sf.jpg" alt="Card image cap">
        </div>
    </div> -->
    <br>
</body>

</html>