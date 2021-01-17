<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/create_pinjaman.css">
    <title>Pinjaman</title>
</head>
    <body>
        <div class="container">
            <h1>Create Data</h1>
            <form action="create_pinjaman.php" method="post">
                <div class="w3-panel w3-card">
                    <div class="form-group">
                        <label for="tgl">Tanggal :</label>
                        <input type="date" class="form-control"name="tgl" id="tgl">
                    <div>
                    <div class="form-group">
                        <label for="tempo">Tempo :</label>
                        <input type="date" class="form-control"name="tempo" id="tempos">
                    <div>
                    <div class="form-group">
                        <label for="angsuran">Angsuran :</label>
                        <input type="number" class="form-control"name="angsuran" id="jenis">
                    <div>
                    <div class="form-group">
                        <label for="pinjaman">Jumlah Pinjaman :</label>
                        <input type="number" class="form-control"name="jp" id="jp">
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