<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container" style="margin-top: 9%; margin-left: 5%; height: 300px; width: 400px; float: left;">
            <h1 style="text-align: left; font-size: 30px;">
                Menu <?php 
                if($data['id_role']==2){
                    echo "Dewasa";
                }
                else if($data['id_role']==3){
                    echo "Remaja";
                }
                else if($data['id_role']==4){
                    echo "Anak-anak";
                }
                ?>
            </h1>
            <p1 style="font-size: 14px; align-items: left;">
                E-Section menyediakan serangkaian video dan artikel
                edukasi yang bertujuan untuk mengenalkan dan mengajarkan
                anak-anak tentang pubertas dan hubungan sehat
            </p1>
        </div>
        <div class="container" style="margin-top: 5%;  margin-right: 10%; height: 300px; width: 400px; float: right;">
            <img src="<?=BASEURL?>/img/A1.png" style="width: 300px; height: 300px;">
        </div>
    </div>
    <br>
    <div class="container" style="margin-left: 10%;">
        <form action="<?=BASEURL?>/C_Admin/add_artikel/<?= $data['id_role']?>" method="get">
            <button class="btn btn-danger" style="background-color: #BE4C4C; font-weight: bold;">TAMBAH</button>
        </form>
        
    </div>
    <br>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container">
            <?php 
                $num = $data['jum'];
                $i=1;
                foreach($data['isi'] as $row):
                    if($i%3 == 1){
                        echo "<div class='row'>";
                        echo '<div class="card" style="width: 20rem; margin: 30px 25px;">
                    <a href="'.BASEURL.'/C_Admin/ArtikelPage/'.$row['id_artikel'].'" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        '.$row['judul'].'
                    </a>
                    <img class="card-img-top" src="'.BASEURL.'/img/upload/'.$row['gambar'].'" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <div class="btn">
                            <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="'.BASEURL.'/C_Admin/update_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'">EDIT</a>
                        </div>
                        <div class="btn">
                            <a onclick="return confirm('."'"."Apakah Anda yakin?"."'".');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="'.BASEURL.'/C_Admin/delete_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'" >DELETE</a>
                        </div>
                        <br>
                        <p class="card-text">
                            Tag:
                            <br/>';
                            $tag = explode('/', $row['tag']);
                            for($j = 0; $j < count($tag); $j++){
                                echo '<a class="btn btn-primary" href="#" role="button">'.$tag[$j].'</a>';
                            }
                        echo '</p>
                    </div>
                </div>';
                        if($i==$num){
                            echo "</div>";
                        }
                    }
                    else if($i%3==2){
                        echo '<div class="card" style="width: 20rem; margin: 30px 25px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        '.$row['judul'].'
                    </a>
                    <img class="card-img-top" src="'.BASEURL.'/img/upload/'.$row['gambar'].'" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <div class="btn">
                            <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="'.BASEURL.'/C_Admin/update_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'" >EDIT</a>
                        </div>
                        <div class="btn">
                            <a onclick="return confirm('.'"Apakah Anda yakin?"'.');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="'.BASEURL.'/C_Admin/update_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'" >DELETE</a>
                        </div>
                        <br>
                        <p class="card-text">
                            Tag:
                            <br/>';
                            $tag = explode('/', $row['tag']);
                            for($j = 0; $j < count($tag); $j++){
                                echo '<a class="btn btn-primary" href="#" role="button">'.$tag[$j].'</a>';
                            }
                        echo '</p>
                    </div>
                </div>';
                        if($i==$num){
                            echo "</div>";
                        }
                    }
                    else if($i%3==0 || $i==$num){
                        echo '<div class="card" style="width: 20rem; margin: 30px 25px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        '.$row['judul'].'
                    </a>
                    <img class="card-img-top" src="'.BASEURL.'/img/upload/'.$row['gambar'].'" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <div class="btn">
                            <a class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 10px;" href="'.BASEURL.'/C_Admin/update_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'" >EDIT</a>
                        </div>
                        <div class="btn">
                            <a onclick="return confirm('.'"Apakah Anda yakin?"'.');" class="btn" role="button" style="background-color: white; border-color: #BE4C4C; 
                            border-radius: 5px; width: 100px; color: #BE4C4C; margin: 0px 0px 0px 5px;" href="'.BASEURL.'/C_Admin/update_artikel/'.$row['id_artikel'].'/'.$row['id_role'].'" >DELETE</a>
                        </div>
                        <br>
                        <p class="card-text">
                            Tag:
                            <br/>';
                            $tag = explode('/', $row['tag']);
                            for($j = 0; $j < count($tag); $j++){
                                echo '<a class="btn btn-primary" href="#" role="button">'.$tag[$j].'</a>';
                            }
                        echo '</p>
                    </div>
                </div>';
                        echo "</div>";
                    }
                    $i+=1;
                endforeach;
            ?>
            <!-- <div class="row">
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">Penolakan
                        Terjadi Pada Semua Orang
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/rejection.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Hubungan Sehat</a>
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">Sedih dan
                        Senang
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/SH.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Intrapersonal</a>
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        Menyelesaikan Konflik
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/Conflict.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Hubungan Sehat</a>
                        </p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-sm">
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        Apa Itu Gender?
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/gender.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Intrapersonal</a>
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        Candaan
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/Teasing.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Hubungan Sehat</a>
                        </p>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin: 30px 1px 30px 1px;">
                    <a href="#" style="background-color: #BE4C4C; color: aliceblue; text-align: center;">
                        Ragam Keluarga
                    </a>
                    <img class="card-img-top" src="<?=BASEURL?>/video/Anak/family.jpg" alt="Card image cap">
                    <div class="card-body" style="background-color: #FEA5A5;">
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%;  margin: -15px 0px 0px 40px; float: left;">
                            EDIT
                        </button>
                        <button class="btn btn-danger" type="button"
                            style="background-color: white; color: #BE4C4C; border-color: #BE4C4C; border-radius: 5px; width: 30%; margin: -15px 40px 0px 0px; float: right">
                            DELETE
                        </button>
                        <br>
                        <p p class="card-text">
                            Tag:
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Keluarga</a>
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</body>

