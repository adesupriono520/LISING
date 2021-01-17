<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Create Data</title>
    <link rel="stylesheet" href="CSS/create.css">
</head>
    <body>
        <br>
        <div class="container">
            <h1><center>CREATE DATA</center></h1>
            <br>
            <div class="w3-panel w3-card">
                <form action="create.php" action="post">
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control"name="nama" id="nama">
                    <div>
                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control"name="alamat" id="alamat">
                    <div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin :</label>
                        <input type="text" class="form-control"name="jk" id="jk">
                    <div>
                    <div class="form-group">
                        <label for="hp">No Hp :</label>
                        <input type="number" class="form-control"name="hp" id="hp">
                    <div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kendaraan :</label>
                        <input type="text" class="form-control"name="jenis" id="jenis">
                    <div>
                </form>
            </div>
        </div>
        <tr>
           <td><button type="button"class="btn btn-primary">Create</button>
           <a href="index.php"><button type="button"class="btn btn-danger">Cencel</button></a></td>
        </tr>
    </body>
</html>