<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HALAMAN ADMIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container centered" style="margin-top: 13%;">
            <h1 style="text-align: center; font-size: 30px;">DEWASA</h1>
        </div>
    </div>
    <br>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 20rem;">
                        <img class="card-img-top" src="/public/img/addfoto.jpg" alt="Add Foto">
                        <div class="card-body">
                            <button type="button" class="btn btn-danger" style="background-color: #BE4C4C;">
                                ADD FOTO
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">JUDUL ARTIKEL</label>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Large"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">SOURCE</label>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Large"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">TAG</label>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Large"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">ARTIKEL</label>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" aria-label="Large"
                            aria-describedby="inputGroup-sizing-sm" style="height: 7rem">
                    </div>
                </div>
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
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-danger" style="background-color: #BE4C4C ;">ADD</button>
            <button type="button" class="btn btn-danger" style="background-color: #BE4C4C;">DELETE</button>
            <br>
            <div class="row justify-content-center">
                <button type="button" class="btn btn-danger"
                    style="background-color: #BE4C4C; width: 30rem;">SIMPAN</button>
            </div>
        </div>
    </div>
</body>

</html>