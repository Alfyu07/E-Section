<!DOCTYPE html>
<html lang="en">

<head>
    <title>Source</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 300px;	background-color: #FEA5A5; margin: 0px; align-items: middle;">
        <div class="container" style="height: 300px; width: 400px;">
            <h1 class="Judul" style="font-size: 30px; font-weight: bolder; margin: 150px 60px 100px 90px;">
                SOURCE
            </h1>
        </div>
    </div>
    <br>
    <div class="d-flex p-2" style="background-color: #EEEEEE; align-items: center; height: auto; margin-bottom: 5%;">
        <div class="container" style="margin-left: 5%;">
            <div class="container">
                <div style="padding-top: 5rem; text-align: justify; ">
                    <h5 style="font-weight: bolder;">Source Konten <?php 
                if($data['id_role']==2){
                    echo "Dewasa";
                }
                else if($data['id_role']==3){
                    echo "Remaja";
                }
                else if($data['id_role']==4){
                    echo "Anak-anak";
                }
                ?></h5>
                    <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                    <h7>
                        <ul>
                        <?php foreach($data['isi1'] as $row):?>
                            <li><a
                                    href="<?= $row['source']?>"><?= $row['source']?></a>
                            </li>
                        <?php endforeach;?>
                        <?php foreach($data['isi2'] as $row):?>
                            <li><a
                                    href="<?= $row['source']?>"><?= $row['source']?></a>
                            </li>
                        <?php endforeach;?>
                        </ul>
                    </h7>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>