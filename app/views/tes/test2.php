<body style="font-family: 'Raleway', sans-serif">
    <div
      class="d-flex p-2"
      style="
        height: 300px;
        background-color: #fea5a5;
        margin: 0px;
        align-items: middle;
      "
    >
      <div class="container" style="height: 300px; width: 400px">
        <h1
          class="Judul"
          style="
            font-size: 30px;
            font-weight: bolder;
            margin: 150px 60px 100px 90px;
          "
        >
        TES <?= $data['judul'];?>
        </h1>
      </div>
    </div>
    <br />
    <div
      class="d-flex p-2"
      style="
        background-color: #eeeeee;
        align-items: left;
        margin-left: 10%;
        margin-right: 10%;
        margin-bottom: 5%;
      "
    >
      <div class="container">
        <br />
        <div class="row" style="margin-left: 35%; width: 400px">
          <div class="col-sm">
            <div class="container" style="width: 70">
              <img
                src="<?= BASEURL?>/test/star 2.png"
                style="width: 50px; height: 50px"
              />
              <p2>Intruksi</p2>
            </div>
          </div>
          <div class="col-sm">
            <div class="container" style="width: 70px">
              <img
                src="<?= BASEURL?>/test/star 1.png"
                style="width: 50px; height: 50px"
              />
              <p2 style="font-weight: bold; margin: 10px">Tes</p2>
            </div>
          </div>
          <div class="col-sm">
            <div class="container" style="width: 70px">
              <img
                src="<?= BASEURL?>/test/star 2.png"
                style="width: 50px; height: 50px"
              />
              <p2 style="margin: 10px">Hasil</p2>
            </div>
          </div>
        </div>
        <br />
        <h6 style="color: #be4c4c; text-align: center">
          Selama 2 minggu terakhir, seberapa sering Anda diganggu oleh salah
          satu masalah berikut?
        </h6>
        <br />
        
        <table class="table">
        <?php foreach($data['isi'] as $row): ?>
          <tr style="border-color: #be4c4c">
            <th scope="row" style="width: 60px">
              <img
                src="<?= BASEURL?>/test/Kotak.png"
                style="width: 30px; height: auto"
              />
            </th>
            
            <td>
              <?=$row['pertanyaan'];?>
              <br />
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-secondary active">
                    <input type="radio" name="options1" id="option1" checked />
                    <?= $row['pertanyaan'];?>
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" /> Iya
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" /> Netral
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option4" /> Tidak
                  </label>
                  <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" /> Sangat
                    Tidak
                  </label>
                </div>
            </td>
            
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <form action="<?=BASEURL?>/C_User/hasilTes/" method="post">
    <div class="container" style="margin-bottom: 5%">
    
      <button type="submit" class="btn btn-danger" style="background-color: #be4c4c; font-weight: bold; margin-left: 90%">
        Selanjutnya
      </button>
    </div>
</form>

  </body>
</html>
