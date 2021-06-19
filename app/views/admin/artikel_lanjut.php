<!DOCTYPE html>
<html lang="en">

<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container" style="margin: 7% 0% 0% 5%; height: 300px; ">
            <div class="row">
                <div class="col-sm">
                    <img src="<?=BASEURL?>/img/upload/<?=$data['gambar']?>"
                        style="height: 400px; width: auto; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </div>
                <div class="col-sm-4">
                    <h1 style="text-align: left; font-size: 30px; font-weight: bolder;">
                        <?= $data['judul'];?>
                    </h1>
                    <p1 style="font-size: 14px; align-items: left;">
                        <?= $data['fakta'];?>
                    </p1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" style="margin-left: 5%; margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div style="padding-top: 5rem; text-align: justify; ">
                        <h5 style="font-weight: bolder;">Penulis</h5>
                        <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                        <div style=" text-align: justify; text-justify: inter-word;">
                            <a class="link" href="<?= $data['sc'];?>">
                                <?= $data['sc'];?>
                            </a>
                        </div>
                    </div>
                    <div style="padding-top: 5rem; text-align: justify; ">
                        <h5 style="font-weight: bolder;">Segmen Artikel</h5>
                        <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                        <h7><?= $data['materi'];?> </h7>
                    </div>
                    <!-- <div style="padding-top: 5rem; text-align: justify; ">
                        <h5 style="font-weight: bolder;">Fakta</h5>
                        <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                        <h7>Dalam pertunjukan animasi unik dua kali seminggu yang unik ini, kami menjelajahi jalur
                            fisik, mental, dan emosional menuju kesehatan. Dengan penekanan pada pendidikan, acara ini
                            membahas tren terbaru dan praktik kesehatan yang sudah berlangsung lama — mulai dari
                            kemanjuran eksperimen syukur hingga pentingnya sinar matahari dan vitamin D. </h7>
                    </div> -->
                </div>
                <!-- <div class="col-sm-3">
                    <div class="dropdown" style="margin-top: 10%; margin-right: 5%; margin-left: 35%;">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="font-size: 20px; background-color: #FEA5A5; color: black; width: 400px; height: 80px; background-color: #FEA5A5; border-color: #BE4C4C;">
                            Fakta A
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: aliceblue; border-color: #BE4C4C; width: 400px; height: auto;">
                            <p1>
                                Pubertas biasanya dimulai antara usia 8 dan 14, tetapi setiap gadis berbeda.
                                Kita semua tumbuh dan berubah pada tingkat yang berbeda, dan tidak ada yang dapat
                                kamu lakukan untuk mewujudkannya cepat atau lambat. Tubuhmu akan berubah pada waktunya.
                            </p1>
                        </div>
                    </div>
                    <div class="dropdown" style="margin-top: 10%; margin-right: 5%; margin-left: 35%;">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="font-size: 20px; background-color: #FEA5A5; color: black; width: 400px; height: 80px; background-color: #FEA5A5; border-color: #BE4C4C;">
                            Fakta B
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p1>
                                Hormon dapat membuatmu berkeringat atau jerawatan,
                                tetapi selama kamu memiliki kebersihan pribadi yang baik,
                                kamu akan tetap terlihat dan merasa sehat.
                            </p1>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    </div>



</body>

</html>