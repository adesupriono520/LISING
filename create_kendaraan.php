<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/create_kendaraan.css">
    <title>Create</title>
</head>
    <body>
        <div class="container">
            <h1><center>CREATE DATA</center></h1>
            <div class="w3-panel w3-card">
                <form action="create_kendaraan.php" method="post">
                    <div class="form-group">
                        <label for="nopol">Nomor Polisi :</label>
                        <input type="text" class="form-control"name="nopol" id="nopol">
                    <div>
                    <div class="form-group">
                        <label for="mesin">NO Mesin :</label>
                        <input type="text" class="form-control"name="mesin" id="mesin">
                    <div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kendaraan :</label>
                        <input type="text" class="form-control"name="jenis" id="jenis">
                    <div>
                    <div class="form-group">
                        <label for="warna">Warna :</label>
                        <input type="text" class="form-control"name="warna" id="warna">
                    <div>
                </form>
                <tr>
                    <br>
                    <td><button type="button"class="btn btn-primary">Create</button>
                        <a href="index.php"><button type="button"class="btn btn-danger">Cencel</button></a></td>
                </tr>
            </div>
        </div>
    </body>
</html>