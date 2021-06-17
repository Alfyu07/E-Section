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
                            <li><a
                                    href="https://www.youtube.com/watch?v=LnQ1MdP-Qxc">https://www.youtube.com/watch?v=LnQ1MdP-Qxc</a>
                            </li>
                            <!-- <li><a
                                    href="https://www.youtube.com/watch?v=p1HFymHtGho">https://www.youtube.com/watch?v=p1HFymHtGho</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=HxySrSbSY7o">https://www.youtube.com/watch?v=HxySrSbSY7o</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=KQZ9hDDz704">https://www.youtube.com/watch?v=KQZ9hDDz704</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=nKKDsIuMaKU">https://www.youtube.com/watch?v=nKKDsIuMaKU</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=hpCyiyNqzlE">https://www.youtube.com/watch?v=hpCyiyNqzlE</a>
                            </li> -->
                        </ul>
                    </h7>
                    <br>
                    <!-- <h5 style="font-weight: bolder;">Source Konten Remaja</h5>
                    <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                    <h7>
                        <ul>
                            <li><a
                                    href="https://www.youtube.com/watch?v=00BYyDr8Xdg">https://www.youtube.com/watch?v=00BYyDr8Xdg</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=hpCyiyNqzlE">https://www.youtube.com/watch?v=hpCyiyNqzlE</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=Gn7ZQ2x0cOE">https://www.youtube.com/watch?v=Gn7ZQ2x0cOE</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=OejdOS4IqeE&t=21s">https://www.youtube.com/watch?v=OejdOS4IqeE&t=21s</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=j_mFJ2d0qxQ&t=36s">https://www.youtube.com/watch?v=j_mFJ2d0qxQ&t=36s</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=Yvw7QGytgNQ">https://www.youtube.com/watch?v=Yvw7QGytgNQ</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=YK1Gch1CwI4">https://www.youtube.com/watch?v=YK1Gch1CwI4</a>
                            </li>
                        </ul>
                    </h7>
                    <br>
                    <h5 style="font-weight: bolder;">Source Konten Dewasa</h5>
                    <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                    <h7>
                        <ul>
                            <li><a
                                    href="https://www.youtube.com/watch?v=Gn7ZQ2x0cOE">https://www.youtube.com/watch?v=Gn7ZQ2x0cOE</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=kMY-v0F6bX0&t=3s">https://www.youtube.com/watch?v=kMY-v0F6bX0&t=3s</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=uWD5FGznMHg">https://www.youtube.com/watch?v=uWD5FGznMHg</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=4qWt2qZ59w8">https://www.youtube.com/watch?v=4qWt2qZ59w8</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=41cFmDTABJY">https://www.youtube.com/watch?v=41cFmDTABJY</a>
                            </li>
                            <li><a
                                    href="https://www.youtube.com/watch?v=fhl6SFBHgcs">https://www.youtube.com/watch?v=fhl6SFBHgcs</a>
                            </li>
                        </ul>
                    </h7> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>