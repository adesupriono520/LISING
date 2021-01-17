<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="CSS/index.css">
    <?php
        include_once('connection.php');
        $sql = sqlsrv_query($conn,"SELECT *FROM PROFILE INNER JOIN KENDARAAN ON PROFILE.id = KENDARAAN.profile_id
        JOIN PINJAMAN ON PROFILE.id = PINJAMAN.profile_id");
    ?>
    <title>HOME</title>
</head>
    <body>
    <br>
        <div class="header">
            <form action="index.php" method="post">
                <table class="w3-table-all w3-card-4">
                    <tr>
                        <th><center>ID</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Jenis Kelamin</center></th>
                        <th><center>No Hp</center></th>
                        <th><center>Nopol</center></th>
                        <th><center>Jenis Kendaraan</center></th>
                        <th><center>Angsuran</center></th>
                        <th><center>Action</center></th>
                    </tr>
                    <?php
                        while($data = sqlsrv_fetch_array($sql)){
                            echo"<tr>
                                    <td><center>$data[id]</center></td>
                                    <td><center>$data[nama]</center></td>
                                    <td><center>$data[alamat]</center></td>
                                    <td><center>$data[jenis_kelamin]</center></td>
                                    <td><center>$data[no_hp]</center></td>
                                    <td><center>$data[nopol]</center></td>
                                    <td><center>$data[jenis_kendaraan]</center></td>
                                    <td><center>$data[angsuran]</center></td>
                                    <td>
                                        <a href='detail.php'><input type='button' name='detail' class='btn btn-success btn-sm' value='DETAIL'></a>
                                        <a href='edit.php'><input type='button' name='edit' class='btn btn-warning btn-sm' value='EDIT'></a>
                                        <a href='delete.php'><input type='button' name='delete' class='btn btn-danger btn-sm' value='DELETE'></a>
                                    </td>
                                </tr>";
                        }
                    ?>
                </table>
            </form>
            <br>
            <tr>
                <td><a href="create_profile.php"><button type="button"class="btn btn-primary">Create Profile</button></a></td>
                <td><a href="create_kendaraan.php"><button type="button"class="btn btn-primary">Create Kendaraan</button></a></td>
                <td><a href="create_pinjaman.php"><button type="button"class="btn btn-primary">Create Pinjaman</button></a></td>
            </tr>
        </div>  
    </body>
</html>