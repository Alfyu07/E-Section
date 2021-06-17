<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container centered" style="margin-top: 13%;">
            <h1 style="text-align: center; font-size: 30px;">ANAK-ANAK</h1>
        </div>
    </div>
    <br>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        
        <div class="container">
            <!-- FORM START -->
            <?php foreach($data['isi'] as $row):?>
                <div class="row">
                    <form action="<?= BASEURL?>/C_Admin/update_foto/<?= $row['id_artikel']?>/<?= $row['id_role']?>" method="post" enctype="multipart/form-data">
                        <div class="col-sm-4">
                            <div class="card" style="width: 20rem;">
                                <img class="card-img-top" src="<?=BASEURL?>/img/upload/<?= $row['gambar']?>" alt="Add Foto" style="height: 11rem;">
                                <div class="card-body">
                                    <input type="file" name="upload">
                                    <button type="submit" name="submit" class="btn btn-danger mt-2" style="background-color: #BE4C4C ;">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </form>               
                        <div class="col-sm-8">
                            <form action="<?= BASEURL?>/C_Admin/edit/<?= $row['id_artikel']?>/<?= $row['id_role']?>" method="post"> 
                                <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">JUDUL MATERI</label>
                                <div class="input-group input-group-lg">
                                    <input name="judul" type="text" class="form-control" aria-label="Large"
                                        aria-describedby="inputGroup-sizing-sm" value="<?= $row['judul']?>" required>
                                </div>
                                <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">SOURCE</label>
                                <div class="input-group input-group-lg">
                                    <input name="source" type="text" class="form-control" aria-label="Large"
                                        aria-describedby="inputGroup-sizing-sm" value="<?= $row['source']?>" required>
                                </div>
                                <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">TAG</label>
                                <div class="input-group input-group-lg">
                                    <input name="tag" type="text" class="form-control" aria-label="Large"
                                        aria-describedby="inputGroup-sizing-sm" value="<?= $row['tag']?>" required>
                                </div>
                                
                        </div>
                </div>
                <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">MATERI</label>
                <div class="input-group input-group-lg">
                    <input name="materi" type="textarea" class="form-control" aria-label="Large"aria-describedby="inputGroup-sizing-sm" style="height: 7rem" value="<?= $row['materi']?>" required>
                </div>
                    <br>
                    <table class="table">
                        <thead align="center" style="background-color: #BE4C4C; color: white;">
                            <tr>
                                <th>FAKTA</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white;">
                            <tr>
                                <td><input name="fakta" type="textarea" class="form-control" aria-label="Large"
                                    aria-describedby="inputGroup-sizing-sm" style="height: 7rem" value="<?= $row['fakta']?>" required></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <button type="button" class="btn btn-danger" style="background-color: #BE4C4C ;">ADD</button>
                    <button type="button" class="btn btn-danger" style="background-color: #BE4C4C;">DELETE</button> -->
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" name="submit" class="btn btn-danger"
                            style="background-color: #BE4C4C; width: 30rem;">SIMPAN</button>
                    </div>
                </form>
            <?php endforeach?>
        </div>
    </div>
</body>
